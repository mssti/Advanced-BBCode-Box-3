// <![CDATA[
/**
* Funtion Fade-in fade-out test - START
**/
var FadeOut = true
var FadePas = 0;
var FadeMax = 255;
var FadeMin = 0;
var FadeStep = 20;
var FadeInt = 100;
var FadeInterval;

function fade_ontimer()
{
	if ( FadeOut )
	{
		FadePas += FadeStep;
		if ( FadePas > FadeMax )
		{
			FadeOut = false;
		}
	}
	else
	{
		FadePas -= FadeStep;
		if ( FadePas < FadeMin )
		{
			FadeOut = true;
			clearInterval( FadeInterval );
		}
	};
	
	if ( ( FadePas < FadeMax ) && ( FadePas > FadeMin ) )
	{
		elem = getElementsByClassName("fade_link");	/** alert( elem.length ); **/
		for (var i=0; i < elem.length; i++)
		{
			elem[i].style.color="rgb(" + FadePas + "," + FadePas + "," + FadePas + ")";
		}
	};
	FadeInterval = setTimeout( 'fade_ontimer()', FadeInt );
}
/**
* Funtion Fade-in fade-out test - END
**/

/**
* Funtion Get element by class - START
**/
function getElementsByClassName(classname)
{
	if (document.getElementsByTagName)
	{
		var els = document.getElementsByTagName("*");
		var c = new RegExp('/b^|' + classname + '|$/b');
		varfinal = new Array();
		var n=0;
		for (var i=0; i < els.length; i++)
		{
			if (els[i].className)
			{
				if(c.test(els[i].className))
				{
					varfinal[n] = els[i];
					n++;
				}
			}
		}
		return varfinal;
	}
	else
	{
		return false;
	}
}
/**
* Funtion Get element by class - END
**/

/**
* Funtion download ed2k tag - START
**/
/**
 * Toggle the visibility of the qr box
 */
function toggle_ed2k( id )
{
	if (document.getElementById('posttable'+id))
	{
		if (document.getElementById('posttable'+id).style.display == 'block')
		{
			document.getElementById('posttable'+id).style.display = 'none';
		}
		else
		{
			document.getElementById('posttable'+id).style.display = 'block';
		}
	}
}

function checkAll( str )
{
	var a = document.getElementsByName( str );
	var n = a.length;
	
	for (var i = 0; i < n; i++)
	{
		if ( a[i].checked )
		{
			a[i].checked = false;
		}
		else
		{
			a[i].checked = true;
		}
	}
}

function download( str, i, first )
{
	var a = document.getElementsByName( str );
	var n = a.length;
	
	for (var i = i; i < n; i++)
	{
		if( a[i].checked )
		{
			window.location=a[i].value;
			if (first)
			{
				timeout = 6000;
			}
			else
			{
				timeout = 500;
			}
			i++;
			window.setTimeout( "download('"+str+"', "+i+", 0)", timeout );
			break;
		}
	}
}
/**
* Funtion download ed2k tag - END
**/


/**
* Funtion copy to clipboard - START
*
* specify whether contents should be auto copied to clipboard (memory)
* Applies only to IE 4+
**/
var copytoclip=1 /** 0=no, 1=yes **/

function HighlightAll( theField )
{
	var tempval = eval("document."+theField);
	tempval.focus();
	tempval.select();
	
	if (document.all&&copytoclip==1)
	{
		therange=tempval.createTextRange()
		therange.execCommand("Copy")
	}
}
/**
* Funtion copy to clipboard - END
**/

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
	
	if ((NcodeImageResizer.MAXWIDTH > 0 && resizer.originalWidth > NcodeImageResizer.MAXWIDTH) || (NcodeImageResizer.MAXHEIGHT > 0 && resizer.originalHeight > NcodeImageResizer.MAXHEIGHT))
	{
		if (isRecovery)
		{
			resizer.reclaimWarning(warning);
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
	
	mimg.src = NcodeImageResizer.IMAGE; /** 'error.gif'; **/
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
	
//	if ( NcodeImageResizer.MODE	== 'greybox')
//	{
//		eAnchor = document.createElement('A');
//		eAnchor.setAttribute('href',this.img.src);
//		eAnchor.setAttribute('rel', 'gb_imageset[]');
//		mtd2.appendChild(eAnchor);
//		eAnchor.appendChild(mtext);
//	}
//	else
//	{
		mtd2.appendChild(mtext);		
//	}
	
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
	if (NcodeImageResizer.MAXWIDTH > 0 && this.originalWidth > NcodeImageResizer.MAXWIDTH)
	{
		resized = true;
		this.img.width = NcodeImageResizer.MAXWIDTH;
		this.img.height = (NcodeImageResizer.MAXWIDTH / this.originalWidth) * this.originalHeight;
	}
	if (NcodeImageResizer.MAXHEIGHT > 0 && this.originalHeight > NcodeImageResizer.MAXHEIGHT)
	{
		resized = true;
		this.img.height = NcodeImageResizer.MAXHEIGHT;
		this.img.width = (NcodeImageResizer.MAXHEIGHT / this.originalHeight) * this.originalWidth;
	}
	
	this.warning.width = this.img.width;
	this.warning.onclick = function()
	{
		return this.resize.unScale();
	}
	
	if (this.img.width < 450)
	{
		this.warningTextNode.data = NcodeImageResizer.warning_small;
	}
	else if (this.img.fileSize && this.img.fileSize > 0)
	{
		this.warningTextNode.data = NcodeImageResizer.warning_filesize.replace('%1$s', this.originalWidth).replace('%2$s', this.originalHeight).replace('%3$s', Math.round(this.img.fileSize / 1024));
		/** mtext.data = '<phrase 1="'+this.originalWidth+'" 2="'+this.originalHeight+'" 3="'+Math.round(this.img.fileSize/1024)+'">$vbphrase[ncode_imageresizer_warning_filesize]</phrase>'; **/
	}
	else
	{
		this.warningTextNode.data = NcodeImageResizer.warning_no_filesize.replace('%1$s', this.originalWidth).replace('%2$s', this.originalHeight);
		/** mtext.data = '<phrase 1="'+this.originalWidth+'" 2="'+this.originalHeight+'">$vbphrase[ncode_imageresizer_warning_no_filesize]</phrase>'; **/
	}
	return false;
}

NcodeImageResizer.prototype.unScale = function()
{
	switch (NcodeImageResizer.MODE)
	{
		case 'greybox' :
			this.warning.onclick = GB_showImage(this.img.src,this.img.src);
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
* Resize a textbox - START
* Original function by Disturbed One (http://www.hvmdesign.com/)
**/
function textbox_resize( pix, id )
{
	var box			= document.getElementById(id);
	var new_height	= (parseInt(box.style.height) ? parseInt(box.style.height) : 300) + pix;

	if (new_height > 0)
	{
		box.style.height = new_height + 'px';
	}
	return false;
}
/**
* Resize a textbox - START
**/

/**
* target compatibility for XHTML 1.0 Strict! - START
**/
function externalLinks( anchor )
{
	if ( anchor.getAttribute("href") && ( anchor.getAttribute("rel") == "external" || anchor.getAttribute("rel") == "gb_imageset[]" ) )
	{
		anchor.target = "_blank";
	}
}
/**
* target compatibility for XHTML 1.0 Strict! - END
**/

// ]]>