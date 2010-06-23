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
* Developed by Robert Nyman, http://www.robertnyman.com
* Code/licensing: http://code.google.com/p/getelementsbyclassname/
* http://www.anieto2k.com/2008/07/04/getelementsbyclassname-version-2008/
**/
var getElementsByClassName = function (className, tag, elm){
	if (document.getElementsByClassName) {
		getElementsByClassName = function (className, tag, elm) {
			elm = elm || document;
			var elements = elm.getElementsByClassName(className),
				nodeName = (tag)? new RegExp("\\b" + tag + "\\b", "i") : null,
				returnElements = [],
				current;
			for(var i=0, il=elements.length; i<il; i+=1){
				current = elements[i];
				if(!nodeName || nodeName.test(current.nodeName)) {
					returnElements.push(current);
				}
			}
			return returnElements;
		};
	}
	else if (document.evaluate) {
		getElementsByClassName = function (className, tag, elm) {
			tag = tag || "*";
			elm = elm || document;
			var classes = className.split(" "),
				classesToCheck = "",
				xhtmlNamespace = "http://www.w3.org/1999/xhtml",
				namespaceResolver = (document.documentElement.namespaceURI === xhtmlNamespace)? xhtmlNamespace : null,
				returnElements = [],
				elements,
				node;
			for(var j=0, jl=classes.length; j<jl; j+=1){
				classesToCheck += "[contains(concat(' ', @class, ' '), ' " + classes[j] + " ')]";
			}
			try	{
				elements = document.evaluate(".//" + tag + classesToCheck, elm, namespaceResolver, 0, null);
			}
			catch (e) {
				elements = document.evaluate(".//" + tag + classesToCheck, elm, null, 0, null);
			}
			while ((node = elements.iterateNext())) {
				returnElements.push(node);
			}
			return returnElements;
		};
	}
	else {
		getElementsByClassName = function (className, tag, elm) {
			tag = tag || "*";
			elm = elm || document;
			var classes = className.split(" "),
				classesToCheck = [],
				elements = (tag === "*" && elm.all)? elm.all : elm.getElementsByTagName(tag),
				current,
				returnElements = [],
				match;
			for(var k=0, kl=classes.length; k<kl; k+=1){
				classesToCheck.push(new RegExp("(^|\\s)" + classes[k] + "(\\s|$)"));
			}
			for(var l=0, ll=elements.length; l<ll; l+=1){
				current = elements[l];
				match = false;
				for(var m=0, ml=classesToCheck.length; m<ml; m+=1){
					match = classesToCheck[m].test(current.className);
					if (!match) {
						break;
					}
				}
				if (match) {
					returnElements.push(current);
				}
			}
			return returnElements;
		};
	}
	return getElementsByClassName(className, tag, elm);
};

/**
* My Special function Get element by class - START
**/
function MyGetElementsByClassName(classname)
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
* Funtion toggle spoiler - START
**/
function abbc3_spoiler( id1, id2, hide_text, show_text )
{
	abbc3_toggle( id2 );

	if ( document.getElementById(id2).style.display == 'block' )
	{
		document.getElementById(id1).value = hide_text;
	}
	else
	{
		document.getElementById(id1).value = show_text;
	}
}
/** Funtion toggle spoiler - END **/

/**
* Funtion toggle an element visibility - START
**/
function abbc3_toggle( id )
{
	if (document.getElementById(id))
	{
		if (document.getElementById(id).style.display == 'block')
		{
			document.getElementById(id).style.display = 'none';
		}
		else
		{
			document.getElementById(id).style.display = 'block';
		}
	}
}

/**
* Funtion download ed2k tag - START
**/
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

// ]]>