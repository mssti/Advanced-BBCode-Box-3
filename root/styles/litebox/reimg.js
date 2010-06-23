/**
* Resize too large images
* (c) Tale 2008
* http://www.taletn.com/
*/

var reimg_version = 0.000008; // 0.0.B8

// To use this script you need to define the following javascript variables
// *before* including this javascript file into your HTML file:
//
// <script type="text/javascript">
// // <![CDATA[
// var reimg_maxWidth = 640, reimg_maxHeight = 480, reimg_relWidth = 0;
// var reimg_swapPortrait = true;
// 
// var reimg_zoomImg = "./images/spacer.gif";
// var reimg_zoomStyle = "width: 20px; height: 20px; background: url(./styles/prosilver/imageset/icon_reimg_zoom_in.gif) top left no-repeat; filter: Alpha(Opacity=50); opacity: .50;";
// var reimg_zoomHover = "background-position: 0 100%; cursor: pointer; filter: Alpha(Opacity=100); opacity: 1.00;";
// var reimg_zoomAlt = "Zoom in (real dimensions: %1$d x %2$d)";
// var reimg_zoomTarget = "_blank";
// //var reimg_zoomLevel = 100; // Directly zoom in 1:1
// 	
// function reimg(img, width, height) { window.reimg_version ? reimg_resize(img, width, height) : null; }
// // ]]>
// </script>
// <script type="text/javascript" src="./styles/reimg.js"></script>
//
// All of the variables are optional, if you leave them out you will simply
// get less functionality.
//
// After having loaded the script, you can route images through it using the
// onload and onerror events:
//
// <img src="http://www.taletn.com/rats/lefty/menu-huge.jpg" class="reimg" onload="reimg(this);" onerror="reimg(this);" />


// Automatically generate stylesheet rules to prehide and then resize
// images.
//
// Hint: You could define more (other) rules for these class names in your
// template's stylesheet file. If e.g. you want to give all resized images a
// red border you could add this rule to your stylesheet:
//
// .reimg-width, .reimg-height, .reimg-rel, .reimg-both {
//  	border: 2px solid red;
// }

document.writeln('<style type="text/css" media="screen, projection"><!--');
// Hide images that may need to be resized until they've loaded. Opera
// doesn't like "display: none" here, hence the 1x1 hidden style, which is
// almost the same anyway.)
document.writeln('.reimg { width: 1px; height: 1px; visibility: hidden; }');

// Resize images.
if (window.reimg_maxWidth)
{
	document.writeln('.reimg-width { width: '+reimg_maxWidth+'px; height: auto; }');
	if (window.reimg_swapPortrait)
		document.writeln('.reimg-width-portrait { width: auto; height: '+reimg_maxWidth+'px; }');
}
if (window.reimg_maxHeight)
{
	document.writeln('.reimg-height { width: auto; height: '+reimg_maxHeight+'px; }');
	if (window.reimg_swapPortrait)
		document.writeln('.reimg-height-portrait { width: '+reimg_maxHeight+'px; height: auto; }');
}
//document.writeln('.reimg-both { }');
if (window.reimg_relWidth)
{
	document.writeln('.reimg-rel { width: '+reimg_relWidth+'%; height: auto; }');
	//if (window.reimg_swapPortrait)
	//	document.writeln('.reimg-rel-portrait { }');
	//document.writeln('.reimg-rel-force { }');
}

// Put the zoom image in the top left corner.
if (window.reimg_zoomImg)
{
	document.writeln('span.reimg-zoom { position: absolute; margin: 1px; }');
	document.writeln('img.reimg-zoom { border: none !important; cursor: pointer !important;'+(window.reimg_zoomStyle ? ' '+reimg_zoomStyle : '')+' }');
	if (window.reimg_zoomHover)
		document.writeln('img.reimg-zoom:hover { '+reimg_zoomHover+' }');
}
document.write('--></style>');


// Unhide an image by removing the .reimg CSS class.

function reimg_unhide(img)
{
	if (img.className)
		img.className = img.className.replace(/(^|.*\s)reimg(\s+(.*)|$)/, '$1$3');
}


// Show the original sized picture when the zoom image is clicked.

var reimg_zoomLink = null;
var reimg_orgSize = new Array();

function reimg_zoomIn(e)
{
	if (!e)
		e = window.event;
	target = this;
	if (e)
	{
		if (target == window)
			target = e.target ? e.target : e.srcElement;
		if (typeof(e.stopPropagation) != "undefined")
			e.stopPropagation();
		else
			e.cancelBubble = true;
	}
	if (!target)
		return false;

	// Create a dummy <a href="..."> element.
	if (!reimg_zoomLink)
	{
		reimg_zoomLink = document.createElement("a");
		reimg_zoomLink.style.display = "none";
		if (window.reimg_zoomTarget == "_blank")
		{
			try
			{
				reimg_zoomLink.target = "_blank";
			}
			catch (err)
			{
			}
		}
		document.body.appendChild(reimg_zoomLink);
	}
	reimg_zoomLink.href = target.parentNode.nextSibling.src;

	// Open the image in a new window.
	if (window.reimg_zoomTarget == "_blank")
	{
		if (reimg_zoomLink.target && typeof(reimg_zoomLink.click) != "undefined")
			reimg_zoomLink.click();
		else
			window.open(reimg_zoomLink.href);

	}
	// Open the image in a lightbox.
	else if (window.reimg_zoomTarget == "_litebox" && window.litebox_version)
	{
		var width, height;
		if (reimg_orgSize[reimg_zoomLink.href])
		{
			width = reimg_orgSize[reimg_zoomLink.href][0];
			height = reimg_orgSize[reimg_zoomLink.href][1];
		}
		else
		{
			width = target.parentNode.nextSibling.width;
			height = target.parentNode.nextSibling.height;
		}
		litebox_show(reimg_zoomLink.href, width, height, window.reimg_zoomLevel);
	}
	// Open the image as if it were any normal URL.
	else
	{
		// Try exturl() from my External URLs in New Window MOD.
		if (!window.exturl_version || exturl(reimg_zoomLink))
			// Else simply open the image in the current window.
			window.location.href = reimg_zoomLink.href;
	}

	return false;
}


// Resize an image that has just finished loading using these two methods:
//
// 1. Setting the CSS class name (reimg-width, reimg-height or reimg-both)
//    which may already resize it automatically.
// 2. Setting the image's width and height attributes, which will resize it
//    for sure.
//
// Method 1 takes precedence over 2, although both are always applied.
// Method 1 won't work if both width and height are too large, but method 2
// will.
//
// This function can also be "forced" upon an image by specifying the
// original width and/or height, e.g.:
//
// <img src="image.jpg" style="width: 320px;" onload="reimg(this, 640);" onerror="reimg(this);" />
//
// If the maximum image width is smaller than 320, then the image would
// still be resized. Because 320 is smaller than 640, a zoom button will
// appear. If the lightbox zooming method is selected, then the picture
// would be openend in a lightbox of 640 pixels wide. The height of the
// lightbox would be caclulated automatically.

function reimg_resize(img, orgWidth, orgHeight, safetyNet)
{
	if (!img)
		return;
	// Ignore looping animations in MSIE.
	if (img.readyState == "complete" && img.complete && !safetyNet)
		return;

	// Measure the maximum relative width.
	var maxWidth = window.reimg_maxWidth, maxHeight = window.reimg_maxHeight, relWidth = 0;
	if (window.reimg_relWidth && !orgWidth && !orgHeight)
	{
		var div = document.createElement("div");
		div.style.width = reimg_relWidth+"%";
		div.style.height = "1px";
		img.parentNode.insertBefore(div, img);
		relWidth = div.offsetWidth;
		img.parentNode.removeChild(div);
	}

	// Unhide the image, still using its real (full) dimensions.
	reimg_unhide(img);

	var width = img.width, height = img.height;
	// Skip image if the dimensions couldn't be determined at this
	// point. The image may still be reprocessed later on by the safety
	// net.
	if (!(width && height))
	{
		if (!safetyNet)
			img.className = (img.className ? img.className+" " : "")+"reimg";
		return;
	}

	// Keep track of the original image size.
	if (window.reimg_zoomTarget == "_litebox" && !reimg_orgSize[img.src])
	{
		if (orgWidth && !orgHeight)
			orgHeight = Math.round(orgWidth/(width/height));
		else if (orgHeight && !orgWidth)
			orgWidth = Math.round(orgHeight/(height/width));
		if (orgWidth && orgHeight)
			reimg_orgSize[img.src] = [orgWidth, orgHeight];
		else
			reimg_orgSize[img.src] = [width, height];
	}

	// Swap width and height for portrait images.
	var swap = false;
	if (window.reimg_swapPortrait && height > width)
	{
		swap = true;
		width = img.height;
		height = img.width;
	}

	// Apply the maximum relative width.
	var relForce = false;
	if (relWidth)
	{
		// Try the maximum relative width directly on the image
		// (works for prosilver, doesn't work for subsilver2).
		img.style.width = reimg_relWidth+"%";
		if (!window.opera) // Prevent blinking loop in Opera :-?
		{
			if (img.offsetWidth && img.offsetWidth > relWidth)
				relForce = true;
		}
		else
			relForce = true;
		img.style.width = "";
		if (!maxWidth || relWidth < maxWidth)
			maxWidth = relWidth;
		else
			relWidth = 0;
	}

	// Make sure maximum width > maximum height if we're to swap width
	// and height for portrait images.
	if (window.reimg_swapPortrait && maxWidth && maxHeight && maxHeight > maxWidth)
	{
		maxWidth += maxHeight;
		maxHeight = maxWidth-reimg_maxHeight;
		maxWidth -= maxHeight;
	}

	var className = "";
	// Is the image too wide?
	if (maxWidth && width > maxWidth)
	{
		height = Math.round(height/(width/maxWidth));
		width = maxWidth;
		// The resized image might still also be too high.
		if (height && maxHeight && height > maxHeight)
		{
			width = Math.round(width/(height/maxHeight));
			height = maxHeight;
			className = "reimg-both";
			relWidth = 0;
		}
		else if (relForce)
		{
			className = "reimg-rel-force";
			relWidth = 0;
		}
		else
			className = "reimg-"+(relWidth ? "rel" : "width")+(swap ? "-portrait" : "");
	}
 	// Is the image too high?
	else if (maxHeight && height > maxHeight)
	{
		width = Math.round(width/(height/maxHeight));
		height = maxHeight;
		// The resized image might still also be too wide.
		if (width && maxWidth && width > maxWidth)
		{
			height = Math.round(height/(width/maxWidth));
			width = maxWidth;
			className = "reimg-both";
		}
		else if (relForce)
			className = "reimg-rel-force";
		else
			className = "reimg-height"+(swap ? "-portrait" : "");
		relWidth = 0;
	}

	// Swap back width and height for portrait images.
	if (swap)
	{
		width += height;
		height = width-height;
		width -= height;
	}

	// If the image isn't too large, then abort the mission.
	if (!className && (!orgWidth || width >= orgWidth) && (!orgHeight || height >= orgHeight))
		return;

	// 1. Resize the image by setting its CSS class.
	if (!orgWidth)
		orgWidth = img.width;
	if (!orgHeight)
		orgHeight = img.height;
	if (relWidth)
		img.style.maxWidth = ((window.reimg_maxWidth && reimg_maxWidth < img.width) ? reimg_maxWidth : img.width)+"px";
	img.className = (img.className ? img.className+" " : "")+className;
	// 2. Resize the image by setting its width and height attributes.
	img.width = width;
	img.height = height;

	// Add a zoom image on top of the resized image.
	if (window.reimg_zoomImg)
	{
		// Force a <br /> before the image.
		if (img.previousSibling && (!img.previousSibling.tagName || img.previousSibling.tagName.toLowerCase() != "br"))
		{
			var br = document.createElement("br");
			img.parentNode.insertBefore(br, img);
		}
		// Add the zoom image.
		var span = document.createElement("span");
		var zoom = document.createElement("img");
		zoom.src = reimg_zoomImg;
		if (window.reimg_zoomAlt)
			zoom.alt = zoom.title = reimg_zoomAlt.replace(/%1\$d/, orgWidth).replace(/%2\$d/, orgHeight);
		else
			zoom.alt = "";
		zoom.className = span.className = "reimg-zoom";
		zoom.onclick = reimg_zoomIn;
		span.appendChild(zoom);
		img.parentNode.insertBefore(span, img);
	}

	// If the user is already viewing an image in the lightbox, then
	// recalculate (resize) the shadowy background.
	if (window.litebox_version && litebox_background && litebox_background.style.display != "none")
		litebox_calc();
}


// The safety net that catches any images that somehow were not resized the
// 1st time around by the <img onload> event.

function reimg_onLoad(e)
{
	var images = document.getElementsByTagName("img");
	if (!images)
		return true;
	for (var n = 0; n < images.length; n++)
	{
		if (!images[n].className.match(/(^|\s)reimg(\s|$)/))
			continue;
		reimg_resize(images[n], null, null, true);
	}
	return true;
}


// Install the safety net to catch any images that were somehow not resized.
if (window.onload_functions) // prosilver
	onload_functions[onload_functions.length] = "reimg_onLoad();";
else if (typeof(window.addEventListener) != "undefined") // DOM
	window.addEventListener("load", reimg_onLoad, false);
else if (typeof(window.attachEvent) != "undefined") // MSIE
	window.attachEvent("onload", reimg_onLoad);
