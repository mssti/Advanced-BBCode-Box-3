
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
}

NcodeImageResizer.getNextId = function()
{
	id = 1;
	while (document.getElementById(NcodeImageResizer.IMAGE_ID_BASE + id) != null)
	{
		id++;
	}
	return id;
}

NcodeImageResizer.createOn = function(img)
{
	NcodeImageResizer.mode					= ImageResizerMode
	NcodeImageResizer.WarningImage			= ImageResizerWarningImage;
	NcodeImageResizer.MaxWidth				= ImageResizerMaxWidth;
	NcodeImageResizer.MaxHeight				= ImageResizerMaxHeight;
	NcodeImageResizer.warning_small			= ImageResizerWarningSmall;
	NcodeImageResizer.warning_fullsize		= ImageResizerWarningFullsize;
	NcodeImageResizer.warning_filesize		= ImageResizerWarningFilesize;
	NcodeImageResizer.warning_no_filesize	= ImageResizerWarningNoFilesize;

	isRecovery = false;
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
		resizer = new NcodeImageResizer(id, img);
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
}

NcodeImageResizer.prototype.restoreImage = function()
{
	newimg = document.createElement('IMG');
	newimg.src = this.img.src;
	this.img.width = newimg.width;
	this.img.height = newimg.height;
}

NcodeImageResizer.prototype.reclaimWarning = function()
{
	warning = document.getElementById(NcodeImageResizer.WARNING_ID_BASE + newid);

	this.warning = warning;
	this.warningTextNode = warning.firstChild.firstChild.childNodes[1].firstChild;
	this.warning.resize = this;
	this.scale();
}

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
}

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
	}

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
}

NcodeImageResizer.prototype.unScale = function()
{
	switch (NcodeImageResizer.mode)
	{
		case 'AdvancedBox' :
			return GB_showImage(this.img.src,this.img.src);
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
					return this.resize.scale()
				};
			}
			break;
	}
	return false;
}
/**
* Image Resizer JS - END
**/

/**
*
**/
function ImgOnLoad()
{
	/** Get all images inside posts **/
	var posted_images_ary = new Array();

	/** Subsilver2 styles **/
	if ( document.getElementById("pagecontent") )
	{
		posted_images_ary = document.getElementById("pagecontent").getElementsByTagName("img");
	}
	/** ProSilver styles **/
	if ( document.getElementById("page-body") )
	{
		posted_images_ary = document.getElementById("page-body").getElementsByTagName("img");
	}

	for (var pia = 0; pia < posted_images_ary.length; pia++)
	{
		var GetParent = false;
		var img = posted_images_ary[pia];

		if ( img.className.match(/(^|\s)hoverbox(\s|$)/) //ABBC3 thumbnail
//		  || img.parentNode.className.match(/(^|\s)attach-image(\s|$)/) // prosilver style attach - image
		  || img.parentNode.parentNode.parentNode.className.match(/(^|\s)thumbnail(\s|$)/) // prosilver attach - thumbnail
//		  || img.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.className.match(/(^|\s)attachtitle(\s|$)/) // subsilver2 attach - thumbnail
		  || img.parentNode.parentNode.className.match(/(^|\s)attachcontent(\s|$)/) // subsilver2 attach - thumbnail
		  || ( img.parentNode.parentNode.className.match(/(^|\s)row[\d](\s|$)/) && img.parentNode.parentNode.parentNode.parentNode.parentNode.className.match(/(^|\s)tablebg(\s|$)/) ) // subsilver2 attach - image
		)
		{
			if ( img.parentNode.parentNode.parentNode.className.match(/(^|\s)thumbnail(\s|$)/) // prosilver attach - thumbnail
			||   img.parentNode.parentNode.className.match(/(^|\s)attachcontent(\s|$)/) // subsilver2 attach - thumbnail
			|| ( img.parentNode.parentNode.className.match(/(^|\s)row[\d](\s|$)/) && img.parentNode.parentNode.parentNode.parentNode.parentNode.className.match(/(^|\s)tablebg(\s|$)/) ) // subsilver2 in-line attach
			)
			{
				GetParent = true;

				// IE doesn't understand how to manage attach with this function :( , so skip it :)
				var browser = window.navigator.userAgent.match(/(^|\W)(MSIE)\s+(\d+)(\.\d+)?/);
				if ( browser)
				{
					continue;
				}

			}

			switch (ImageResizerMode)
			{
				case 'AdvancedBox' :
					if ( !GetParent )
					{
						img.rel = "gb_imageset[]";
						img.onclick = function () {GB_showImage(this.src,this.src);}
					}
					else
					{
						img.parentNode.rel = "gb_imageset[]";
						img.parentNode.onclick = function () {GB_showImage(this.href,this.href); return false; }
					}
					break;
				default:
				case 'newwindow':
					img.onclick = function () {window.open(this.src, '_blank'); return false;}
					break;
				case 'samewindow':
					img.onclick = function () {window.open(this.src, '_self'); return false;}
					break;
				case 'enlarge':
					img.onclick = function() {ImgOnLoad_unScale(this); return false;}
					break;
			}
		}
		else
		{
			if ( (ImageResizerMaxWidth > 0 || ImageResizerMaxHeight > 0) && (img.width > ImageResizerMaxWidth || img.height > ImageResizerMaxHeight) )
			{
				img.rel = "gb_imageset[]";
				NcodeImageResizer.createOn(img);
			}
		}
	}
}

function ImgOnLoad_unScale(img)
{
	var new_img = new Image();
	new_img.src = img.src;
	img.setAttribute('width', new_img.width);
	img.onclick = function() { ImgOnLoad_scale(img); return false;}
}

function ImgOnLoad_scale(img)
{
	img.setAttribute('width', (img.className.match(/(^|\s)hoverbox(\s|$)/) ? ImageResizerThumbnails : ImageResizerThumbnailsPhpbb) );
	img.onclick = function() { ImgOnLoad_unScale(img); return false;}
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