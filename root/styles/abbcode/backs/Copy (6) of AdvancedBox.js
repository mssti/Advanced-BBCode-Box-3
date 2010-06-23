// <![CDATA[

/** AdvancedBox JS - Start
* This work is open source
* AdvancedBox for resized images based on "Reimg Image Resizer (+ lightbox)" from http://www.taletn.com/ - http://www.phpbb.com/community/viewtopic.php?f=70&t=907805
* Paked with : A JavaScript Compressor.  version 3.0 - http://dean.edwards.name/packer/
**/

var AdvancedBox = {
	/** Global Variables **/

	/** Set opacity on background element **/
	ojbOpacity : 60,
	/** The size of "air" up to page **/
	borderSize : 20,
	/** if you adjust the padding in the CSS, you will need to update this variable **/
	padding : 4,
	/** All object **/
	objOverlay, objLightbox, objloadingLink, objBottomNavCloseLink, objZoom, objHoverNav, objOuterImageContainer, objImageContainer, objImage, newObjImage : null,
	/** Dimensions of the box **/
	MaxWidth, MaxHeight : 0;
	/** Dimensions of the current displayed image **/
	RealImgWidth, RealImgHeight	= 0;
	/** Zoom level **/
	zoomLevel : 10;
	/** Loading **/
	Wait_pass : 0;
	/** The browser **/
	OldStyle, NewStyle, msie : null;
	/** SlideShow **/
	objBottomNavPrevLink, objNumberDisplay, objBottomNavNextLink, objBottomNavPlayLink, SlideWait : null;
	SlideShowDuration : 5000;
	SlideShows : new Array();

	/**
	* This browser detection is based on code from Martinic <http://www.martinic.com/>
	**/
	DetectBrowser : function()
	{
		var browser : window.navigator.userAgent.match(/(^|\W)(MSIE)\s+(\d+)(\.\d+)?/);
		if (!browser) { browser = window.navigator.userAgent.match(/(^|\W)(Firefox|Opera|Safari)\/(\d+)(\.\d+)?/); if (!browser) { browser = window.navigator.userAgent.match(/(^|\W)(Mozilla)\/[\d.]+\s+\(.*?rv:(\d+)(\.\d+)?.*?\)/); } }
		if (!browser || browser.length < 5) { return; }
		var version = parseFloat(browser[3]+browser[4]);
		browser = browser[2];
		if (browser == "MSIE")			{ msie = version; }
		else if (browser == "Firefox")	{ var firefox = version; }
		else if (browser == "Opera")	{ var opera = version; }
		else if (browser == "Safari")	{ var safari = version; }
		else if (browser == "Mozilla")	{ var mozilla = version; }

		/** IE6=T : IE7=T : FF2=F : FF3=F : O=F **/
		OldStyle = ( msie && msie <= 7.0 ) ? true : false;
		/** IE6=F : IE7=T : FF2=F : FF3=F : O=F **/
		NewStyle = ( msie >= 7.0 || firefox > 3.0) ? true : false;
	},

	/** Initialize all **/
	Start = function( url )
	{
		/** At first run, creates the element container **/
		if ( !objOverlay ) { DetectBrowser(); Create(); }	

		/** Show the loading image **/
		ElementShow(objloadingLink);

		newObjImage			= new Image();
		/** Clear the image url **/
		newObjImage.src		= url_clean( url );
		newObjImage.onload	= function(){ Prepare( newObjImage, zoomLevel ) };

		return false;
	},

	/** Creates the elements container and appends it to the main document ( The background, image and close button ). **/
	Create = function()
	{
		var objBody = document.getElementsByTagName("body").item(0);

		/** Create the background element (div) **/
		objOverlay = document.createElement("div");
		objOverlay.setAttribute('id','overlay');
		objOverlay.onclick = function() { Close(); return false; } //Close; //
		objBody.appendChild(objOverlay);

		/** Create a big container **/
		objLightbox = document.createElement("div");
		objLightbox.setAttribute('id','lightbox');
		objLightbox.style.display = 'none';
		objBody.appendChild(objLightbox);

		/** Create a big image container **/
		objOuterImageContainer = document.createElement("div");
		objOuterImageContainer.setAttribute('id','outerImageContainer');
		objLightbox.appendChild(objOuterImageContainer);

		/** Create the image container **/
		objImageContainer = document.createElement("div");
		objImageContainer.setAttribute('id','imageContainer');
		objOuterImageContainer.appendChild(objImageContainer);

		/** Create the image here **/
		objLightboxImage = document.createElement("img");
		objLightboxImage.setAttribute('id','lightboxImage');
		objLightboxImage.onclick = function() { Close(); return false; } //Close; //
//		objLightboxImage.onload = objLightboxImage.onerror = function() { ElementHide(objloadingLink); return false; } //Loading_Hide;
		objImageContainer.appendChild(objLightboxImage);

		/** Create the toolbar **/
		objHoverNav = document.createElement("div");
		objHoverNav.setAttribute('id','hoverNav');
		objOuterImageContainer.appendChild(objHoverNav);

		/** Create the Close button **/
		objBottomNavCloseLink = document.createElement("a");
		objBottomNavCloseLink.setAttribute('id','CloserLink');
		objBottomNavCloseLink.alt = objBottomNavCloseLink.title = ImageResizerCloseAlt;
		objBottomNavCloseLink.setAttribute('href','#');
		objBottomNavCloseLink.onclick = function() { Close(); return false; } // Close; //
		objHoverNav.appendChild(objBottomNavCloseLink);

		/** Create the Zoom button **/
		objBottomNavZoomLink = document.createElement("a");
		objBottomNavZoomLink.setAttribute('id','ZoomLink');
		objBottomNavZoomLink.setAttribute('href','#');
		objBottomNavZoomLink.onclick = function() { ZoomInClick(); return false; } // ZoomInClick; //
		objHoverNav.appendChild(objBottomNavZoomLink);

		/** Create the Prev button **/
		objBottomNavPrevLink = document.createElement("a");
		objBottomNavPrevLink.setAttribute('id','PrevLink');
		objHoverNav.appendChild(objBottomNavPrevLink);

		/** Create the Next button **/
		objBottomNavNextLink = document.createElement("a");
		objBottomNavNextLink.setAttribute('id','NextLink');
		objHoverNav.appendChild(objBottomNavNextLink);

		/** Create the text n of n picture **/
		objNumberDisplay = document.createElement( "span" );
		objNumberDisplay.setAttribute('id','nOnText');
		objHoverNav.appendChild(objNumberDisplay);

		/** Create the Play button **/
		objBottomNavPlayLink = document.createElement("a");
		objBottomNavPlayLink.setAttribute('id','PlayLink');
		objBottomNavPlayLink.setAttribute('href','#');
		objBottomNavPlayLink.alt = objBottomNavPlayLink.title = ImageResizerPlayAlt;
		objBottomNavPlayLink.onclick = function() { Slide_Show( 'play' ); return false; };
		objHoverNav.appendChild(objBottomNavPlayLink);

		/** Create the Loading button **/
		objloadingLink = document.createElement("a");
		objloadingLink.setAttribute('id','loadingLink');
		objloadingLink.alt = objloadingLink.title = ImageResizerCloseAlt;
		objloadingLink.onclick = Close; //function() { Close(); return false; }
		objBody.appendChild(objloadingLink);

		/** Preload the navbar buttons **/
		var preload_image_object = new Image();
		image_url = new Array( "advancedbox_blank.gif", "advancedbox_icon_close.gif", "advancedbox_icon_zoom.gif", "advancedbox_icon_next.gif", "advancedbox_icon_prev.gif", "advancedbox_icon_play.gif", "advancedbox_icon_pause.gif", "advancedbox_icon_loading.gif" );
		for( i = 0, pi = image_url.length; i < pi; i++ ) { preload_image_object.src = image_url[i]; }
	},

	/** Adjust sizes **/
	Prepare = function(newObjImage, CurrentZoomLevel)
	{
		/** Hide some tags **/
		ElementBoxes( 'hidden' );

		zoomLevel = CurrentZoomLevel;

		/** Show the loading image **/
		ElementShow(objloadingLink);
		/** Show the background overlay **/
		ElementShow(objLightbox);
		/** Show the big container, whitout this here, all will be a mess ;) **/
		ElementShow(objOverlay);

		/** Determine the dimensions of the entire document & current scroll position within the document**/
		var PageSize   = getPageSizes();
		var PageScroll = getPageScroll()

		/** Determine the visible dimensions of the browser window (the "viewport") **/
		MaxWidth	= Math.floor( PageSize.WWidth  -  (borderSize*2) );
		MaxHeight	= Math.floor( PageSize.WHeight - ((borderSize*2) + ElementGetHeight(objHoverNav)) );

		ElementSetTop(objHoverNav, (ElementGetHeight(objHoverNav) + padding)*-1);
		ElementSetLeft(objHoverNav, (padding*-1));

		/** The background gets the document's dimensions, so a shadow can be cast over the entire document **/
		ElementSetHeight(objOverlay, PageSize.PHeight);

		/** Place the big container **/
		ElementSetTop( objLightbox,    (PageScroll.YScroll + borderSize/2) );
		ElementSetHeight( objLightbox, (PageSize.WHeight   - borderSize*2) );

		/** Update the image **/
		FxFade( objLightboxImage, 100, 0, 60 ); //FxFade(objLightboxImage, 100, 0, 1);

		/** Update the big container **/
		var objOuterImageContainerdims = scale_dims(newObjImage.width, newObjImage.height, MaxWidth, MaxHeight);
		ElementSetTop(objOuterImageContainer, ElementGetHeight(objHoverNav));
		ElementSetHeight(objImageContainer, objOuterImageContainerdims.H );

		ElementSetWidth( objLightboxImage,  1 );
		ElementSetHeight( objLightboxImage, 1 );
//		var callback_params = new Array( CurrentImageSrc, CurrentImageWidth, CurrentImageHeight );
		BoxScale('outerImageContainer', objOuterImageContainerdims.W, objOuterImageContainerdims.H, UpdateImage, newObjImage );
	},

	UpdateImage = function( newObjImage )
	{
		ElementSetSrc(objLightboxImage, newObjImage.src );

		/** Optionally resize the image **/
		var objImagedims = scale_dims(newObjImage.width, newObjImage.height, MaxWidth, MaxHeight);
		ElementSetWidth(objLightboxImage,  objImagedims.W );
		ElementSetHeight(objLightboxImage, objImagedims.H );

		objLightboxImage.style.visibility = 'visible';
		FxFade(objLightboxImage, 0, 100, 60); //FxFade(objLightboxImage, 0, 100, 60);

		/** Show the loading image **/
		ElementHide(objloadingLink);

		/** Resize event handlers **/
		window.onresize = Resize;

		/** Stop the body scroll function **/
//		ScrollFreeze.on();

		/** Update SlideShow **/
		Slide_Show( );

		/** Optionally zoom in 1:1 **/
		if (zoomLevel >= 100) { ZoomIt(); }
	},

	Slide_Show = function( PlayOnOff, PlayNumber )
	{
		/** Reset to default values **/
		objNumberDisplay.style.display = "none";
		objBottomNavPrevLink.style.display = "none";
		objBottomNavNextLink.style.display = "none";
		objBottomNavPlayLink.style.display = "none";

		/** Get the actual picture **/
		var curr	= url_clean( objLightboxImage.src );

		/** Get current pos in the array **/
		var search	= contains(curr, SlideShows);
		var found	= search[0];
		var pos		= search[1];
		var last	= SlideShows.length;

		if ( found )
		{
			var prev = SlideShows[pos-1];
			var next = SlideShows[pos+1];

			if ( pos-1 >= 0 )
			{
				objBottomNavPrevLink.style.display = "";
				objBottomNavPrevLink.onclick = function() { Start( prev ); return false; };
			}

			objNumberDisplay.style.display = "";
			objNumberDisplay.innerHTML = ImageResizerNumberOf.replace(/%1\$s/, pos+1 ).replace(/%2\$s/, last);

			if ( pos+1 < last )
			{
				objBottomNavNextLink.style.display = "";
				objBottomNavNextLink.onclick = function() { Start( next ); return false; };
			}

			/** Run the SlideShow **/
			if ( last > 1 ) { objBottomNavPlayLink.style.display = ""; }

			if (PlayOnOff && typeof(PlayOnOff) != "undefined")
			{

				/** Calling from last pict, so start from first : else : start from next pict :) **/
				if ( !PlayNumber && pos+1 == last )
				{
					PlayNumber	= 1;
					PlayNext	= SlideShows[0];
				}
				else
				{
					PlayNumber	= pos+1;
					PlayNext	= next;
				}
				
				if ( PlayOnOff == 'play' && PlayNumber < last )
				{
					objBottomNavPlayLink.setAttribute('id','PauseLink');
					objBottomNavPlayLink.alt = objBottomNavPlayLink.title = ImageResizerPauseAlt;
					objBottomNavPlayLink.onclick = function() { Slide_Show( 'pause' ); return false; };				
					Start( PlayNext );
					SlideWait = window.setTimeout( "Slide_Show('play', '"+PlayNumber+"');", ( SlideShowDuration ) );
				}
				else
				{
					objBottomNavPlayLink.setAttribute('id','PlayLink');
					objBottomNavPlayLink.alt = objBottomNavPlayLink.title = ImageResizerPlayAlt;		
					objBottomNavPlayLink.onclick = function() { Slide_Show( 'play' ); return false; };
					clearTimeout(SlideWait);
				}
			}
		}
	},

	/** Reset to default values **/
	Close = function(e)
	{
		/** Show some tags **/
		ElementBoxes( 'visible' );

		/** Return the body scroll function **/
		ScrollFreeze.off();

		/** Canel Resize event handlers **/
		window.onresize = null;

		/** Cancel Slideshow **/
		clearTimeout(SlideWait);
		objBottomNavPlayLink.setAttribute('id','PlayLink');

		/** Hide the image, background and buttons **/
		objLightboxImage.setAttribute('src', ImageResizerBlankImage);
		ElementHide(objloadingLink);
		ElementHide(objLightbox);
		ElementHide(objOverlay);
	},

	/** If the browser window is resized, recalculate dimensions and positions **/
	Resize = function(/*e*/)
	{
		var CurrImageSrc = objLightboxImage.src;
		Close();
		ElementShow(objLightbox);
		ElementShow(objOverlay);
////////Prepare( CurrImageSrc, RealImgWidth, RealImgHeight, zoomLevel );
	},

	ZoomOutClick = function(e)
	{
///////Prepare( objLightboxImage.src, RealImgWidth, RealImgHeight, 10 ); /* if (e && typeof(e.stopPropagation) != "undefined") { e.stopPropagation(); } else if (window.event) { window.event.cancelBubble = true; } */
	},

	ZoomInClick = function(e)
	{
		ZoomIt(); /* if (e && typeof(e.stopPropagation) != "undefined") { e.stopPropagation(); } else if (window.event) { window.event.cancelBubble = true; } */
	},

	/** Zoom in to real dimensions, adding scroll bars if necessary **/
	ZoomIt = function()
	{
		/** Zoom in 1:1 **/
		if (parseInt(objLightboxImage.style.width) >= RealImgWidth && parseInt(objLightboxImage.style.height) >= RealImgHeight) { return; }

		objLightboxImage.style.width = RealImgWidth+"px";
		objLightboxImage.style.height = RealImgHeight+"px";

		objImageContainer.style.overflow = "auto";

		/** Maximize the image container **/
		if (!OldStyle)
		{
			objImageContainer.style.top = objImageContainer.style.left = objOuterImageContainer.style.height = 0;
			objImageContainer.style.width = "auto";
		}
		else
		{
			var border = objImageContainer.offsetWidth-objImageContainer.clientWidth;

			objImageContainer.style.top = objImageContainer.style.left = objOuterImageContainer.style.height = 0;
			objImageContainer.style.width = (MaxWidth-2*objImageContainer.offsetLeft-border)+"px";

			if (objOuterImageContainer.offsetWidth > MaxWidth) { objImageContainer.style.width = (MaxWidth-(objOuterImageContainer.offsetWidth-MaxWidth))+"px"; }
		}

		/** Center the box **/
		objImageContainer.style.left = Math.floor((objOuterImageContainer.offsetWidth-objImageContainer.offsetWidth)/2-objImageContainer.offsetLeft)+"px";
		objImageContainer.style.top = parseInt(objImageContainer.style.top )+(( msie && msie < 7.0 ) ? 30 : 0)+"px";

		/** If the image is smaller than the maximized image container, then shrink the width of the image container **/
		if (objImageContainer.clientWidth > RealImgWidth)
		{
			objImageContainer.style.width = RealImgWidth+"px";
			objImageContainer.style.width = (RealImgWidth+(RealImgWidth-objImageContainer.clientWidth))+"px";
			objImageContainer.style.left = Math.floor((objOuterImageContainer.offsetWidth-objImageContainer.offsetWidth)/2-objImageContainer.offsetLeft)+"px";
		}
		objImageContainer.style.height = parseInt( objImageContainer.style.height )+( NewStyle ? +55 : 0 )+"px";

		/** Reset the scroll position **/
		if (objImageContainer.scrollLeft) { objImageContainer.scrollLeft = 0; }
		if (objImageContainer.scrollTop)  { objImageContainer.scrollTop  = 0; }

		/** Swap Zoom In for Zoom Out **/
		objBottomNavZoomLink.alt = objBottomNavZoomLink.title = ImageResizerZoomOutAlt;
		objBottomNavZoomLink.onclick = ZoomOutClick;

		/** Position the toolbar **/
		objHoverNav.style.left = (parseInt(objImageContainer.offsetLeft))+"px";
		objHoverNav.style.top  = (parseInt(objImageContainer.style.top ) + ( msie && msie < 7.0 ? -20 : 10) )+"px";
	},

/** Common functions - Start **/
	ElementHide			= function(element) { element.style.display = 'none'; },
	ElementShow			= function(element) { element.style.display = '';},
	ElementGetWidth		= function(element) { return element.offsetWidth; },
	ElementSetWidth		= function(element,w) {element.style.width = w + "px"; },
	ElementGetHeight	= function(element) { return element.offsetHeight; },
	ElementSetHeight	= function(element,h) { element.style.height = h + "px"; },
	ElementSetTop		= function(element,t) { element.style.top = t + "px"; },
	ElementSetLeft		= function(element,l) { element.style.left = l + "px"; },
	ElementSetSrc		= function(element,src) { element.src = src; },
	ElementSetInnerHTML = function(element,content) { element.innerHTML = content; },
	ElementBoxes		= function(action) { if (action != 'visible') { action = 'hidden'; } if (msie) { for (var S = 0; S < document.forms.length; S++) { for (var R = 0; R < document.forms[S].length; R++) { if (document.forms[S].elements[R].options) { document.forms[S].elements[R].style.visibility = action; } } } } var theObjects = document.getElementsByTagName("object"); for (var i = 0; i < theObjects.length; i++) { theObjects[i].style.visibility = action; }; },

	/** Updated by MSSTI
	* resize both w & h even if is not set a previous value ;) * Code from : http://www.hesido.com/web.php?page=javascriptanimation
	**/
	BoxScale  = function( boxElement, boxNewWidth, boxNewHeight, callback, callback_params ) { var boxObject	= document.getElementById( boxElement ); var boxWidth	= parseInt( parseFloat( 0 + boxObject.style.width ) ); var boxNewWidth = parseInt( parseFloat( 0 + boxNewWidth ) ); var boxHeight	= parseInt( parseFloat( 0 + boxObject.style.height ) ); var boxNewHeight= parseInt( parseFloat( 0 + boxNewHeight ) ); DoChange( boxObject, boxWidth, boxNewWidth, boxHeight, boxNewHeight, 25, 100, 0.333, callback, callback_params ); },
	DoChange  = function( elem, startWidth, endWidth, startHeight, endHeight, steps, intervals, powr, callback, callback_params ) { var actStep = 0; elemchange = setInterval( function() { newH = elem.currentHeight = EaseInOut( startHeight, endHeight, steps, actStep, powr ); elem.style.height = elem.currentHeight.toString()+"px"; newW = elem.currentWidth  = EaseInOut( startWidth, endWidth, steps, actStep, powr ); elem.style.width  = elem.currentWidth.toString()+"px"; actStep++; if ( actStep > steps ) { clearInterval( elemchange ); if ( typeof callback == "function" ) { callback( callback_params ); } } },intervals); },
	EaseInOut = function( minValue, maxValue, totalSteps, actualStep, powr ) { var delta = parseInt(maxValue) - parseInt(minValue); var stepp = minValue+(Math.pow(((1 / totalSteps) * actualStep), powr) * delta); return Math.ceil(stepp); },

	/** 
	* Hide selects/object on page, possible values for action are 'hidden' and 'visible' * Code from : http://www.shawnolson.net/a/1198/hide-select-menus-javascript.html
	**/
	FxFade  = function(elem, start, end, speed, callback) { clearInterval( elemfade ); elemfade = setInterval( function() { start = Findend(start, end, speed); FxAlpha(elem, start); if(start == end) { clearInterval( elemfade ); if ( typeof callback == "function" ) { callback(); } } }, 1); },
	Findend = function(x, y, speed) { return x < y ? Math.min(x + speed, y) : Math.max(x - speed, y); },
	FxAlpha = function(elem, opacity) { var style = elem.style; style.opacity = style.MozOpacity = style.KhtmlOpacity = opacity / 100; style.filter = "alpha(opacity=" + opacity + ")"; },

	/**
	* Returns array with : page width, page height, window width, window height, x page scroll, y page scroll values. * Code from - quirksmode.org
	**/
	getPageSizes = function()
	{
		var xScroll, yScroll;
		if (window.innerHeight && window.scrollMaxY) { xScroll = document.body.scrollWidth; yScroll = window.innerHeight + window.scrollMaxY; }
		/* all but Explorer Mac */
		else if ( document.body.scrollHeight > document.body.offsetHeight) { xScroll = document.body.scrollWidth; yScroll = document.body.scrollHeight; }
		/* Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari */
		else { xScroll = document.body.offsetWidth; yScroll = document.body.offsetHeight; }
		
		var windowWidth, windowHeight;
		/* all except Explorer */
		if (self.innerHeight) { windowWidth = self.innerWidth; windowHeight = self.innerHeight; }
		/* Explorer 6 Strict Mode */
		else if (document.documentElement && document.documentElement.clientHeight) { windowWidth = document.documentElement.clientWidth; windowHeight = document.documentElement.clientHeight; }
		/* Other Explorers */
		else if (document.body) { windowWidth = document.body.clientWidth; windowHeight = document.body.clientHeight; }
		
		// for small pages with total height less then height of the viewport
		if(yScroll < windowHeight) { pageHeight = windowHeight; } else { pageHeight = yScroll; }
		// for small pages with total width less then width of the viewport
		if(xScroll < windowWidth) { pageWidth = windowWidth; } else { pageWidth = xScroll; }

		return { PWidth: pageWidth, PHeight: pageHeight, WWidth: windowWidth, WHeight: windowHeight, XScroll: xScroll, YScroll: yScroll }; // return new Array('',pageWidth,pageHeight,windowWidth,windowHeight);
	},
	
	/**
	* Returns array with x,y page scroll values.
	* Core code from - quirksmode.org
	**/
	getPageScroll = function() { var yScroll; if (self.pageYOffset) { yScroll = self.pageYOffset; xScroll = self.pageXOffset;	} else if (document.documentElement && document.documentElement.scrollTop){ /* Explorer 6 Strict */ yScroll = document.documentElement.scrollTop; xScroll = document.documentElement.scrollLeft; } else if (document.body) { /* all other Explorers */ yScroll = document.body.scrollTop; xScroll = document.body.scrollLeft; } return { YScroll: yScroll, XScroll: xScroll }; },

	/**
	* Code From : http://www.huddletogether.com/forum/comments.php?DiscussionID=1798
	**/
	scale_dims = function(orig_w, orig_h, max_w, max_h) { var scale = scale_rate(orig_w, orig_h, max_w, max_h); var new_w = Math.round(scale*orig_w); new_h = Math.round(scale*orig_h); if (new_w < 1) { new_w = 1; } if (new_h < 1) { new_h = 1; } return { W:new_w, H: new_h }; },
	scale_rate = function (orig_w, orig_h, max_w, max_h) { var scale1 = 0; var scale2 = 0; if (orig_w > max_w) { scale1 = (orig_w - max_w) / orig_w; } if (orig_h > max_h) { scale2 = (orig_h - max_h) / orig_h; } var scale = (scale1>scale2)?scale1:scale2; return (1-scale); },

	/**
    * It does a busy-wait loop.
    * Code from : http://www.faqts.com/knowledge_base/view.phtml/aid/1602
    **/
	// if ( msie ){ Pause(250); } else { Pause(100);}
    Pause = function( numberMillis ) { var now = new Date(); var exitTime = now.getTime() + numberMillis; while (true) { now = new Date(); if (now.getTime() > exitTime) { return; } } };

/** Common functions - Start **/

	this.SlideShows = SlideShows;
	this.Start = Start;

};
/**
* If you don't find a better way, this may have to be a job for ScrollFreeze.
* Code from - http://bytes.com/forum/thread498334.html
**/
ScrollFreeze = /*2843293230303620532E4368616C6D657273*/
{
	propFlag : true,
	Ydisp : 0,
	Xdisp : 0,

	on : function() { if(this.getProp()) { window.onscroll=function(){ ScrollFreeze.setXY(); } } },
	off : function() {window.onscroll=null;},
	getProp : function() { if( typeof window.pageYOffset != 'undefined' ) { this.Ydisp=window.pageYOffset; this.Xdisp=window.pageXOffset; } else if(document.documentElement) { this.Ydisp=document.documentElement.scrollTop; this.Xdisp=document.documentElement.scrollLeft; } else if(document.body && typeof document.body.scrollTop != 'undefined') { this.Ydisp=document.body.scrollTop; this.Xdisp=document.body.scrollLeft; } else { this.propFlag=false; } return this.propFlag; },
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
	if ( url.indexOf('download') != -1 )
	{
		/** Will get the real url to the download script, ex : http://www.mssti.com/phpbb3/download/file.php **/
		var valor   = url.substring( 0, url.indexOf('?') );
		/** Will get an string starting from the id, ex : id=65&mode=view or only id=65 **/
		var valorId1= url.substring( url.indexOf('id') );
		/** Will get only the id value, ex : id=65 or null if have no extra params **/
		var valorId2 = valorId1.substring( valorId1.indexOf('id'), valorId1.indexOf('&') );
		/** Recreate the image url, ex : http://www.mssti.com/phpbb3/download/file.php?id=65 **/
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
	var newimg = document.createElement('IMG');
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
	mtable = document.createElement('TABLE');
	mtbody = document.createElement('TBODY');
	mtr = document.createElement('TR');
	mtd1 = document.createElement('TD');
	mtd2 = document.createElement('TD');
	mimg = document.createElement('IMG');
	mtext = document.createTextNode('');

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
		this.warningTextNode.data = NcodeImageResizer.warning_filesize.replace('%1$s', this.originalWidth).replace('%2$s', this.originalHeight).replace('%3$s', Math.round(this.img.fileSize / 1024));
	}
	else
	{
		this.warningTextNode.data = NcodeImageResizer.warning_no_filesize.replace('%1$s', this.originalWidth).replace('%2$s', this.originalHeight);
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
			if ( this.img.className == 'attach_parent' ) { window.open(this.img.parentNode.href, '_blank'); } else { window.open(this.img.src, '_blank'); }
			break;
		case 'samewindow':
			if ( this.img.className == 'attach_parent' ) { window.open(this.img.parentNode.href, '_self'); } else { window.open(this.img.src, '_self'); }
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
		pro_sig_elm_ary = getElementsByClassName('signature','div');
		for (var e = 0, psea = pro_sig_elm_ary.length; e < psea; e++)
		{
			pro_sig_img_ary = getElementsByClassName('resize_me', 'img', document.getElementById( pro_sig_elm_ary[e].id ));
			for (var i = 0, psia = pro_sig_img_ary.length; i < psia; i++) { sig_images_ary.push( pro_sig_img_ary[i].src); }
		}

		/** Signatures in Subsilver2 styles **/
		sub_sig_elm_ary = getElementsByClassName('postbody','span');
		for (var e = 0, ssea = sub_sig_elm_ary.length; e < ssea; e++)
		{
			sub_sig_img_ary = getElementsByClassName('resize_me', 'img', document.getElementById( sub_sig_elm_ary[e].id ));
			for (var i = 0, ssia = sub_sig_img_ary.length; i < ssia; i++) { sig_images_ary.push(sub_sig_img_ary[i].src); }
		}
		/** Now the array sig_images_ary contain all images in signatures **/
	}
/** Search images in signatures - End **/
	
/** Search all images inside posts - Start **/
	var post_images_ary = post_attach_ary = posted_images_ary = new Array();

	/** Real images - Attached images - Attached thumbnail **/
	post_images_ary = MyGetElementsByClassName('resize_me|attach_me|attach_parent')
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
			// ABBC3 thumbnail //
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
						img.onclick = function() { window.open(this.src, '_blank'); return false; }
						break;
					default:
					case 'newwindow':
						img.onclick = function() { window.open(this.src, '_blank'); return false; }
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
						if ( !ImageResizer ) { img.onclick = function() { window.open(this.parentNode.href, '_blank'); return false; } }
						break;
					default:
					case 'newwindow':
						if ( !ImageResizer ) { img.onclick = function() { window.open(this.parentNode.href, '_self'); return false; } }
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
						if ( !ImageResizer ) { ImgOnLoad_unScale( img, img, img.src ); img.onclick = function() { window.open(this.src, '_blank'); return false; } }
						break;
					case 'samewindow':
						if ( !ImageResizer ) { ImgOnLoad_unScale( img, img, img.src ); img.onclick = function() { window.open(this.src, '_self'); return false; } }
						break;
				}
		}

		if ( ImageResizer ) { NcodeImageResizer.createOn(img); }
	}
	/* MSIE */ if (typeof(window.detachEvent) != "undefined") { window.detachEvent("onload",ImgOnLoad); }
	return true;
}

function ImgOnLoad_scale( obj, imgobj, imgsrc, imgwidth, imgheight )
{
	var new_img = new Image();

	new_img.setAttribute('src', imgsrc);
	new_img.onload = function() { imgobj.setAttribute('width', new_img.width); imgobj.setAttribute('height', new_img.height); return false; }
	obj.onclick = function() { ImgOnLoad_unScale( obj, imgobj, imgsrc, imgwidth, imgheight ); return false; }
}

function ImgOnLoad_unScale( obj, imgobj, imgsrc, imgwidth, imgheight )
{
	imgwidth  = ( imgwidth  > 0 ) ? imgwidth  : ImageResizerMaxWidth;
	imgheight = ( imgheight > 0 ) ? imgheight : ImageResizerMaxHeight;
	imgobj.setAttribute('width', imgwidth );
	if ( imgheight > 0) { imgobj.setAttribute( 'height', imgheight ); } else { imgobj.setAttribute( 'height', imgwidth ); }
	obj.onclick = function() { ImgOnLoad_scale( obj, imgobj, imgsrc, imgwidth, imgheight ); return false; }
}

/**
* Install the safety net to catch any images that were somehow not resized - START
**/
if (window.onload_functions) // prosilver
{
	onload_functions[onload_functions.length] = "ImgOnLoad();";
}
else if (typeof(window.addEventListener) != "undefined") // DOM
{
	window.addEventListener("load", ImgOnLoad, false);
}
else if (typeof(window.attachEvent) != "undefined") // MSIE
{
	window.attachEvent("onload", ImgOnLoad);
}
/** Install the safety net to catch any images that were somehow not resized - END **/

// ]]>
