// <![CDATA[

/**
* Funtion Fade-in fade-out test - START
**/
var FadeOut	 = true
var FadePas	 = 0;
var FadeMax	 = 255;
var FadeMin	 = 0;
var FadeStep = 20;
var FadeInt	 = 100;
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
	}

	if ( ( FadePas < FadeMax ) && ( FadePas > FadeMin ) )
	{
		elem = getElementsByClassName("fade_link");
		for (var i=0; i < elem.length; i++)
		{
			elem[i].style.color="rgb(" + FadePas + "," + FadePas + "," + FadePas + ")";
		}
	}
	FadeInterval = setTimeout( 'fade_ontimer()', FadeInt );
}
/** Funtion Fade-in fade-out test - END **/

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
/** Funtion Get element by class - END **/

/**
* Funtion download ed2k tag - START
**/
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
/** Funtion download ed2k tag - END **/

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
/** Funtion copy to clipboard - END **/

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
/** target compatibility for XHTML 1.0 Strict! - END **/

/**
* Toggle the view of an element - START
* param : (string) ElementId : the id of the object to Hide or Display
**/
function Toggle_Element_View( ElementId )
{
	if ( ElementId.style.display !='' )
	{
		ElementId.style.display='';
	}
	else
	{
		ElementId.style.display='none';
	}
}
/** Toggle view - End **/
// ]]>