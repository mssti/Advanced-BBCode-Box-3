// <![CDATA[
/** Opera doesn't know URL cursor **/
if ( ! navigator.userAgent.match(/(^|\W)(Opera)\/(\d+)(\.\d+)?/) ) { document.write( '<style type="text/css" media="all"><!--' + "\n\r" + '.resized-div, .attach_me, .attach_parent, .hoverbox { cursor: url("styles/abbcode/zoomin.cur"), pointer; }'+ "\n\r" + '--></style>'); }

/**
* Highslide JS - Start
* Using Highslide for free under the conditions stated on the home page: http://vikjavev.no/highslide/#licence
*
/*******************************************************************************************************************************************/
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';	//hs.outlineType = 'glossy-dark'; //
hs.fadeInOut = true;
hs.dimmingOpacity = 0.50;
hs.marginTop = 25;
hs.thumbnailId = null;
hs.showCredits = false;
/*
// Add the controlbar
if (hs.addSlideshow) hs.addSlideshow({
//	slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: false,
	overlayOptions: {
		opacity: 1,
		position: 'top left',
		hideOnMouseOut: false
	}
});
*/
/** Highslide JS - End **/

/**
* Add a new value to an Array if isn't repeat
**/
function ArrayPush( arr, val ) { val = url_clean( val ); /** have this array this value ? **/ var found = contains( val, arr ); if( !found[0] ) { arr.push( val ); /* arr[arr.length] = val; */ } }

/**
* To cover IE 5.0's lack of the push method
**/
if ( typeof Array.prototype.push ==' undefined' )
{
	Array.prototype.push = function(value) { this[this.length] = value; }
}
/**
* Search in array
* Returns (true and number ) if 'v' is contained in the array 'a'
**/
function contains( v, a ) { for( var j=0; j<a.length; j++ ) { if( a[j] == v ) { return new Array( true, j ); } } return new Array( false, 0 ); }

/** Clear the image url **/
function url_clean( url )
{
	url = decodeURIComponent( url.toString().replace(/\s/g, ' ') );

	/** Is this an attached image ? if yes, need more work to clear the image url **/
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

/** Image Resizer JS - START **/
function ImageResizerOn( ObjImage )
{
	var ResizerId = Math.floor(Math.random()*(100));
	var ResizerW  = ObjImage.width;
	var ResizerH  = ObjImage.height;
	var ResizerP = 0;

	ObjImage.width = ImageResizerMaxWidth;
	if ( ObjImage.width < ResizerW && ResizerW > 0 && ObjImage.width > 0 )
	{
		ResizerP = Math.ceil( parseInt( ObjImage.width / ResizerW * 100 ) );
	}

	var objResizerDiv				= document.createElement( 'div' );
		objResizerDiv.setAttribute( 'id', ResizerId );
		objResizerDiv.style.width	= ObjImage.width+'px';
		objResizerDiv.className		= 'resized-div';
		objResizerDiv.onclick		= function() {ImageResizeronclick( ObjImage, ResizerId ); return false; };
	if (ObjImage.fileSize && ObjImage.fileSize > 0)
	{
		objResizerDiv.alt = objResizerDiv.title = ImageResizerWarningFilesize.replace( '%1$s', ResizerW).replace( '%2$s', ResizerH).replace( '%3$s', Math.round(ObjImage.fileSize / 1024));
	}
	else
	{
		objResizerDiv.alt = objResizerDiv.title = ImageResizerWarningNoFilesize.replace( '%1$s', ResizerW).replace( '%2$s', ResizerH);
	}

	var	objResizerImg				= document.createElement( 'img' );
		objResizerImg.src			= ImageResizerWarningImage;
		objResizerImg.width			= 16;
		objResizerImg.height		= 16;
		objResizerImg.alt			= '';
		objResizerImg.border		= 0;
		objResizerDiv.className		= 'resized-div';

	var objResizerSpan				= document.createElement( 'span' );
		objResizerSpan.className	= 'resized-txt';

	var	objResizerText			= document.createTextNode( '' );
		objResizerText.data		= ImageResizerWarningFullsize.replace( '%1$s', ResizerP).replace( '%2$s', ResizerW).replace( '%3$s', ResizerH);

	objResizerDiv.appendChild(objResizerImg);
	objResizerSpan.appendChild(objResizerText);
	objResizerDiv.appendChild(objResizerSpan);
	ObjImage.parentNode.insertBefore(objResizerDiv,ObjImage);

	if ( ImageResizerMode == 'AdvancedBox' ) { ObjImage.className = ( ObjImage.className ? 'highslide ' + ObjImage.className : 'highslide' ); }
}

function ImageResizeronclick( ObjImage, Id )
{
	switch ( ImageResizerMode )
	{
		case 'AdvancedBox' :
			if ( ObjImage.className == 'attach_parent' ) { return hs.expand( ObjImage.parentNode, { src: ObjImage.parentNode.href } ) } else { return hs.expand(ObjImage, { src: ObjImage.src } ); }
			break;
		default:
		case 'newwindow':
			if ( ObjImage.className == 'attach_parent' ) { window.open( ObjImage.parentNode.href, '_blank' ); } else { window.open( ObjImage.src, '_blank' ); }
			break;
		case 'samewindow':
			if ( ObjImage.className == 'attach_parent' ) { window.open( ObjImage.parentNode.href, '_self' ); } else { window.open( ObjImage.src, '_self' ); }
			break;
		case 'enlarge':
			var ParentId = document.getElementById(Id)
			if ( ObjImage.className == 'attach_parent' ) { ImgOnLoad_scale( ParentId, ObjImage, ObjImage.parentNode.href, ObjImage.width, ObjImage.height ); } else { ImgOnLoad_scale( ParentId, ObjImage, ObjImage.src, ObjImage.width, ObjImage.height ); }
			break;
		case 'pop-up':
			var popup_url = ( ObjImage.className == 'attach_parent' ) ? ObjImage.parentNode.href : ObjImage.src ;
			var popup_width = ( ObjImage.width + 30 );
			var popup_height = ( ObjImage.height + 30 );
			popup( popup_url, popup_width, popup_height );
			break;
	}
	return false;
};
/** Image Resizer JS - END **/

/** Initialize the Resizer **/
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
						/*img.className = ( img.className ? 'highslide ' + img.className : 'highslide' );*/
						img.onclick = function() { return hs.expand(this, { src: this.src } ); }
						break;
					case 'enlarge':
						img.onclick = function() { ImgOnLoad_scale( this, this, this.src, this.width, this.height ); return false; }
						break;
					case 'newwindow':
						img.onclick = function() { window.open( this.src, '_blank' ); return false; }
						break;
					case 'samewindow':
						img.onclick = function() { window.open( this.src, '_self' ); return false; }
						break;									
					default:
					case 'pop-up':
						img.onclick = function() { popup( this.src, this.width, this.height ); return false; }
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
						if ( !ImageResizer ) { /*img.parentNode.className = ( img.parentNode.className ? 'highslide ' + img.parentNode.className : 'highslide' );*/ img.parentNode.onclick = function() {return hs.expand(this)} }
						break;
					case 'enlarge':
						if ( !ImageResizer ) { img.onclick = function() { ImgOnLoad_scale( this, this, this.parentNode.href, this.width, this.height ); return false; } }
						break;
					case 'newwindow':
						if ( !ImageResizer ) { img.onclick = function() { window.open(this.parentNode.href, '_blank' ); return false; } }
						break;
					case 'samewindow':
						if ( !ImageResizer ) { img.onclick = function() { window.open(this.parentNode.href, '_self' ); return false; } }
						break;									
					default:
					case 'pop-up':
						if ( !ImageResizer ) { img.onclick = function() { popup( this.parentNode.href, this.width, this.height ); return false; } }
						break;									
				}
				break;
			/** phpbb image attached **/
			case 'attach_me':
				img.onclick = function() { return false; }
				switch (ImageResizerMode)
				{
					case 'AdvancedBox':
						if ( !ImageResizer ) { /*img.className = ( img.className ? 'highslide ' + img.className : 'highslide' );*/ img.onclick = function () {return hs.expand(this, { src: this.src });} }
						break;
					case 'enlarge':
						if ( !ImageResizer ) { ImgOnLoad_unScale( img, img, img.src ); }
						break;
					case 'newwindow':
						if ( !ImageResizer ) { ImgOnLoad_unScale( img, img, img.src ); img.onclick = function() { window.open(this.src, '_blank' ); return false; } }
						break;
					case 'samewindow':
						if ( !ImageResizer ) { ImgOnLoad_unScale( img, img, img.src ); img.onclick = function() { window.open(this.src, '_self' ); return false; } }
						break;
					default:
					case 'pop-up':
						if ( !ImageResizer ) { ImgOnLoad_unScale( img, img, img.src ); img.onclick = function() { popup( this.src, this.width, this.height ); return false; } }
						break;									
				}
		}

		if ( ImageResizer ) { ImageResizerOn(img); }
	}
	/* MSIE if (typeof(window.detachEvent) != 'undefined' ) { window.detachEvent( 'onload', ImgOnLoad); } */ 
	return true;
}

function ImgOnLoad_scale( obj, imgobj, imgsrc, imgwidth, imgheight )
{
	var new_img = new Image();
	new_img.setAttribute( 'src', imgsrc);
	new_img.onload = function() { obj.style.width = new_img.width+'px'; imgobj.setAttribute( 'width', new_img.width); imgobj.setAttribute( 'height', new_img.height); return false; }
	obj.onclick = function() { ImgOnLoad_unScale( obj, imgobj, imgsrc, imgwidth, imgheight ); return false; }
}

function ImgOnLoad_unScale( obj, imgobj, imgsrc, imgwidth, imgheight )
{
	obj.style.width	= imgwidth+'px';
	imgwidth  = ( imgwidth  > 0 ) ? imgwidth  : ImageResizerMaxWidth;
	imgheight = ( imgheight > 0 ) ? imgheight : ImageResizerMaxHeight;
	imgobj.setAttribute( 'width', imgwidth );
	if ( imgheight > 0) { imgobj.setAttribute( 'height', imgheight ); } else { imgobj.setAttribute( 'height', imgwidth ); }
	obj.onclick = function() { ImgOnLoad_scale( obj, imgobj, imgsrc, imgwidth, imgheight ); return false; }
}

/** Install the safety net to catch any images that needs to be resized - START **/
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
/** Install the safety net to catch any images that needs to be resized - END **/

// ]]>
