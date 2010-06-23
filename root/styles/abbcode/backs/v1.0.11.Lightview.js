/**
* Add a new value to an Array if isn't repeat
**/
function ArrayPush( arr, val )
{
	val = url_clean( val );

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
Array.prototype.push = function(value)
{
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
	
	this.img.setAttribute('rel', 'gallery[myset]');
	this.img.className = ( this.img.className ? 'lightview ' + this.img.className : 'lightview' );
//	ArrayPush(AdvancedBox.SlideShows , this.img.src);

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
//			AdvancedBox.Show(this.img.src);
//			return Lightview.show({ href: this.img.src, options: { width: 800, height: 600 }});
			if (this.img.className == 'attach_parent' )
			{
				Lightview.show({ href: this.img.parentNode.href, rel: 'image', options: { width: 800, height: 600 }});
			}
			else
			{
				Lightview.show({ href: this.img.src, rel: 'image', options: { width: 800, height: 600 }});
			}
			break;
		default:
		case 'newwindow':
			if ( this.img.className == 'attach_parent' )
			{
				
				window.open( this.img.parentNode.href, '_blank');
			}
			else
			{
				window.open(this.img.src, '_blank');
			}
			break;
		case 'samewindow':
			if ( this.img.className == 'attach_parent' )
			{
				window.open(this.img.parentNode.href, '_self');
			}
			else
			{
				window.open(this.img.src, '_self');
			}				
			break;
		case 'enlarge':
			if ( this.img.className == 'attach_parent' )
			{
				ImgOnLoad_scale( this.warning, this.img, this.img.parentNode.href, this.img.width, this.img.height );
			}
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
		posted_images_ary.push( post_images_ary[i] );
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
			if( contains( img.src, sig_images_ary )[0] )
			{
				continue;
			}
		}

		/** Check if this image will be resized **/
		if ( ( ImageResizerMaxWidth > 0 && img.width > ImageResizerMaxWidth ) || ( ImageResizerMaxHeight > 0 && img.height > ImageResizerMaxHeight ) )
		{
			ImageResizer = true;
			
			if ( img.className == 'hoverbox resize_me' )
			{
				ImageResizer = ( exclude_thumbnail_abbc3 ? false : true );
			}
			if ( img.className == 'attach_parent' )
			{
				ImageResizer = ( exclude_thumbnail_attached ? false : true );
			}
			if ( img.className == 'attach_me' )
			{
				ImageResizer = ( exclude_images_attached ? false : true );
			}
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
						img.className = ( img.className ? 'lightview ' + img.className : 'lightview' );
						img.setAttribute('rel', 'gallery[myset]'); img.rel = "gallery[myset]";
						img.onclick = function () { Lightview.show({ href: this.src, rel: 'image', options: { width: 800, height: 600 }}); return false; }
						break;
					case 'enlarge':
						img.onclick = function() { ImgOnLoad_scale( this, this, this.src, this.width, this.height ); return false; }
						break;
					case 'newwindow':
						img.onclick = function() { window.open(this.src, '_blank'); return false;}
						break;
					default:
					case 'newwindow':
						img.onclick = function() { window.open(this.src, '_blank'); return false;}
						break;									
				}
				break;
			// phpbb thumbnail attached //
			case 'attach_parent':
				// Disable the attachment.html onclick="viewableArea(this);"
				img.parentNode.onclick = function() { return false; }

				switch (ImageResizerMode)
				{
					case 'AdvancedBox':
						if ( !ImageResizer  )
						{
//							img.onclick = function() { AdvancedBox.Show( this.parentNode.href ); return false; }
//							ArrayPush( AdvancedBox.SlideShows, img.parentNode.href );
							img.className = ( img.className ? 'lightview ' + img.className : 'lightview' );
							img.setAttribute('rel', 'gallery[myset]'); img.rel = "gallery[myset]";
							img.onclick = function () { Lightview.show({ href: this.parentNode.href, rel: 'image', options: { width: 800, height: 600 }}); return false; }
						}
						break;
					case 'enlarge':
						if ( !ImageResizer )
						{
							img.onclick = function() { ImgOnLoad_scale( this, this, this.parentNode.href, this.width, this.height ); return false;}
						}
						break;
					case 'newwindow':
						if ( !ImageResizer )
						{
							img.onclick = function() { window.open(this.parentNode.href, '_blank'); return false; }
						}
						break;
					default:
					case 'newwindow':
						if ( !ImageResizer )
						{
							img.onclick = function() { window.open(this.parentNode.href, '_self'); return false; }
						}
						break;									
				}
				break;
			// phpbb image attached //
			case 'attach_me':
				img.onclick = function() { return false; }

				switch (ImageResizerMode)
				{
					case 'AdvancedBox':
						if ( !ImageResizer )
						{
//							img.onclick = function() { AdvancedBox.Show( this.src ); return false; }
//							ArrayPush( AdvancedBox.SlideShows, img.src );
							img.className = ( img.className ? 'lightview ' + img.className : 'lightview' );
							img.setAttribute('rel', 'gallery[myset]'); img.rel = "gallery[myset]";
							img.onclick = function () { Lightview.show({ href: this.src, rel: 'image', options: { width: 800, height: 600 }}); return false; }
						}
						break;
					case 'enlarge':
						if ( !ImageResizer )
						{
							ImgOnLoad_unScale( img, img, img.src );
						}
						break;
					default:
					case 'newwindow':
						if ( !ImageResizer )
						{
							ImgOnLoad_unScale( img, img, img.src) //, parseInt(img.width), img.height );						
							img.onclick = function() { window.open(this.src, '_blank'); return false; }
						}
						break;
					case 'samewindow':
						if ( !ImageResizer )
						{
							ImgOnLoad_unScale( img, img, img.src) //, parseInt(img.width), img.height );						
							img.onclick = function() { window.open(this.src, '_self'); return false;}
						}
						break;
				}
		}

		if ( ImageResizer )
		{
			NcodeImageResizer.createOn(img);
		}
	}

	if (typeof(window.detachEvent) != "undefined") // MSIE
	{
		window.detachEvent("onload",ImgOnLoad);
	}
	return true;
}

function ImgOnLoad_scale( obj, imgobj, imgsrc, imgwidth, imgheight )
{
	var new_img = new Image();

	new_img.setAttribute('src', imgsrc);
	new_img.onload = function() {imgobj.setAttribute('width', new_img.width); imgobj.setAttribute('height', new_img.height); return false; }
	obj.onclick = function() { ImgOnLoad_unScale( obj, imgobj, imgsrc, imgwidth, imgheight ); return false; }
}

function ImgOnLoad_unScale( obj, imgobj, imgsrc, imgwidth, imgheight )
{
	imgwidth  = ( imgwidth  > 0 ) ? imgwidth  : ImageResizerMaxWidth;
	imgheight = ( imgheight > 0 ) ? imgheight : ImageResizerMaxHeight;
	
	imgobj.setAttribute('width', imgwidth );
	if ( imgheight > 0)
	{
		imgobj.setAttribute('height', imgheight );
	}
	else
	{
		imgobj.setAttribute('height', imgwidth );
	}

	obj.onclick = function() { ImgOnLoad_scale( obj, imgobj, imgsrc, imgwidth, imgheight ); return false;}
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