// <![CDATA[

/** AdvancedBox JS - Start
* This work is open source
* AdvancedBox for resized images based on "Reimg Image Resizer (+ lightbox)" from http://www.taletn.com/ - http://www.phpbb.com/community/viewtopic.php?f=70&t=907805
* Paked with : A JavaScript Compressor.  version 3.0 - http://dean.edwards.name/packer/
**/

var AdvancedBox = new function()
{
	/** Set opacity on background element **/
	var ojbOpacity = 60;
	/** Global Variables **/
	var objBody, objOverlay, objLoading, objCloser, objZoom, objToolbar, objContainer, objImageContainer, objImage, newObjImage = null;
	/** Dimensions of the box **/
	var MaxWidth, MaxHeight = 0;
	/** Dimensions of the current displayed image **/
	var RealImgWidth, RealImgHeight	= 0;
	/** Zoom level **/
	var zoomLevel = 10;
	/** Loading **/
	var Wait_pass = 0;
	/** The browser **/
	var OldStyle, NewStyle = msie = null;
	/** SlideShow **/
	var objPrev, objText, objNext, objPlay, SlideWait = null;
	var SlideShows = new Array();
	var objSlide = new Array();

	/**
	* This browser detection is based on code from Martinic <http://www.martinic.com/>
	**/
	DetectBrowser = function()
	{
		var browser = window.navigator.userAgent.match(/(^|\W)(MSIE)\s+(\d+)(\.\d+)?/);

		if (!browser)
		{
			browser = window.navigator.userAgent.match(/(^|\W)(Firefox|Opera|Safari)\/(\d+)(\.\d+)?/);
			if (!browser)
			{
				browser = window.navigator.userAgent.match(/(^|\W)(Mozilla)\/[\d.]+\s+\(.*?rv:(\d+)(\.\d+)?.*?\)/);
			}
		}
		if (!browser || browser.length < 5)
		{
			return;
		}
		var version = parseFloat(browser[3]+browser[4]);
		browser = browser[2];

		if (browser == "MSIE")
		{
			msie = version;
		}
		else if (browser == "Firefox")
		{
			var firefox = version;
		}
		else if (browser == "Opera")
		{
			var opera = version;
		}
		else if (browser == "Safari")
		{
			var safari = version;
		}
		else if (browser == "Mozilla")
		{
			var mozilla = version;
		}

		/** IE6=T : IE7=T : FF2=F : FF3=F : O=F **/
		OldStyle = ( msie && msie <= 7.0 ) ? true : false;
		/** IE6=F : IE7=T : FF2=F : FF3=F : O=F **/
		NewStyle = ( msie >= 7.0 || firefox > 3.0) ? true : false;

	},

	Show = function(url, width, height, zoomlvl)
	{
		if ( !objOverlay )
		{
			Initialize();
		}
		/** Show the background overlay **/
		objOverlay.style.display = "";

		/** Show the loading image **/
		objLoading.style.display = "";

		/** Clear the image url **/
		url = Clear_url( url );

		/** Try to get the real image dimensions **/
		newObjImage	= new Image();
		newObjImage.setAttribute('src', url);
		width		= newObjImage.width;
		height		= newObjImage.height;

		/** Let's do some extra checks **/
		imgWait = window.setTimeout( "waitFor();", 1 );

		return false;
	},

	/** Clear the image url **/
	Clear_url = function( url )
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
	},

	waitFor = function( )
	{
		/** Safety end the process if can't load the image afer 250 intents ( 2.0833333333333335 Minutes ) **/
		Wait_pass++;
		if ( Wait_pass == 250 )
		{
			clearTimeout(imgWait);
			Close();
		}

		if ( !newObjImage.readyState == "complete" || !newObjImage.complete )
		{
			/** Seems that IE when create an image gives a default width to 28 **/
			if ( newObjImage.width > 100)
			{
				ShowImage( newObjImage.src, newObjImage.width, newObjImage.height, zoomLevel );
			}
			else
			{
				imgWait = window.setTimeout( "waitFor();", 500 );
			}
		}
		else
		{
			clearTimeout(imgWait);
			ShowImage( newObjImage.src, newObjImage.width, newObjImage.height, zoomLevel );
		}
	},

	/** Create the background, image and close button elements. **/
	Initialize = function()
	{
		/** Determine the current scroll position within the document **/
		var arrayScroll = getScrollXY();

		/** Determine the dimensions of the entire document **/
		var arraySize = getPageSize();

		objBigBody = document.getElementsByTagName("body").item(0);

		/** Create the background element (div) **/
		objOverlay = document.createElement("div");
		objOverlay.className = "AdvancedBoxBackGround";
		objOverlay.style.display = "none";
		objOverlay.style.filter = 'alpha(opacity:'+ojbOpacity+')';
		objOverlay.style.KHTMLOpacity = objOverlay.style.MozOpacity = objOverlay.style.opacity = (ojbOpacity/100);
		/** The background gets the document's dimensions, so a shadow can be cast over the entire document **/
		objOverlay.style.width	= "100%";
		objOverlay.style.height	= arraySize[2]+"px";

		/** Create the Loading button **/
		objLoading = document.createElement("a");
		objLoading.setAttribute('id','LoadingLink');
		objLoading.alt = objLoading.title = ImageResizerCloseAlt;
		objLoading.onclick = Close;

		/** Create the big image container **/
		objContainer = document.createElement("span");
		objContainer.style.display = "none";
		/** Use old style CSS positioning (absolute instead of fixed) for IE <7 **/
		objContainer.style.position = ( OldStyle ? 'absolute' : 'fixed' );
//		objContainer.onclick = Close;

		/** Create the toolbar **/
		objToolbar = document.createElement("span");
		objToolbar.setAttribute('id','hoverNav');
		/** Use old style CSS positioning (absolute instead of relative) for IE <7 **/
		objToolbar.style.position = ( NewStyle ? 'relative' : 'absolute' );

		/** Create the Close button **/
		objCloser = document.createElement("a");
		objCloser.setAttribute('id','CloserLink');
		objCloser.alt = objCloser.title = ImageResizerCloseAlt;
		objCloser.onclick = Close;

		/** Create the Zoom button **/
		objZoom = document.createElement("a");
		objZoom.setAttribute('id','ZoomLink');
		objZoom.onclick = ZoomInClick;

		/** Create the Play button **/
		objPlay = document.createElement("a");
		objPlay.setAttribute('id','PlayLink');
		objPlay.alt = objPlay.title = ImageResizerPlayAlt;
		objPlay.onclick = function() { Slide_Show( 'play' ); return false; };

		/** Create the Prev button **/
		objPrev = document.createElement("a");
		objPrev.setAttribute('id','PrevLink');

		/** Create the text n of n picture **/
		objText = document.createElement( "span" );
		objText.setAttribute('id','nOnText');

		/** Create the Next button **/
		objNext = document.createElement("a");
		objNext.setAttribute('id','NextLink');

		/** Create the image container **/
		objImageContainer = document.createElement("div");

		/** Create the image here **/
		objImage = document.createElement("img");
		objImage.className = objImageContainer.className = objContainer.className = "AdvancedBoxImage";
		/** Hide the loading image **/
		objImage.onload = objImage.onerror = loading_hide;
		objImage.onclick = Close;

		/** Place the background in the document **/
		objBigBody.appendChild(objOverlay);
		/** Place the Loading button in the background **/
		objBigBody.appendChild(objLoading);
		/** Place the Close button in the toolbar **/
		objToolbar.appendChild(objCloser);
		/** Place the Zoom button in the toolbar **/
		objToolbar.appendChild(objZoom);
		/** Place the PrevLink button in the toolbar **/
		objToolbar.appendChild(objPrev);
		/** Place the Next button in the toolbar **/
		objToolbar.appendChild(objNext);
		/** Place the text n of n in the toolbar **/
		objToolbar.appendChild(objText);
		/** Place the PlayLink button in the toolbar **/
		objToolbar.appendChild(objPlay);
		/** Place the toolbar in the big container **/
		objContainer.appendChild(objToolbar);
		/** Place the image in the image container **/
		objImageContainer.appendChild(objImage);
		/** Place the image container in the big container **/
		objContainer.appendChild(objImageContainer);
		/** Place the the big container in the document element **/
		objBigBody.appendChild(objContainer);
	},

	Calculate = function ()
	{
		/** Determine the current scroll position within the document **/
		var arrayScroll = getScrollXY();

		/** Determine the dimensions of the entire document **/
		var arraySize = getPageSize();

		/** Determine the visible dimensions of the browser window (the "viewport") **/
		MaxWidth	= arraySize[3]-20;
		/** Adjust the max width for old browsers **/
		MaxWidth	= (NewStyle) ? (MaxWidth+20) : MaxWidth ;
		MaxWidth	= ( msie && msie < 7.0 ) ? MaxWidth+10 : MaxWidth ;

		MaxHeight	= arraySize[4]+20;/** Adjust the max height - toolbar bar height **/
		/** Adjust the max height for old browsers **/
		MaxHeight	= (NewStyle) ? (MaxHeight-60) : MaxHeight ;
		MaxHeight	= ( msie && msie < 7.0 ) ? MaxHeight-30 : MaxHeight ;

		/** The image span will get (but not just now) the dimensions of the visible window, so it will exactly fit in the viewport **/

		/** Position the image span at the current scroll position **/
		objContainer.style.left	= (!OldStyle ? 0 : arrayScroll[1] )+"px";
		objContainer.style.top	= (!OldStyle ? 0 : arrayScroll[2] )+"px";
	},

	/** Show an image using a pseudo light box effect **/
	ShowImage = function(url, width, height, zoomlvl)
	{
		/** Resize event handlers **/
		window.onresize = Resize;

		Calculate();

		/** hide some tags **/
		ToggleVisibility( 'hidden' );
		
		/** Stop the body scroll function **/
		ScrollFreeze.on();

		objImageContainer.style.overflow = "";
		objImage.setAttribute('src', url);

		objImage.style.width = objImageContainer.style.width = (RealImgWidth = width)+"px";
		objImage.style.height = objImageContainer.style.height = (RealImgHeight = height)+"px";

		/** Show the image, zoom and close buttons included **/
		objContainer.style.display = "";

		/** Optionally resize the image **/
		objContainer.style.width = objContainer.style.height = objImageContainer.style.left = objImageContainer.style.top = "";
		var org = 0;
		if (objContainer.offsetWidth > MaxWidth && width)
		{
			org = width;
			/** Opera fix: "+1" or image appears left instead of centered **/
			width -= objContainer.offsetWidth-MaxWidth+1;
			height = Math.round(height*width/org);
			objImage.style.width = objImageContainer.style.width = width+"px";
			objImage.style.height = objImageContainer.style.height = height+"px";
		}

		if (objContainer.offsetHeight > MaxHeight && height)
		{
			org = height;
			height -= objContainer.offsetHeight-MaxHeight;
			width = Math.round(width*height/org);
			objImage.style.width = objImageContainer.style.width = width+"px";
			objImage.style.height = objImageContainer.style.height = height+"px";
			if (objContainer.offsetWidth > MaxWidth && width)
			{
				org = width;
				width -= objContainer.offsetWidth-MaxWidth;
				height = Math.round(height*width/org);
				objImage.style.width = objImageContainer.style.width = width+"px";
				objImage.style.height = objImageContainer.style.height = height+"px";
			}
		}

		/** Swap Zoom In for Zoom Out **/
		if (org)
		{
			objZoom.alt = objZoom.title = ImageResizerZoomInAlt.replace(/%1\$s/, RealImgWidth).replace(/%2\$s/, RealImgHeight);
			objZoom.onclick = ZoomInClick;
			objZoom.style.display = "";
		}
		else
		{
			objZoom.alt = objZoom.title = ImageResizerZoomOutAlt;
			objZoom.onclick = ZoomOutClick;
			objZoom.style.display = "none";
		}

		/** As promised in Calculate(): The image span gets the dimensions of the visible window, so it will exactly fit in the viewport **/
		objContainer.style.width = MaxWidth+"px";
		objContainer.style.height = MaxHeight+"px";

		/** Center the box **/
		objImageContainer.style.left = Math.floor((objContainer.offsetWidth-objImageContainer.offsetWidth)/2-objImageContainer.offsetLeft)+"px";
		objImageContainer.style.top = Math.floor((objContainer.offsetHeight-objImageContainer.offsetHeight)/2-objImageContainer.offsetTop)+"px";
		objImageContainer.style.top = ( msie && msie < 7.0 ) ? (parseInt(objImageContainer.style.top )+20)+"px" : objImageContainer.style.top ;

		/** Position the Zoom bar **/
		objToolbar.style.left	= (parseInt(objImageContainer.offsetLeft)   )+"px";
		objToolbar.style.top	= (parseInt(objImageContainer.style.top ) + ( msie && msie < 7.0 ? -20 : 10) )+"px";

		/** Update SlideShow **/
//		for (var i = 0; i < SlideShows.length; i++)
//		{
//			alert( SlideShows[i]);
//		}
		Slide_Show( );

		/** Optionally zoom in 1:1 **/
		zoomLevel = zoomlvl;
		if (zoomLevel >= 100)
		{
			ZoomIt();
		}
	},

	Slide_Show = function( PlayOnOff, PlayNumber )
	{
		/** Reset to default values **/
		objPrev.style.display = "none";
		objText.style.display = "none";
		objNext.style.display = "none";
		objPlay.style.display = "none";

		/** Get the actual picture **/
		var curr	= Clear_url( objImage.src );

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
				objPrev.style.display = "";
				objPrev.onclick = function() { Show( prev ); return false; };
			}

			objText.style.display = "";
			objText.innerHTML = ImageResizerNumberOf.replace(/%1\$s/, pos+1 ).replace(/%2\$s/, last);

			if ( pos+1 < last )
			{
				objNext.style.display = "";
				objNext.onclick = function() { Show( next ); return false; };
			}

			/** Run the SlideShow **/
			if ( last > 1 )
			{
				objPlay.style.display = "";				
			}

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
					objPlay.setAttribute('id','PauseLink');
					objPlay.alt = objPlay.title = ImageResizerPauseAlt;
					objPlay.onclick = function() { Slide_Show( 'pause' ); return false; };				
					Show( PlayNext );
					SlideWait = window.setTimeout( "Slide_Show('play', '"+PlayNumber+"');", (5000) );
				}
				else
				{
					objPlay.setAttribute('id','PlayLink');
					objPlay.alt = objPlay.title = ImageResizerPlayAlt;		
					objPlay.onclick = function() { Slide_Show( 'play' ); return false; };
					clearTimeout(SlideWait);
				}
			}
		}

	},

	// Hide the loading when it has fully loaded.
	loading_hide = function(e)
	{
		/** Hide the loading image **/
		objLoading.style.display = "none";
	},

	/** Reset to default values **/
	Close = function(e)
	{
		/** Show some tags **/
		ToggleVisibility( 'visible' );

		/** Return the body scroll function **/
		ScrollFreeze.off();

		/** Canel Resize event handlers **/
		window.onresize=null;

		/** Cancel Slideshow **/
		clearTimeout(SlideWait);
		objPlay.setAttribute('id','PlayLink');

		/** Hide the image, background and buttons **/
		objImage.setAttribute('src', ImageResizerBlankImage);
		objOverlay.style.display = objContainer.style.display = objLoading.style.display = "none";
	},

	/** If the browser window is resized, recalculate dimensions and positions **/
	Resize = function(e)
	{
		var CurrImageSrc = objImage.src;
		Close();
		ShowImage( CurrImageSrc, RealImgWidth, RealImgHeight, zoomLevel );
	},

	ZoomOutClick = function(e)
	{
		ShowImage( objImage.src, RealImgWidth, RealImgHeight, 10 );
/*
		if (e && typeof(e.stopPropagation) != "undefined")
		{
			e.stopPropagation();
		}
		else if (window.event)
		{
			window.event.cancelBubble = true;
		}
*/	},

	ZoomInClick = function(e)
	{
		ZoomIt();
/*
		if (e && typeof(e.stopPropagation) != "undefined")
		{
			e.stopPropagation();
		}
		else if (window.event)
		{
			window.event.cancelBubble = true;
		}
*/	},

	/** Zoom in to real dimensions, adding scroll bars if necessary **/
	ZoomIt = function()
	{
		/** Zoom in 1:1 **/
		if (parseInt(objImage.style.width) >= RealImgWidth && parseInt(objImage.style.height) >= RealImgHeight)
		{
			return;
		}

		objImage.style.width = RealImgWidth+"px";
		objImage.style.height = RealImgHeight+"px";

		objImageContainer.style.overflow = "auto";

		/** Maximize the image container **/
		if (!OldStyle)
		{
			 objImageContainer.style.top = objImageContainer.style.left= objContainer.style.height = 0;
			objImageContainer.style.width = "auto";
		}
		else
		{
			var border = objImageContainer.offsetWidth-objImageContainer.clientWidth;

			 objImageContainer.style.top = objImageContainer.style.left = objContainer.style.height = 0;
			objImageContainer.style.width = (MaxWidth-2*objImageContainer.offsetLeft-border)+"px";
			if (objContainer.offsetWidth > MaxWidth)
			{
				objImageContainer.style.width = (MaxWidth-(objContainer.offsetWidth-MaxWidth))+"px";
			}
		}

		/** Center the box **/
		objImageContainer.style.left = Math.floor((objContainer.offsetWidth-objImageContainer.offsetWidth)/2-objImageContainer.offsetLeft)+"px";
		objImageContainer.style.top = parseInt(objImageContainer.style.top )+(( msie && msie < 7.0 ) ? 30 : 0)+"px";

		/** If the image is smaller than the maximized image container, then shrink the width of the image container **/
		if (objImageContainer.clientWidth > RealImgWidth)
		{
			objImageContainer.style.width = RealImgWidth+"px";
			objImageContainer.style.width = (RealImgWidth+(RealImgWidth-objImageContainer.clientWidth))+"px";
			objImageContainer.style.left = Math.floor((objContainer.offsetWidth-objImageContainer.offsetWidth)/2-objImageContainer.offsetLeft)+"px";
		}
		objImageContainer.style.height = parseInt( objImageContainer.style.height )+( NewStyle ? +55 : 0 )+"px";

		/** Reset the scroll position **/
		if (objImageContainer.scrollLeft)
		{
			objImageContainer.scrollLeft = 0;
		}
		if (objImageContainer.scrollTop)
		{
			objImageContainer.scrollTop = 0;
		}

		/** Swap Zoom In for Zoom Out **/
		objZoom.alt = objZoom.title = ImageResizerZoomOutAlt;
		objZoom.onclick = ZoomOutClick;

		/** Position the toolbar **/
		objToolbar.style.left = (parseInt(objImageContainer.offsetLeft))+"px";
		objToolbar.style.top  = (parseInt(objImageContainer.style.top ) + ( msie && msie < 7.0 ? -20 : 10) )+"px";
	},

	/**
	* Returns array with page width, height and window width, height
	* Code from - quirksmode.org
	**/
	getPageSize = function()
	{
		var xScroll, yScroll;

		if (window.innerHeight && window.scrollMaxY)
		{
			xScroll = document.body.scrollWidth;
			yScroll = window.innerHeight + window.scrollMaxY;
		}
		else if (document.body.scrollHeight > document.body.offsetHeight)
		{	/** all but Explorer Mac **/
			xScroll = document.body.scrollWidth;
			yScroll = document.body.scrollHeight;
		}
		else
		{	/** Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari **/
			xScroll = document.body.offsetWidth;
			yScroll = document.body.offsetHeight;
		}

		var windowWidth, windowHeight;

		if (self.innerHeight)
		{	/** all except Explorer **/
			windowWidth = self.innerWidth;
			windowHeight = self.innerHeight;
		}
		else if (document.documentElement && document.documentElement.clientHeight)
		{	/** Explorer 6 Strict Mode **/
			windowWidth = document.documentElement.clientWidth;
			windowHeight = document.documentElement.clientHeight;
		}
		else if (document.body)
		{	/** other Explorers **/
			windowWidth = document.body.clientWidth;
			windowHeight = document.body.clientHeight;
		}

		/** for small pages with total height less then height of the viewport **/
		if(yScroll < windowHeight)
		{
			pageHeight = windowHeight;
		}
		else
		{
			pageHeight = yScroll;
		}

		/** for small pages with total width less then width of the viewport **/
		if(xScroll < windowWidth)
		{
			pageWidth = windowWidth;
		}
		else
		{
			pageWidth = xScroll;
		}
		return new Array('',pageWidth,pageHeight,windowWidth,windowHeight);
	},

	/**
	* Returns array with x,y page scroll values.
	* Code from - http://www.howtocreate.co.uk/tutorials/javascript/browserwindow
	**/
	getScrollXY = function()
	{
		var xScroll = 0;
		var yScroll = 0;

		if( typeof( window.pageYOffset ) == 'number' )
		{	/** Netscape compliant **/
			yScroll = window.pageYOffset;
			xScroll = window.pageXOffset;
		}
		else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) )
		{	/** DOM compliant **/
			yScroll = document.body.scrollTop;
			xScroll = document.body.scrollLeft;
		}
		else if( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) )
		{	/** IE6 standards compliant mode **/
			yScroll = document.documentElement.scrollTop;
			xScroll = document.documentElement.scrollLeft;
		}
		return new Array('',xScroll, yScroll);
	},

	/** Hide selects/object on page
	* documentation for this script at http://www.shawnolson.net/a/1198/hide-select-menus-javascript.html
	* possible values for action are 'hidden' and 'visible'
	**/
	ToggleVisibility = function (action)
	{
		if (msie)
		{
			if (action!='visible'){action='hidden';}
			
			for (var S = 0; S < document.forms.length; S++)
			{
				for (var R = 0; R < document.forms[S].length; R++)
				{
					if (document.forms[S].elements[R].options)
					{
						document.forms[S].elements[R].style.visibility = action;
					}
				}
			}
		}
			
		var theObjects = document.getElementsByTagName("object");
		for (var i = 0; i < theObjects.length; i++)
		{
			theObjects[i].style.visibility = action;
		}
	};

	DetectBrowser();
	this.SlideShows = SlideShows;
	this.Show = Show;
	this.Clear_url = Clear_url;
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

	on : function()
	{
		if(this.getProp())
		{
			window.onscroll=function(){ ScrollFreeze.setXY(); }
		}
	},

	off : function(){window.onscroll=null;},

	getProp : function()
	{
		if( typeof window.pageYOffset != 'undefined' )
		{
			this.Ydisp=window.pageYOffset;
			this.Xdisp=window.pageXOffset;
		}
		else if(document.documentElement)
		{
			this.Ydisp=document.documentElement.scrollTop;
			this.Xdisp=document.documentElement.scrollLeft;
		}
		else if(document.body && typeof document.body.scrollTop != 'undefined')
		{
			this.Ydisp=document.body.scrollTop;
			this.Xdisp=document.body.scrollLeft;
		}
		else
		{
			this.propFlag=false;
		}
		return this.propFlag;
	},

	setXY : function()
	{
		window.scrollTo( this.Xdisp, this.Ydisp );
	}
}
/** AdvancedBox JS - End **/

/**
* Add a new value to an Array if isn't repeat
**/
function ArrayPush( arr, val )
{
	val = url_clean( val )

	/** have this array this value ? **/
	var found = contains( val, arr );

	if( !found[0] )
	{
		arr[arr.length] = val; //arr.push( val );
	}
}
/**
* To cover IE 5.0's lack of the push method
**/
Array.prototype.push = function(value) {
  this[this.length] = value;
}

/**
* Search in array
* Returns (true and number ) if 'v' is contained in the array 'a'
**/
function contains( v, a )
{
	for( var j=0; j<a.length; j++ )
	{
		if( a[j] == v )
		{
			return new Array( true, j );
		}
	}
	return new Array( false, 0 );
}

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
		newid = NcodeImageResizer.getNextId(); //newid = NcodeImageResizer.IMAGE_ID_BASE + Math.floor(Math.random()*(100));
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

	this.warning = mtable;
	this.warningTextNode = mtext;
	
//	ArrayPush(AdvancedBox.SlideShows , this.img.src);

};

NcodeImageResizer.prototype.scale = function()
{
	if (NcodeImageResizer.MaxHeight > 0 && this.originalHeight > NcodeImageResizer.MaxHeight)
	{
		resized = true;
		this.img.height = NcodeImageResizer.MaxHeight;
		this.img.width = (NcodeImageResizer.MaxHeight / this.originalHeight) * this.originalWidth;
	}
	if (NcodeImageResizer.MaxWidth > 0 && this.originalWidth > NcodeImageResizer.MaxWidth)
	{
		resized = true;
		this.img.width = NcodeImageResizer.MaxWidth;
		this.img.height = (NcodeImageResizer.MaxWidth / this.originalWidth) * this.originalHeight;
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
			AdvancedBox.Show(this.img.src);
			break;
		default:
		case 'newwindow':
			window.open(this.img.src, '_blank');
			break;
		case 'samewindow':
			window.open(this.img.src, '_self');
			break;
		case 'enlarge':
			this.img.width = this.originalWidth;
			this.img.height = this.originalHeight;
			this.img.className = 'ncode_imageresizer_original';
			if (this.warning != null)
			{
				this.warningTextNode.data = NcodeImageResizer.warning_fullsize;
				this.warning.width = this.img.width;
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
*
**/
function ImgOnLoad()
{
	var exclude_signatures 			= true; // false; // true;
	/** ABBC3 thumbnail - Recomended true **/
	var exclude_thumbnail_abbc3		= true; // false; // true;
	/** phpbb thumbnail attached - Recomended true **/
	var exclude_thumbnail_attached	= true; // false; // true;
	/** phpbb image attached - Recomended false **/
	var exclude_images_attached		= false; // false; // true;

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
			for (var i = 0, psia = pro_sig_img_ary.length; i < psia; i++)
			{
				sig_images_ary.push( pro_sig_img_ary[i].src);
			}
		}

		/** Signatures in Subsilver2 styles **/
		sub_sig_elm_ary = getElementsByClassName('postbody','span');
		for (var e = 0, ssea = sub_sig_elm_ary.length; e < ssea; e++)
		{
			sub_sig_img_ary = getElementsByClassName('resize_me', 'img', document.getElementById( sub_sig_elm_ary[e].id ));
			for (var i = 0, ssia = sub_sig_img_ary.length; i < ssia; i++)
			{
				sig_images_ary.push(sub_sig_img_ary[i].src);
			}
		}
		/** Now the array sig_images_ary contain all images in signatures **/
	}
/** Search images in signatures - End **/
	
/** Search all images inside posts - Start **/
	var post_images_ary = post_attach_ary = posted_images_ary = new Array();

	/** Real images - Attached images - Attached thumbnail **/
	post_images_ary = MyGetElementsByClassName('resize_me|attach_me|attach_parent')
	for (var i = 0, ipia = post_images_ary.length; i < ipia; i++)
	{
		posted_images_ary.push( new Array( post_images_ary[i], post_images_ary[i].className) );
	}
	/** Now the array posted_images_ary contain all images in post **/

/** Search all images inside posts - End **/

/** Go ahead and to the jod **/
	for (var pia = 0; pia < posted_images_ary.length; pia++)
	{
		var ImageResizer = false;
		var ContinueResizer = true;

		var img = posted_images_ary[pia];

		/** Skip to resize signatures **/
		if ( exclude_signatures && sig_images_ary.length > 0 )
		{
			if( contains( img[0].src, sig_images_ary )[0] )
			{
				continue;
			}
		}

		/** Check if this image will be resized **/
		if ( ( ImageResizerMaxWidth > 0 && img[0].width > ImageResizerMaxWidth ) || ( ImageResizerMaxHeight > 0 && img[0].height > ImageResizerMaxHeight ) )
		{
			ImageResizer = true;
		}
		
		switch (ImageResizerMode)
		{
			case 'AdvancedBox' :
				if ( img[1].match( /(^|\s)resize_me(\s|$)/) )
				{
					if ( ImageResizer )
					{
						ArrayPush( AdvancedBox.SlideShows, img[0].src );
					}
					/** ABBC3 thumbnail **/
					if ( img[1].match(/(^|\s)hoverbox(\s|$)/) )
					{
						ArrayPush( AdvancedBox.SlideShows, img[0].src );
						img[0].onclick = function() { AdvancedBox.Show( this.src ); return false; }
						ImageResizer = ( exclude_thumbnail_abbc3 ? false : true );
					}
				}

				/** phpbb thumbnail attached **/
				else if ( img[1] == 'attach_parent' )
				{
					if ( ImageResizer )
					{
						img[0].parentNode.onclick = function() { return false; }
						ArrayPush( AdvancedBox.SlideShows, img[0].parentNode.href );
						img[0].onclick = function() { AdvancedBox.Show( this.parentNode.href ); return false; }
					}
					else
					{
						ArrayPush( AdvancedBox.SlideShows, img[0].parentNode.href );
						img[0].onclick = function() { AdvancedBox.Show( this.parentNode.href ); return false; }
					}
					ImageResizer = ( exclude_thumbnail_attached ? false : true );
				}

				/** phpbb image attached **/
				else if ( img[1] == 'attach_me' )
				{
					if ( ImageResizer )
					{
						ArrayPush( AdvancedBox.SlideShows, img[0].src );
						img[0].onclick = function() { return false; }
					}
					else
					{
						ArrayPush( AdvancedBox.SlideShows, img[0].src );
						img[0].onclick = function() { AdvancedBox.Show( this.src ); return false; }
					}
					ImageResizer = ( exclude_images_attached ? false : true );
				}

				break;
			case 'enlarge':
				if ( img[1] == 'hoverbox resize_me' )
				{
					img[0].onclick = function() { ImgOnLoad_scale( this, this.src, this.width ); return false; }
					ImageResizer = ( exclude_thumbnail_abbc3 ? false : true );
				}						

				/** phpbb image attached **/
				else if ( img[1] == 'attach_me' )
				{
					if ( ImageResizer )
					{	// Disable the attachment.html onclick="viewableArea(this);"
						img[0].onclick = function() { return false; }
					}
					else
					{
						img[0].onclick = function() { ImgOnLoad_unScale( this, this.src, this.width ); return false; }
					}
					ImageResizer = ( exclude_images_attached ? false : true );
				}

				/** phpbb thumbnail attached **/
				else if ( img[1] == 'attach_parent' )
				{
					if ( ImageResizer )
					{
						img[0].parentNode.onclick = function() { return false; }
						img[0].onclick = function() { ImgOnLoad_scale( this, this.parentNode.href, this.width ); return false;}
					}
					else
					{
						img[0].onclick = function() { ImgOnLoad_scale( this, this.parentNode.href, this.width ); return false;}
					}
					ImageResizer = ( exclude_thumbnail_attached ? false : true );
				}
				break;

			case 'samewindow':
				if ( img[1].match( /(^|\s)resize_me(\s|$)/) && img[1].match(/(^|\s)hoverbox(\s|$)/) )
				{
					img[0].onclick = function() { window.open(this.src, '_self'); return false;}
					ImageResizer = ( exclude_thumbnail_abbc3 ? false : true );
				}
				/** phpbb image attached **/
				else if ( img[1] == 'attach_me' )
				{
					if ( ImageResizer )
					{
						img[0].onclick = function() { return false; }
					}
					else
					{
						img[0].onclick = function() { window.open(this.src, '_self'); return false;}
					}
					ImageResizer = ( exclude_images_attached ? false : true );
				}

				/** phpbb thumbnail attached **/
				else if ( img[1] == 'attach_parent' )
				{
					if ( ImageResizer )
					{
						img[0].parentNode.onclick = function() { return false; }
						img[0].onclick = function() { window.open(this.parentNode.href, '_self'); return false;}
					}
					else
					{
						img[0].onclick = function() { window.open(this.parentNode.href, '_self'); return false; }
						ImageResizer = ( exclude_thumbnail_attached ? false : true );
					}
				}
				break;
			default:
			case 'newwindow':
				if ( img[1].match( /(^|\s)resize_me(\s|$)/) && img[1].match(/(^|\s)hoverbox(\s|$)/) )
				{
					img[0].onclick = function() { window.open(this.src, '_blank'); return false;}
					ImageResizer = ( exclude_thumbnail_abbc3 ? false : true );
				}
				/** phpbb image attached **/
				else if ( img[1] == 'attach_me' )
				{
					if ( ImageResizer )
					{
						img[0].onclick = function() { return false; }
					}
					else
					{
						img[0].onclick = function() { window.open(this.src, '_blank'); return false; }
					}
					ImageResizer = ( exclude_images_attached ? false : true );
				}
				/** phpbb thumbnail attached **/
				else if ( img[1] == 'attach_parent' )
				{
					if ( ImageResizer )
					{
						img[0].parentNode.onclick = function() { return false; }
						img[0].onclick = function() { window.open(this.parentNode.href, '_blank'); return false; }
					}
					else
					{
						img[0].onclick = function() { window.open(this.parentNode.href, '_blank'); return false; }
					}
					ImageResizer = ( exclude_thumbnail_attached ? false : true );
				}
				break;
		}

		if ( ImageResizer )
		{
			NcodeImageResizer.createOn(img[0]);
		}
	}

	if (typeof(window.detachEvent) != "undefined") // MSIE
	{
		window.detachEvent("onload",ImgOnLoad);
	}
	return true;
}

function ImgOnLoad_scale( obj, img, imgwidth )
{
	var new_img = new Image();

	new_img.setAttribute('src', img);
	new_img.onload = function() {obj.setAttribute('width', new_img.width); return false; }
	obj.onclick = function() { ImgOnLoad_unScale( obj, img, imgwidth ); return false; }
}

function ImgOnLoad_unScale( obj, img, imgwidth )
{
	obj.setAttribute('width', imgwidth );
	obj.onclick = function() { ImgOnLoad_scale( obj, img, imgwidth ); return false;}
}
/*
function XImgOnLoad_scale( img, imgwidth )
{
	var new_img = new Image();

	if ( img.className.match(/(^|\s)resize_parent(\s|$)/) )
	{
		new_img.setAttribute('src', img.parentNode.href);
		new_img.onload = function() {img.setAttribute('width', new_img.width); return false; }
		img.onclick = function() { ImgOnLoad_unScale( img, imgwidth ); return false; }
	}
	else if ( img.className.match(/(^|\s)hoverbox(\s|$)/) )
	{
		new_img.setAttribute('src', img.src);
		img.setAttribute('width', new_img.width);
		img.onclick = function() { ImgOnLoad_unScale( img, imgwidth ); return false;}
	}
}

function XImgOnLoad_unScale( img, imgwidth )
{
	img.setAttribute('width', imgwidth );
	img.onclick = function() { ImgOnLoad_scale( img, imgwidth ); return false;}
}
*/
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