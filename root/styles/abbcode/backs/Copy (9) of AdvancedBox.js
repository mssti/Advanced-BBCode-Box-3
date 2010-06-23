// <![CDATA[
/** Opera doesn't know URL cursor **/
if ( ! navigator.userAgent.match(/(^|\W)(Opera)\/(\d+)(\.\d+)?/) ) { document.write( '<style type="text/css" media="all"><!--' + "\n\r" + 'table.ncode_imageresizer_warning, .attach_me, .attach_parent, .hoverbox { cursor: url("styles/abbcode/zoomin.cur"), pointer; }'+ "\n\r" + '--></style>'); }

/** AdvancedBox JS - Start
* This work is open source
* AdvancedBox for resized images based on "Reimg Image Resizer (+ lightbox)" from http://www.taletn.com/ - http://www.phpbb.com/community/viewtopic.php?f=70&t=907805
* Paked with : A JavaScript Compressor.  version 3.0 - http://dean.edwards.name/packer/
**/

var AdvancedBox = new function( )
{
	/** Global Variables **/

	/** The browser **/
	var IE = ( window.navigator.userAgent.match(/(^|\W)(MSIE)\s+(\d+)(\.\d+)?/) ) ? true : false;
	/** Use sexy looks ? **/
	var animate = true; // Options : true | false
	var elemfade;
	/** For display the image (opacity effect) : Integer value from (1-100) **/
	var animateInDuration = 6;
	var animateOutDuration = 6;
	/** For enlarge or shrink the lightbox delay : Integer value from (1-100) **/
	var BoxScaleSteps = 18;
	/** Set opacity on background element : integer value from (1-100) **/
	var ojbOpacity = 60;
	/** The size of "air" up to page **/
	var borderSize = 20;
	/** If you adjust the padding in the CSS, you will need to update this variable **/
	var padding = 4;
	/** Save the "image object" for global access **/
	var newObjImage = null;
	/** Dimensions of the box **/
	var MaxWidth, MaxHeight = 0;
	/** Zoom level **/
	var zoomLevel = 10;
	/** Loading **/
	var Wait_pass = 0;
	/** Slide Show **/
	var SlideWait = 0;
	/** The number of seconds to wait ( if animation is enabled, the animateXXDuration value will be added **/
	var SlideShowDuration = 5;
	var SlideShows = new Array( );

	/** Initialize all **/
	Start = function( url )
	{
		/** At first run, creates the element container **/
		if ( !$( 'overlay' ) ) { Create( ); }
		/** Show the loading image **/
		ElementShow( 'overlay' );
		ElementShow( 'loadingLink' );
		/** Create a new image with a Clear the image url **/
		zoomLevel = 10;
		newObjImage = new Image( );
		newObjImage.src = url_clean( url );
		/**
		* Let's do some extra checks
		* This way is better than :
		* newObjImage.onload = Prepare( newObjImage, zoomLevel );
		* newObjImage.onload = function(){ Prepare( newObjImage, zoomLevel ); }
		**/	
		Wait_pass = 0;
		var timer = window.setInterval( function( )
		{
			/** Safety end the process if can't load the image afer 120 intents ( 1 Minutes ) **/
			Wait_pass++; if ( Wait_pass == 120 ) { window.clearInterval( timer ); Close( ); }
			/** Seems that IE when create an image gives a default width to 28 **/
			if ( !newObjImage.readyState == 'complete' || !newObjImage.complete ) { if ( newObjImage.width > 100) { window.clearInterval( timer ); Prepare( newObjImage, zoomLevel ); } } 
			else { window.clearInterval( timer ); Prepare( newObjImage, zoomLevel ); }
		},10)
		return false;
	},

	/** Creates the elements container and appends it to the main document ( The background, image and close button ). **/
	Create = function( )
	{
		/** Preload the navbar buttons **/
		var preload_image_array = new Array( "advancedbox_blank.gif", "advancedbox_icon_close.gif", "advancedbox_icon_zoom.gif", "advancedbox_icon_next.gif", "advancedbox_icon_prev.gif", "advancedbox_icon_play.gif", "advancedbox_icon_pause.gif", "advancedbox_icon_loading.gif" );
		var preload_image_object = new Image(); for( i = 0, pi = preload_image_array.length; i < pi; i++ ) { preload_image_object.src = "./styles/abbcode/" + preload_image_array[i]; }

		var objBody = document.getElementsByTagName( 'body' ).item(0);
		/** Create the background element (div) **/
		var objOverlay = document.createElement( 'div' );
		objOverlay.setAttribute( 'id', 'overlay' ); // objOverlay.onclick = function() { Close(); return false; }
		if ( IE ) { objOverlay.style.filter = 'alpha(opacity:'+ojbOpacity+')'; } else { objOverlay.style.KHTMLOpacity = objOverlay.style.MozOpacity = objOverlay.style.opacity = (ojbOpacity/100); }
		objBody.appendChild(objOverlay);
		/** Create a big container **/
		var objLightbox = document.createElement( 'div' );
		objLightbox.setAttribute( 'id', 'lightbox' );
		objLightbox.style.display = 'none';
		objBody.appendChild(objLightbox);
		/** Create a big image container **/
		var objOuterImageContainer = document.createElement( 'div' );
		objOuterImageContainer.setAttribute( 'id', 'outerImageContainer' );
		objLightbox.appendChild(objOuterImageContainer);
		/** Create the image container **/
		var objImageContainer = document.createElement( 'div' );
		objImageContainer.setAttribute( 'id', 'imageContainer' );
		objOuterImageContainer.appendChild(objImageContainer);
		/** Create the image here **/
		var objLightboxImage = document.createElement( 'img' );
		objLightboxImage.setAttribute( 'id', 'lightboxImage' );
		objLightboxImage.setAttribute( 'src', ImageResizerBlankImage);
		objLightboxImage.onclick = function() { Close(); return false; }
		objImageContainer.appendChild(objLightboxImage);
		/** Create the toolbar **/
		var objHoverNav = document.createElement( 'div' );
		objHoverNav.setAttribute( 'id', 'hoverNav' );
		objOuterImageContainer.appendChild(objHoverNav);
		/** Create the Close button **/
		var objBottomNavCloseLink = document.createElement( 'a' );
		objBottomNavCloseLink.setAttribute( 'id', 'CloserLink' ); // objBottomNavCloseLink.setAttribute( 'href', '#' );
		objBottomNavCloseLink.alt = objBottomNavCloseLink.title = ImageResizerCloseAlt;
		objBottomNavCloseLink.onclick = function() { Close(); return false; }
		objHoverNav.appendChild(objBottomNavCloseLink);
		/** Create the Zoom button **/
		var objBottomNavZoomLink = document.createElement( 'a' );
		objBottomNavZoomLink.setAttribute( 'id', 'ZoomLink' ); // objBottomNavZoomLink.setAttribute( 'href', '#' );
		objBottomNavZoomLink.onclick = function() { ZoomInClick(); return false; }
		objHoverNav.appendChild(objBottomNavZoomLink);
		/** Create the Prev button **/
		var objBottomNavPrevLink = document.createElement( 'a' );
		objBottomNavPrevLink.setAttribute( 'id', 'PrevLink' ); // objBottomNavPrevLink.setAttribute( 'href', '#' );
		objBottomNavPrevLink.alt = objBottomNavPrevLink.title = ImageResizerPrevtAlt;
		objHoverNav.appendChild(objBottomNavPrevLink);
		/** Create the Next button **/
		var objBottomNavNextLink = document.createElement( 'a' );
		objBottomNavNextLink.setAttribute( 'id', 'NextLink' ); // objBottomNavNextLink.setAttribute( 'href', '#' );
		objBottomNavNextLink.alt = objBottomNavNextLink.title = ImageResizerNextAlt;
		objHoverNav.appendChild(objBottomNavNextLink);
		/** Create the text n of n picture **/
		var objNumberDisplay = document.createElement( 'span' );
		objNumberDisplay.setAttribute( 'id', 'nOnText' );
		objHoverNav.appendChild(objNumberDisplay);
		/** Create the Play button **/
		var objBottomNavPlayLink = document.createElement( 'a' );
		objBottomNavPlayLink = document.createElement( 'a' );
		objBottomNavPlayLink.setAttribute( 'id', 'PlayLink' ); // objBottomNavPlayLink.setAttribute( 'href', '#' );
		objBottomNavPlayLink.alt = objBottomNavPlayLink.title = ImageResizerPlayAlt;
		objBottomNavPlayLink.onclick = function() { Slide_Show( 'play' ); return false; };
		objHoverNav.appendChild(objBottomNavPlayLink);
		/** Create the Loading button **/
		var objloadingLink = document.createElement( 'a' );
		objloadingLink.setAttribute( 'id', 'loadingLink' );
		objloadingLink.alt = objloadingLink.title = ImageResizerCloseAlt;
		objloadingLink.onclick = function() { Close(); return false; }
		objLightbox.appendChild(objloadingLink);

		/** Place the big image container in the middle of the page, and set a default size, for the first run **/
		ElementSetTop( 'outerImageContainer', getPageScroll( ).YScroll / 2 );
		ElementSetLeft( 'outerImageContainer', getPageScroll( ).XScroll / 2 );
		ElementSetWidth( 'outerImageContainer', 250 );
		ElementSetHeight( 'outerImageContainer', 250 );
	},

	/** Adjust sizes **/
	Prepare = function( newObjImage, CurrentZoomLevel )
	{
		zoomLevel = CurrentZoomLevel;
		/** Hide some tags **/
		ElementBoxes( 'hidden' );
		/** Show the loading image **/
		ElementShow( 'loadingLink' );
		/** Show the background overlay **/
		ElementShow( 'lightbox' );
		/** Show the big container, whitout this here, all will be a mess ;) **/
		ElementShow( 'overlay' );
		/** Determine the dimensions of the entire document & current scroll position within the document **/
		var PageSize   = getPageSizes( );
		var PageScroll = getPageScroll( )
		/** Determine the visible dimensions of the browser window "the viewport" **/
		MaxWidth = Math.floor( PageSize.WWidth - ( borderSize*2 ) );
		MaxHeight = Math.floor( PageSize.WHeight - ( ( borderSize*2 ) + ElementGetHeight( 'hoverNav' ) ) );
		/** Place the button bar **/
		ElementSetTop( 'hoverNav', ( ( ElementGetHeight( 'hoverNav' ) + padding)*-1 ) );
		ElementSetLeft( 'hoverNav', ( padding*-1 ) );
		/** The background gets the document's dimensions, so a shadow can be cast over the entire document **/
		ElementSetHeight( 'overlay' , PageSize.PHeight );
		/** Place the big container **/
		ElementSetTop( 'lightbox', ( PageScroll.YScroll + ( borderSize/2 ) ) );
		ElementSetHeight( 'lightbox', ( PageSize.WHeight   - ( borderSize*2 ) ) );
		/** Display the image very sexy like? **/
		FxFade( 'lightboxImage', 100, 0, animateInDuration );
		/** Update the big container **/
		var objOuterImageContainerdims = scale_dims( newObjImage.width, newObjImage.height, MaxWidth, MaxHeight );
		ElementSetHeight( 'imageContainer', objOuterImageContainerdims.H );
		/** Resize the outerImageContainer **/
		BoxScale( 'outerImageContainer', objOuterImageContainerdims.W, objOuterImageContainerdims.H, UpdateImage );
	},

	UpdateImage = function( )
	{
		/** Optionally zoom in 1:1 **/
		if ( zoomLevel >= 100 )
		{
			/** Maximize the image container **/
			$( 'imageContainer' ).style.overflow = 'auto';
			/** Reset the scroll position **/
			$( 'imageContainer' ).scrollLeft = 0;
			$( 'imageContainer' ).scrollTop = 0;
			/** Swap Zoom In for Zoom Out **/
			$( 'ZoomLink' ).alt = $( 'ZoomLink' ).title = ImageResizerZoomOutAlt;
			$( 'ZoomLink' ).onclick = function() { Prepare( newObjImage, zoomLevel ); return false; };
			/** Resize the image **/
			ElementSetWidth( 'lightboxImage',  newObjImage.width );
			ElementSetHeight( 'lightboxImage', newObjImage.height );
		}
		else
		{
			/** The image can be zoom ? **/
			if ( newObjImage.width < MaxWidth && newObjImage.height < MaxHeight ) { ElementDisabled( 'ZoomLink' ); } else { ElementEnabled( 'ZoomLink' ); }
			/** Restore image container **/
			$( 'imageContainer' ).style.overflow = '';
			/** Swap Zoom In for Zoom Out **/
			$( 'ZoomLink' ).alt = $( 'ZoomLink' ).title = ImageResizerZoomInAlt.replace(/%1\$s/, newObjImage.width).replace(/%2\$s/, newObjImage.height);
			$( 'ZoomLink' ).onclick = function() { ZoomInClick(); return false; };
			/** Update the image screen **/
			ElementSetSrc( 'lightboxImage', newObjImage.src );
			/** Optionally resize the image **/
			var objImagedims = scale_dims( newObjImage.width, newObjImage.height, MaxWidth, MaxHeight );
			ElementSetWidth( 'lightboxImage',  objImagedims.W );
			ElementSetHeight( 'lightboxImage', objImagedims.H );
		}
		/** Display the image very sexy like? **/
		FxFade( 'lightboxImage', 0, 100, animateOutDuration);
		/** Show the loading image **/
		ElementHide( 'loadingLink' );
		/** Resize event handlers **/
		window.onresize = Resize;
		/** Stop the body scroll function **/
		ScrollFreeze.on( );
		/** Update SlideShow **/
		Slide_Show( );
	},

	Slide_Show = function( PlayOnOff, PlayNumber )
	{
		/** Reset to default values **/
		ElementDisabled( 'PrevLink' );
		ElementDisabled( 'NextLink' );
		/** Get the proper play/pause button **/
		var BottomNavPlayLink = ( $( 'PlayLink' ) ? 'PlayLink' :  'PauseLink' );
		/** Get the actual picture **/
		var curr	= url_clean( newObjImage.src );
		/** Get current position in the array **/
		var search	= contains( curr, SlideShows );
		var found	= search[0];
		var pos		= search[1];
		var last	= SlideShows.length;

		if ( found )
		{
			var prev = SlideShows[pos-1];
			var next = SlideShows[pos+1];
			/** IF this isn't the first picture, enable the previous button **/
			if ( pos-1 >= 0 ) { ElementEnabled( 'PrevLink' ); $( 'PrevLink' ).onclick = function() { Start( prev ); return false; }; }
			/** IF this isn't the last picture, enable the previous button **/
			if ( pos+1 < last ) { ElementEnabled( 'NextLink' ); $( 'NextLink' ).onclick = function() { Start( next ); return false; }; }
			/** If there are only 1 picture, disable the play button **/
			if ( last <= 1 ) { ElementDisabled( BottomNavPlayLink ); }
			/** Update the text **/
			ElementSetInnerHTML( 'nOnText', ImageResizerNumberOf.replace(/%1\$s/, pos+1 ).replace(/%2\$s/, last));
			/** Run the SlideShow? **/
			if ( PlayOnOff && typeof(PlayOnOff) != 'undefined' )
			{
				/** Calling from last pict, so start from first : else : start from next pict :) **/
				if ( !PlayNumber && pos+1 == last ) { PlayNumber = 1; PlayNext = SlideShows[0]; } else { PlayNumber = pos+1; PlayNext = next; }
				/** Update the play/pause buton **/
				if ( PlayOnOff == 'play' && PlayNumber < last )
				{	/** Run the SlideShow **/
					var SlideDuration = ( SlideShowDuration + ( ( animate ) ? ( animateInDuration ) : 0 ) ) * 1000;
					$( BottomNavPlayLink ).setAttribute( 'id', 'PauseLink' );
					$( 'PauseLink' ).onclick = function() { Slide_Show( 'pause' ); return false; };				
					$( 'PauseLink' ).alt = $( 'PauseLink' ).title = ImageResizerPauseAlt;
					Start( PlayNext );
					SlideWait = window.setTimeout( function() { Slide_Show( 'play', PlayNumber ); }, SlideDuration );
				}
				else
				{	/** Cancel Slideshow timer **/
					window.clearTimeout( SlideWait );
					$( BottomNavPlayLink ).setAttribute( 'id', 'PlayLink' );
					$( 'PlayLink' ).onclick = function() { Slide_Show( 'play' ); return false; };
					$( 'PlayLink' ).alt = $( 'PlayLink' ).title = ImageResizerPlayAlt;		
				}
			}
		}
	},

	/** Zoom in to real dimensions, adding scroll bars if necessary **/
	ZoomInClick = function( e )
	{
		/** Zoom in 1:1 **/
		zoomLevel = 100;
		/** If the image is smaller than the maximized container, then shrink the width of the image container **/
		TempWidth	= ( newObjImage.width  > MaxWidth  ) ? ( ElementGetWidth( 'lightbox' )  - borderSize ) : newObjImage.width ;
		TempHeight	= ( newObjImage.height > MaxHeight ) ? ( ElementGetHeight( 'lightbox' ) - padding    ) : newObjImage.height ;
		/** Update the image **/
		FxFade( 'lightboxImage', 100, 0, animateInDuration );
		/** Update the big container **/
		ElementSetHeight( 'imageContainer', TempHeight );
		/** Resize the outerImageContainer **/
		BoxScale( 'outerImageContainer', TempWidth, TempHeight, UpdateImage );
	},

	/** If the browser window is resized, recalculate dimensions and positions **/
	Resize = function( e )
	{
		Close( );
		ElementShow( 'lightbox' );
		ElementShow( 'overlay' );
		Prepare( newObjImage, zoomLevel );
	},

	/** Reset to default values **/
	Close = function( e )
	{
		/** Return the body scroll function **/
		ScrollFreeze.off( );
		/** Canel Resize event handlers **/
		window.onresize = null;
		/** Cancel Slideshow timer **/
		window.clearTimeout( SlideWait );
		/** Reset the play/pause button **/
		var BottomNavPlayLink = ( $( 'PlayLink' ) ? 'PlayLink' :  'PauseLink' ); $( BottomNavPlayLink ).setAttribute( 'id', 'PlayLink' );
		/** Show some tags **/
		ElementBoxes( 'visible' );
		/** Hide the image, background and buttons **/
		ElementSetSrc( 'imageContainer', ImageResizerBlankImage );
		ElementHide( 'loadingLink' );
		ElementHide( 'lightbox' );
		ElementHide( 'overlay' );
	},

/** Common functions - Start **/
	$					= function(elementid)	{ return document.getElementById(elementid); },
	ElementHide			= function(element)		{ $(element).style.display = 'none'; },
	ElementShow			= function(element)		{ $(element).style.display = ''; },
	ElementVisible		= function(element)		{ $(element).style.visibility = 'visible'; },
	ElementInVisible	= function(element)		{ $(element).style.visibility = 'hidden'; },
	ElementGetWidth		= function(element)		{ return $(element).offsetWidth; },
	ElementSetWidth		= function(element,w)	{ $(element).style.width = w + 'px'; },
	ElementGetHeight	= function(element)		{ return $(element).offsetHeight; },
	ElementSetHeight	= function(element,h)	{ $(element).style.height = h + 'px'; },
	ElementSetTop		= function(element,t)	{ $(element).style.top = t + 'px'; },
	ElementSetLeft		= function(element,l)	{ $(element).style.left = l + 'px'; },
	ElementSetSrc		= function(element,src) { $(element).src = src; },
	ElementOpacity		= function(element, o)	{ if (window.ActiveXObject) { $(element).style.filter = 'alpha(opacity=' + o + ')'; } else { $(element).style.opacity = $(element).style.MozOpacity = $(element).style.KhtmlOpacity = o/100; } },
	ElementSetInnerHTML = function(element, c)	{ $(element).innerHTML = c; },
	ElementBoxes		= function(action)		{ if (action != 'visible' ) { action = 'hidden'; } if (IE) { for (var S = 0; S < document.forms.length; S++) { for (var R = 0; R < document.forms[S].length; R++) { if (document.forms[S].elements[R].options) { document.forms[S].elements[R].style.visibility = action; } } } } var theObjects = document.getElementsByTagName( 'object' ); for (var i = 0; i < theObjects.length; i++) { theObjects[i].style.visibility = action; }; },
	ElementDisabled		= function(element)     { $(element).className = ( $(element).className ? $(element).className+' ' : '') + 'disabled'; ElementOpacity( $(element).id, ojbOpacity); $(element).onclick = function() {};},
	ElementEnabled		= function(element)     { $(element).className = $(element).className.replace(/disabled/g, ''); ElementOpacity( $(element).id, 100); },

	/**
	* Code From : http://www.huddletogether.com/forum/comments.php?DiscussionID=1798
	**/
	scale_dims = function( orig_w, orig_h, max_w, max_h ) { var scale = scale_rate( orig_w, orig_h, max_w, max_h ); var new_w = Math.round( scale*orig_w ); new_h = Math.round( scale*orig_h ); if ( new_w < 1 ) { new_w = 1; } if ( new_h < 1 ) { new_h = 1; } return { W:new_w, H: new_h }; },
	scale_rate = function( orig_w, orig_h, max_w, max_h ) { var scale1 = 0; var scale2 = 0; if ( orig_w > max_w ) { scale1 = ( orig_w - max_w ) / orig_w; } if ( orig_h > max_h ) { scale2 = ( orig_h - max_h ) / orig_h; } var scale = ( scale1 > scale2 ) ? scale1 : scale2; return ( 1-scale ); },

	/**
	* Update the top position and resize both w & h even if is not set a previous value ;)
	**/
	BoxScale  = function( boxElement, boxNewWidth, boxNewHeight, callback ) { /** Resize it very sexy like? **/ if ( !animate ) { ElementSetWidth( boxElement, boxNewWidth ); ElementSetHeight( boxElement, boxNewHeight ); ElementSetTop( boxElement, ( ( ( ElementGetHeight( 'lightbox' ) - ElementGetHeight( boxElement ) ) / 2 ) + ElementGetHeight( 'hoverNav' ) ) ); } var boxObject = $( boxElement ); var boxWidth = parseInt( parseFloat( 0 + boxObject.style.width ) ); var boxNewWidth = parseInt( parseFloat( 0 + boxNewWidth ) ); var boxHeight = parseInt( parseFloat( 0 + boxObject.style.height ) ); var boxNewHeight = parseInt( parseFloat( 0 + boxNewHeight ) ); /* if ( boxWidth === boxNewWidth && boxHeight === boxNewHeight) { // run me anyway, to prevent image flicker. } */ DoChange( boxObject, boxWidth, boxNewWidth, boxHeight, boxNewHeight, BoxScaleSteps, 100, 0.333, callback ); },
	DoChange  = function( elem, startWidth, endWidth, startHeight, endHeight, steps, intervals, powr, callback ) { if (elem.widthChangeMemInt) { window.clearInterval(elem.widthChangeMemInt); } var actStep = 0; elem.widthChangeMemInt = window.setInterval( function() { /** The height **/ elem.currentHeight = EaseInOut( startHeight, endHeight, steps, actStep, powr ); ElementSetHeight( elem.id, elem.currentHeight ); /** The width **/ elem.currentWidth = EaseInOut( startWidth, endWidth, steps, actStep, powr ); ElementSetWidth( elem.id, elem.currentWidth ); /** The top **/ elem.currentTop = ( ( ( ElementGetHeight( 'lightbox' ) - ElementGetHeight( elem.id ) ) / 2 ) + ElementGetHeight( 'hoverNav' ) ); ElementSetTop( elem.id, elem.currentTop ); actStep++; if ( actStep > steps ) { window.clearInterval( elem.widthChangeMemInt ); if ( typeof callback == 'function' ) { callback( ); } } },intervals); },
	EaseInOut = function( minValue, maxValue, totalSteps, actualStep, powr ) { var delta = parseInt(maxValue) - parseInt(minValue); var stepp = minValue+(Math.pow(((1 / totalSteps) * actualStep), powr) * delta); return Math.ceil(stepp); },

	/** 
	* Hide selects/object on page, possible values for action are 'hidden' and 'visible' * Code from : http://www.shawnolson.net/a/1198/hide-select-menus-javascript.html
	**/
	FxFade  = function( elem, start, end, speed, callback ) { window.clearInterval( elemfade ); elemfade = window.setInterval( function() { start = Findend(start, end, speed); if ( !animate ) { if ( start = 0 ) { ElementInVisible( elem ); } else { ElementVisible( elem ); } start = end; } else { ElementOpacity( elem, start ); } if(start == end) { if ( end == 0 ) {/** Little trick to prevent sizer flicker **/ ElementSetWidth( 'lightboxImage',  1 ); ElementSetHeight( 'lightboxImage', 1 ); } window.clearInterval( elemfade ); if ( typeof callback == 'function' ) { callback(); } } }, 1); },
	Findend = function( x, y, speed ) { return x < y ? Math.min(x + speed*10, y) : Math.max(x - speed*10, y); },

	/**
	* pause(numberMillis)
	* Pauses code execution for specified time. Uses busy code, not good. - Code from http://www.faqts.com/knowledge_base/view.phtml/aid/1602
	**/
	Pause = function( numberMillis ) { var now = new Date(); var exitTime = now.getTime() + numberMillis; while (true) { now = new Date(); if ( now.getTime() > exitTime ) return; } }
	/**
	* Returns array with : page width, page height, window width, window height, x page scroll, y page scroll values. * Code from - quirksmode.org
	**/
	getPageSizes = function( )
	{
		var xScroll, yScroll;
		if ( window.innerHeight && window.scrollMaxY ) { xScroll = document.body.scrollWidth; yScroll = window.innerHeight + window.scrollMaxY; }
		/* all but Explorer Mac */
		else if ( document.body.scrollHeight > document.body.offsetHeight) { xScroll = document.body.scrollWidth; yScroll = document.body.scrollHeight; }
		/* Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari */
		else { xScroll = document.body.offsetWidth; yScroll = document.body.offsetHeight; }

		var windowWidth, windowHeight;
		/* all except Explorer */
		if (self.innerHeight) { windowWidth = self.innerWidth; windowHeight = self.innerHeight; }
		/* Explorer 6 Strict Mode */
		else if ( document.documentElement && document.documentElement.clientHeight ) { windowWidth = document.documentElement.clientWidth; windowHeight = document.documentElement.clientHeight; }
		/* Other Explorers */
		else if ( document.body ) { windowWidth = document.body.clientWidth; windowHeight = document.body.clientHeight; }

		/* for small pages with total height less then height of the viewport */
		if( yScroll < windowHeight ) { pageHeight = windowHeight; } else { pageHeight = yScroll; }
		/* for small pages with total width less then width of the viewport */
		if( xScroll < windowWidth ) { pageWidth = windowWidth; } else { pageWidth = xScroll; }

		return { PWidth: pageWidth, PHeight: pageHeight, WWidth: windowWidth, WHeight: windowHeight, XScroll: xScroll, YScroll: yScroll };
	},

	/**
	* Returns array with x,y page scroll values. * Core code from - quirksmode.org
	**/
	getPageScroll = function( ) { var yScroll; if ( self.pageYOffset ) { yScroll = self.pageYOffset; xScroll = self.pageXOffset; } else if ( document.documentElement && document.documentElement.scrollTop ){ /* Explorer 6 Strict */ yScroll = document.documentElement.scrollTop; xScroll = document.documentElement.scrollLeft; } else if ( document.body ) { /* all other Explorers */ yScroll = document.body.scrollTop; xScroll = document.body.scrollLeft; } return { YScroll: yScroll, XScroll: xScroll }; },

/** Common functions - End **/
	this.SlideShows = SlideShows;
	this.Start = Start;
}
/**
* If you don't find a better way, this may have to be a job for ScrollFreeze.
* Code from - http://bytes.com/forum/thread498334.html
**/
ScrollFreeze = /*2843293230303620532E4368616C6D657273*/
{
	propFlag : true,
	Ydisp : 0,
	Xdisp : 0,
	on : function() { if ( this.getProp( ) ) { window.onscroll = function(){ ScrollFreeze.setXY(); } } },
	off : function() { window.onscroll=null; },
	getProp : function() { if( typeof window.pageYOffset != 'undefined' ) { this.Ydisp = window.pageYOffset; this.Xdisp = window.pageXOffset; } else if ( document.documentElement ) { this.Ydisp = document.documentElement.scrollTop; this.Xdisp = document.documentElement.scrollLeft; } else if ( document.body && typeof document.body.scrollTop != 'undefined' ) { this.Ydisp = document.body.scrollTop; this.Xdisp = document.body.scrollLeft; } else { this.propFlag = false; } return this.propFlag; },
	setXY : function() { window.scrollTo( this.Xdisp, this.Ydisp ); }
}
/** AdvancedBox JS - End **/

/**
* Add a new value to an Array if isn't repeat
**/
function ArrayPush( arr, val ) { val = url_clean( val ); /** have this array this value ? **/ var found = contains( val, arr ); if( !found[0] ) { arr.push( val ); /* arr[arr.length] = val; */ } }

/**
* To cover IE 5.0's lack of the push method
**/
Array.prototype.push = function(value) { this[this.length] = value; }

/**
* Search in array
* Returns (true and number ) if 'v' is contained in the array 'a'
**/
function contains( v, a ) { for( var j=0; j<a.length; j++ ) { if( a[j] == v ) { return new Array( true, j ); } } return new Array( false, 0 ); }

/** Clear the image url **/
function url_clean( url )
{
	url = decodeURIComponent( url.toString().replace(/\s/g, ' ') );

	/** If this an attached image ? if yes, need more work to clear the image url **/
	if ( url.indexOf( 'download' ) != -1 )
	{
		/** Will get the real url to the download script, Ex : http://www.mssti.com/phpbb3/download/file.php **/
		var valor   = url.substring( 0, url.indexOf( '?' ) );
		/** Will get an string starting from the id, Ex : id=65&mode=view or only id=65 **/
		var valorId1= url.substring( url.indexOf( 'id' ) );
		/** Will get only the id value, Ex : id=65 or null if have no extra params **/
		var valorId2 = valorId1.substring( valorId1.indexOf( 'id' ), valorId1.indexOf( '&' ) );
		/** Recreate the image url, Ex : http://www.mssti.com/phpbb3/download/file.php?id=65 **/
		url = valor + '?' + ( valorId2 ? valorId2 : valorId1 );
	}
	return url;
}

/**
* Image Resizer JS - START
* Code from : http://www.silkroadforums.com/viewtopic.php?f=9&t=81182&view=previous
* Updated to phpbb3 and ABBC3 mod by MSSTI
**/
NcodeImageResizer.IMAGE_ID_BASE = 'ncode_imageresizer_container_';
NcodeImageResizer.WARNING_ID_BASE = 'ncode_imageresizer_warning_';

function NcodeImageResizer(id, img)
{
	this.id = id;
	this.img = img;
	this.originalWidth = 0;
	this.originalHeight = 0;
	this.warning = null;
	this.warningTextNode = null;

	img.id = NcodeImageResizer.IMAGE_ID_BASE + id;
};

NcodeImageResizer.getNextId = function()
{
	var id = 1;
	while (document.getElementById(NcodeImageResizer.IMAGE_ID_BASE + id) != null)
	{
		id++;
	}
	return id;
};

NcodeImageResizer.createOn = function(img)
{
	NcodeImageResizer.mode					= ImageResizerMode;
	NcodeImageResizer.WarningImage			= ImageResizerWarningImage;
	NcodeImageResizer.MaxWidth				= ImageResizerMaxWidth;
	NcodeImageResizer.MaxHeight				= ImageResizerMaxHeight;
	NcodeImageResizer.warning_small			= ImageResizerWarningSmall;
	NcodeImageResizer.warning_fullsize		= ImageResizerWarningFullsize;
	NcodeImageResizer.warning_filesize		= ImageResizerWarningFilesize;
	NcodeImageResizer.warning_no_filesize	= ImageResizerWarningNoFilesize;

	var isRecovery = false;
	/** if this is a recovery from QuickEdit, which only restores the HTML, not the OO structure **/
	if (img.id && img.id.indexOf(NcodeImageResizer.IMAGE_ID_BASE) == 0 && document.getElementById(NcodeImageResizer.WARNING_ID_BASE + img.id.substr(NcodeImageResizer.IMAGE_ID_BASE.length)) != null)
	{
		newid = img.id.substr(NcodeImageResizer.IMAGE_ID_BASE.length);
		resizer = new NcodeImageResizer(newid, img);
		isRecovery = true;
		resizer.restoreImage();
	}
	else
	{
		newid = NcodeImageResizer.getNextId();
		resizer = new NcodeImageResizer(newid, img);
	}

	if (resizer.originalWidth == 0) resizer.originalWidth = img.width;
	if (resizer.originalHeight == 0) resizer.originalHeight = img.height;

	if ((NcodeImageResizer.MaxWidth > 0 && resizer.originalWidth > NcodeImageResizer.MaxWidth) || (NcodeImageResizer.MaxHeight > 0 && resizer.originalHeight > NcodeImageResizer.MaxHeight))
	{
		if (isRecovery)
		{
			resizer.reclaimWarning(this.warning);
		}
		else
		{
			resizer.createWarning();
		}
		resizer.scale();
	}
};

NcodeImageResizer.prototype.restoreImage = function()
{
	var newimg = document.createElement( 'IMG' );
	newimg.src = this.img.src;
	this.img.width = newimg.width;
	this.img.height = newimg.height;
};

NcodeImageResizer.prototype.reclaimWarning = function()
{
	var warning = document.getElementById(NcodeImageResizer.WARNING_ID_BASE + newid);

	this.warning = warning;
	this.warningTextNode = warning.firstChild.firstChild.childNodes[1].firstChild;
	this.warning.resize = this;
	this.scale();
};

NcodeImageResizer.prototype.createWarning = function()
{
	mtable = document.createElement( 'TABLE' );
	mtbody = document.createElement( 'TBODY' );
	mtr = document.createElement( 'TR' );
	mtd1 = document.createElement( 'TD' );
	mtd2 = document.createElement( 'TD' );
	mimg = document.createElement( 'IMG' );
	mtext = document.createTextNode( '' );

	mimg.src = NcodeImageResizer.WarningImage;
	mimg.width = 16;
	mimg.height = 16;
	mimg.alt = '';
	mimg.border = 0;
	mimg.className = 'td1img';

	mtd1.width = 20;
	mtd1.className = 'td1';

	mtd2.unselectable = 'on';
	mtd2.className = 'td2';

	mtable.className = 'ncode_imageresizer_warning';
	mtable.textNode = mtext;
	mtable.resize = this;
	mtable.id = NcodeImageResizer.WARNING_ID_BASE + this.id;

	mtd1.appendChild(mimg);
	mtd2.appendChild(mtext);		
	mtr.appendChild(mtd1);
	mtr.appendChild(mtd2);
	mtbody.appendChild(mtr);
	mtable.appendChild(mtbody);

	this.img.parentNode.insertBefore(mtable, this.img);
	this.img.style.cursor = 'default';

	this.warning = mtable;
	this.warningTextNode = mtext;
	
	ArrayPush(AdvancedBox.SlideShows , this.img.src);

};

NcodeImageResizer.prototype.scale = function()
{
	if (NcodeImageResizer.MaxWidth > 0 && this.originalWidth > NcodeImageResizer.MaxWidth)
	{
		resized = true;
		this.img.width = NcodeImageResizer.MaxWidth;
		this.img.height = (NcodeImageResizer.MaxWidth / this.originalWidth) * this.originalHeight;
	}
	if (NcodeImageResizer.MaxHeight > 0 && this.originalHeight > NcodeImageResizer.MaxHeight)
	{
		resized = true;
		this.img.height = NcodeImageResizer.MaxHeight;
		this.img.width = (NcodeImageResizer.MaxHeight / this.originalHeight) * this.originalWidth;
	}

	this.warning.width = this.img.width;
	this.warning.onclick = function()
	{
		return this.resize.unScale();
	};

	if (this.img.fileSize && this.img.fileSize > 0)
	{
		this.warningTextNode.data = NcodeImageResizer.warning_filesize.replace( '%1$s', this.originalWidth).replace( '%2$s', this.originalHeight).replace( '%3$s', Math.round(this.img.fileSize / 1024));
	}
	else
	{
		this.warningTextNode.data = NcodeImageResizer.warning_no_filesize.replace( '%1$s', this.originalWidth).replace( '%2$s', this.originalHeight);
	}

	if ( (this.warningTextNode.data.length)*4.4 > this.img.width  )
	{
		this.warningTextNode.data = NcodeImageResizer.warning_small;
	}

	return false;
};

NcodeImageResizer.prototype.unScale = function()
{
	switch (NcodeImageResizer.mode)
	{
		case 'AdvancedBox' :
			if ( this.img.className == 'attach_parent' ) { AdvancedBox.Start(this.img.parentNode.href); } else { AdvancedBox.Start(this.img.src); }
			break;
		default:
		case 'newwindow':
			if ( this.img.className == 'attach_parent' ) { window.open(this.img.parentNode.href, '_blank' ); } else { window.open(this.img.src, '_blank' ); }
			break;
		case 'samewindow':
			if ( this.img.className == 'attach_parent' ) { window.open(this.img.parentNode.href, '_self' ); } else { window.open(this.img.src, '_self' ); }
			break;
		case 'enlarge':
			if ( this.img.className == 'attach_parent' ) { ImgOnLoad_scale( this.warning, this.img, this.img.parentNode.href, this.img.width, this.img.height ); }
			else
			{
				this.img.width = this.originalWidth;
				this.img.height = this.originalHeight;
				this.img.className = 'ncode_imageresizer_original';
			}
			if (this.warning != null)
			{
				this.warningTextNode.data = NcodeImageResizer.warning_fullsize;
				this.warning.width = ( this.img.className == 'attach_parent' ) ? '100%' : this.img.width ;
				this.warning.onclick = function()
				{
					return this.resize.scale();
				};
			}
			break;
	}
	return false;
};
/** Image Resizer JS - END **/

/**
* Initialize the Resizer
**/
function ImgOnLoad()
{
	/**
	* phpbb images in signatures
	* class ="resize_me"
	* Recomended true - Options  false | true
	* This setting is currently mannaged in the ACP
	**/
	var exclude_signatures 			= ( ImageResizerSignature == '1' ) ? false : true;

	/**
	* ABBC3 thumbnail
	* class="hoverbox resize_me"
	* Recomended true - Options  false | true
	**/
	var exclude_thumbnail_abbc3		= true;

	/**
	* phpbb thumbnail attached
	* class ="attach_parent"
	* Recomended true - Options  false | true
	**/
	var exclude_thumbnail_attached	= true;

	/**
	* phpbb image attached
	* class="attach_me"
	* Recomended false - Options  false | true
	**/
	var exclude_images_attached		= false;

/** Search images in signatures - Start **/
	if ( exclude_signatures )
	{
		var pro_sig_elm_ary = sub_sig_elm_ary = new Array();
		var pro_sig_img_ary = sub_sig_img_ary = sig_images_ary = new Array();

		/** Signatures in ProSilver styles **/
		pro_sig_elm_ary = getElementsByClassName( 'signature', 'div' );
		for (var e = 0, psea = pro_sig_elm_ary.length; e < psea; e++)
		{
			pro_sig_img_ary = getElementsByClassName( 'resize_me', 'img', document.getElementById( pro_sig_elm_ary[e].id ));
			for (var i = 0, psia = pro_sig_img_ary.length; i < psia; i++) { sig_images_ary.push( pro_sig_img_ary[i].src); }
		}

		/** Signatures in Subsilver2 styles **/
		sub_sig_elm_ary = getElementsByClassName( 'postbody', 'span' );
		for (var e = 0, ssea = sub_sig_elm_ary.length; e < ssea; e++)
		{
			sub_sig_img_ary = getElementsByClassName( 'resize_me', 'img', document.getElementById( sub_sig_elm_ary[e].id ));
			for (var i = 0, ssia = sub_sig_img_ary.length; i < ssia; i++) { sig_images_ary.push(sub_sig_img_ary[i].src); }
		}
		/** Now the array sig_images_ary contain all images in signatures **/
	}
/** Search images in signatures - End **/
	
/** Search all images inside posts - Start **/
	var post_images_ary = post_attach_ary = posted_images_ary = new Array();

	/** Real images - Attached images - Attached thumbnail **/
	post_images_ary = MyGetElementsByClassName( 'resize_me|attach_me|attach_parent' )
	for (var i = 0, ipia = post_images_ary.length; i < ipia; i++) { posted_images_ary.push( post_images_ary[i] ); }
	/** Now the array posted_images_ary contain all images in post **/

/** Search all images inside posts - End **/

/** Go ahead and to the jod **/
	for (var pia = 0; pia < posted_images_ary.length; pia++)
	{
		var ImageResizer = false;
		var ContinueResizer = true;

		var img = posted_images_ary[pia];

		/** Skip to resize signatures **/
		if ( exclude_signatures && sig_images_ary.length > 0 ) { if( contains( img.src, sig_images_ary )[0] ) { continue; } }

		/** Check if this image will be resized **/
		if ( ( ImageResizerMaxWidth > 0 && img.width > ImageResizerMaxWidth ) || ( ImageResizerMaxHeight > 0 && img.height > ImageResizerMaxHeight ) )
		{
			ImageResizer = true;
			if ( img.className == 'hoverbox resize_me' ) { ImageResizer = ( exclude_thumbnail_abbc3 ? false : true ); }
			if ( img.className == 'attach_parent' ) { ImageResizer = ( exclude_thumbnail_attached ? false : true ); }
			if ( img.className == 'attach_me' ) { ImageResizer = ( exclude_images_attached ? false : true ); }
		}
		
		switch ( img.className )
		{
			default:
				break;
			/** ABBC3 thumbnail **/
			case 'hoverbox resize_me':
				switch (ImageResizerMode)
				{
					case 'AdvancedBox':
						img.onclick = function() { AdvancedBox.Start( this.src ); return false; }; ArrayPush( AdvancedBox.SlideShows, img.src );
						break;
					case 'enlarge':
						img.onclick = function() { ImgOnLoad_scale( this, this, this.src, this.width, this.height ); return false; }
						break;
					case 'newwindow':
						img.onclick = function() { window.open(this.src, '_blank' ); return false; }
						break;
					default:
					case 'newwindow':
						img.onclick = function() { window.open(this.src, '_blank' ); return false; }
						break;									
				}
				break;
			/** phpbb image attached **/
			case 'attach_parent':
				// Disable the attachment.html onclick="viewableArea(this);"
				img.parentNode.onclick = function() { return false; }
				switch (ImageResizerMode)
				{
					case 'AdvancedBox':
						if ( !ImageResizer  ) { img.onclick = function() { AdvancedBox.Start( this.parentNode.href ); return false; }; ArrayPush( AdvancedBox.SlideShows, img.parentNode.href ); }
						break;
					case 'enlarge':
						if ( !ImageResizer ) { img.onclick = function() { ImgOnLoad_scale( this, this, this.parentNode.href, this.width, this.height ); return false; } }
						break;
					case 'newwindow':
						if ( !ImageResizer ) { img.onclick = function() { window.open(this.parentNode.href, '_blank' ); return false; } }
						break;
					default:
					case 'newwindow':
						if ( !ImageResizer ) { img.onclick = function() { window.open(this.parentNode.href, '_self' ); return false; } }
						break;									
				}
				break;
			/** phpbb image attached **/
			case 'attach_me':
				img.onclick = function() { return false; }
				switch (ImageResizerMode)
				{
					case 'AdvancedBox':
						if ( !ImageResizer ) { img.onclick = function() { AdvancedBox.Start( this.src ); return false; }; ArrayPush( AdvancedBox.SlideShows, img.src ); }
						break;
					case 'enlarge':
						if ( !ImageResizer ) { ImgOnLoad_unScale( img, img, img.src ); }
						break;
					default:
					case 'newwindow':
						if ( !ImageResizer ) { ImgOnLoad_unScale( img, img, img.src ); img.onclick = function() { window.open(this.src, '_blank' ); return false; } }
						break;
					case 'samewindow':
						if ( !ImageResizer ) { ImgOnLoad_unScale( img, img, img.src ); img.onclick = function() { window.open(this.src, '_self' ); return false; } }
						break;
				}
		}

		if ( ImageResizer ) { NcodeImageResizer.createOn(img); }
	}
	/* MSIE if (typeof(window.detachEvent) != 'undefined' ) { window.detachEvent( 'onload', ImgOnLoad); } */ 
	return true;
}

function ImgOnLoad_scale( obj, imgobj, imgsrc, imgwidth, imgheight )
{
	var new_img = new Image();

	new_img.setAttribute( 'src', imgsrc);
	new_img.onload = function() { imgobj.setAttribute( 'width', new_img.width); imgobj.setAttribute( 'height', new_img.height); return false; }
	obj.onclick = function() { ImgOnLoad_unScale( obj, imgobj, imgsrc, imgwidth, imgheight ); return false; }
}

function ImgOnLoad_unScale( obj, imgobj, imgsrc, imgwidth, imgheight )
{
	imgwidth  = ( imgwidth  > 0 ) ? imgwidth  : ImageResizerMaxWidth;
	imgheight = ( imgheight > 0 ) ? imgheight : ImageResizerMaxHeight;
	imgobj.setAttribute( 'width', imgwidth );
	if ( imgheight > 0) { imgobj.setAttribute( 'height', imgheight ); } else { imgobj.setAttribute( 'height', imgwidth ); }
	obj.onclick = function() { ImgOnLoad_scale( obj, imgobj, imgsrc, imgwidth, imgheight ); return false; }
}

/** Install the safety net to catch any images that were somehow not resized - START **/
if (window.onload_functions) // prosilver
{
	onload_functions[onload_functions.length] = "ImgOnLoad();";
}
else if (typeof(window.addEventListener) != "undefined") // DOM
{
	window.addEventListener( "load", ImgOnLoad, false);
}
else if (typeof(window.attachEvent) != "undefined") // MSIE
{
	window.attachEvent( "onload", ImgOnLoad);
}
/** Install the safety net to catch any images that were somehow not resized - END **/

// ]]>