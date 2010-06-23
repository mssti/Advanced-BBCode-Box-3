<?php
/**
*
* @package phpBB3
* @version $Id: abbcode.php,v 1.0.7 2008/02/20 14:10:18 leviatan21 Exp $
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @todo ACP config for ABBC3 ?
* @todo data base table = define('ABBCODES_TABLE', $table_prefix . 'abbcodes'); ?
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Advanced BBCode Box 3 class
* @package phpBB3
*/

class abbcode3
{
	var $abbcode_ary = array();
	var $abbcode_config = array();
	var $abbcode_custom_ary = array();
	var $abbcode_message = '';
	var $abbc3_unique_id;
	var $abbc3_thumb_width;

	/**
	* Some settings untill I made an ACP control for Advanced bbcode
	*
	* @return template vars
	**/
	function abbcode3_init()
	{
		global $user,$phpbb_root_path, $phpEx ;

		$user->add_lang('mods/abbcode');

		// Other seting
		$this->abbc3_unique_id = substr(base_convert(unique_id(), 16, 36), 0, 8);
		$this->abbc3_thumb_width = 100 . 'px';	// Size of thumbnails image

		/**
		* Display options - Part 1 of 2
		**/
		$this->abbcode_config = array(
			'ABBC3_MOD'			=> true,	// Display ABBC3 ?
			'ABBC3_CUSTOM'		=> true,	// Display custom bbcodes icons ?
			'ABBC3_LITEBOX'		=> true,	// Display thumbnails with litebox ?
			'ABBC3_TAB'			=> true,	// Display icon division for tags ?
			'ABBC3_HELP_PAGE'	=> append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", 'mode=help'),		// Link to ABBC3 help page
			'ABBC3_ATTACH_PAGE'	=> append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", 'mode=upload'),	// Link to ABBC3 attachment page
			'ABCC3_BG'			=> 'bg_abbc3.gif',	// Bakground image. 
			// bg_abbc3.gif          / bg_abbc3red.gif     / bg_abbc3orange.gif   / bg_abbc3yellow.gif / bg_abbc3green.gif / 
			// bg_abbc3celestial.gif / bg_abbc3blue.gif    / bg_abbc3violet.gif   / bg_abbc3pink.gif   / bg_none.gif
			// bg_subsilver1.gif     / bg_subsilver2.gif   / bg_subsilver3.gif
			// bg_prosilver1.gif     / bg_prosilver2.gif   / bg_prosilver3.gif   / bg_prosilver4.gif   / bg_prosilver5.gif
			// bg_acidtechred1.gif   / bg_acidtechred2.gif
			// bg_avalon1.gif        / bg_avalon2.gif
			// bg_bo2Soft1.gif       / bg_bo2Soft2.gif     / bg_bo2Soft3.gif
			// bg_etechgray1.gif     / bg_etechgray2.gif   / bg_etechgray3.gif   / bg_etechgray4.gif
		);

		/**
		* Display ABBC3 ?
		**/
		if ( $this->abbcode_config['ABBC3_MOD'] )
		{
			/**
			* Patterns and replacements for processing - Part 1 of 3
			**/
			$this->abbcode_ary = array(
				// [font=fonttype]text[/font] code..
				'ABBC3_FONTTYPE'	=> array( 'id' => 0		,'display' => true	,'image' => ''				,'found' => "#\[font=(.*?)\](.*?)\[/font\]#si"	,'regexp' => "<span style='font-family:$1'>$2</span>"),
				
				// [size=xxx]text[/size] code..
				'ABBC3_FONTSIZE'	=> array( 'id' => 1		,'display' => true	,'image' => ''				,'found' => ""	,'regexp' => ""),
				
				// [highlight=color]text[/highlight] code..
				'ABBC3_FONTHILI'	=> array( 'id' => 2		,'display' => true	,'image' => ''				,'found' => "#\[highlight=(\#[0-9A-F]{6}|[a-z\-]+)\](.*?)\[/highlight\]#si"	,'regexp' => "<span style='background-color: $1;'>$2</span>"),

				// [color=#xxxxxx]text[/color] code..
				'ABBC3_FONTCOLOR'	=> array( 'id' => 3		,'display' => true	,'image' => ''				,'found' => ""	,'regexp' => ''),
				
				// [CODE] and [/CODE] for posting code (HTML, PHP, C etc etc) in your posts.
				'ABBC3_CODE'		=> array( 'id' => 4		,'display' => true	,'image' => 'code.gif'		,'found' => ""	,'regexp' => ""),
				
				// [QUOTE] and [/QUOTE] for posting replies with quote, or just for quoting stuff.
				'ABBC3_QUOTE'		=> array( 'id' => 5		,'display' => true	,'image' => 'quote.gif'		,'found' => ""	,'regexp' => ""),
				
				// Break line and continue down ?
				'ABBC3_DIVISION1'	=> array( 'id' => 6		,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ""),
				
				// [align=(justify/right/center/left)]text[/align] code..
				'ABBC3_JUSTIFY'		=> array( 'id' => 6		,'display' => true	,'image' => 'justify.gif'	,'found' => "#\[align=justify\](.*?)\[/align\]#si"	,'regexp' => "<div style='text-align:justify'>$1</div>",),
				'ABBC3_RIGHT'		=> array( 'id' => 7		,'display' => true	,'image' => 'right.gif'		,'found' => "#\[align=right\](.*?)\[/align\]#si"	,'regexp' => "<div style='text-align:right'>$1</div>",),
				'ABBC3_CENTER'		=> array( 'id' => 8		,'display' => true	,'image' => 'center.gif'	,'found' => "#\[align=center\](.*?)\[/align\]#si"	,'regexp' => "<div style='text-align:center'>$1</div>",),
				'ABBC3_LEFT'		=> array( 'id' => 9		,'display' => true	,'image' => 'left.gif'		,'found' => "#\[align=left\](.*?)\[/align\]#si"		,'regexp' => "<div style='text-align:left'>$1</div>",),
				
				// [pre]text[/pre] code..
				'ABBC3_PRE'			=> array( 'id' => 10	,'display' => true	,'image' => 'preformat.gif'	,'found' => "#\[pre\](.*?)\[/pre\]#si"	,'regexp' => "<pre>$1</pre>"),
				
				// Display icon division for tags ?
				'ABBC3_DIVISION2'	=> array( 'id' => 11	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ""),
				
				// [sup]Superscript[/sup] code..
				'ABBC3_SUP'			=> array( 'id' => 11	,'display' => true	,'image' => 'sup.gif'		,'found' => "#\[sup\](.*?)\[/sup\]#si"	,'regexp' => "<sup>$1</sup>"),
				
				// [sub]Subscrip[/sub] code..
				'ABBC3_SUB'			=> array( 'id' => 12	,'display' => true	,'image' => 'sub.gif'		,'found' => "#\[sub\](.*?)\[/sub\]#si"	,'regexp' => "<sub>$1</sub>"),
				
				// [b]text[/b] code..
				'ABBC3_BOLD'		=> array( 'id' => 13	,'display' => true	,'image' => 'bold.gif'		,'found' => ""	,'regexp' => ""),
				
				// [i]text[/i] code..
				'ABBC3_ITALIC'		=> array( 'id' => 14	,'display' => true	,'image' => 'italic.gif'	,'found' => ""	,'regexp' => ""),
				
				// [u]text[/u] code..
				'ABBC3_UNDERLINE'	=> array( 'id' => 15	,'display' => true	,'image' => 'under.gif'		,'found' => ""	,'regexp' => ""),
				
				// [s]Strikethrough[/s] code..
				'ABBC3_STRIKE'		=> array( 'id' => 16	,'display' => true	,'image' => 'strike.gif'	,'found' => "#\[s\](.*?)\[/s\]#si"	,'regexp' => "<strike>$1</strike>"),
				
				// Display icon division for tags ?
				'ABBC3_DIVISION3'	=> array( 'id' => 17	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ""),
				
				// [fade]Faded Text[/fade] code..
				'ABBC3_FADE'		=> array( 'id' => 17	,'display' => true	,'image' => 'fade.gif'		,'found' => "#\[fade\](.*?)\[/fade\]#si"	,'regexp' => "<span class='fade_link'>$1</span> <script type='text/javascript'>fade_ontimer();</script>"),
				
				// gradient text
				'ABBC3_GRAD'		=> array( 'id' => 18	,'display' => true	,'image' => 'grad.gif'		,'found' => ""	,'regexp' => ""),
			
				// Display icon division for tags ?
				'ABBC3_DIVISION4'	=> array( 'id' => 19	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ""),
				
				// [dir=(rtl|ltr)]Direction[/dir] code..
				'ABBC3_RTL'			=> array( 'id' => 19	,'display' => true	,'image' => 'rtl.gif'		,'found' => "#\[dir=rtl\](.*?)\[/dir\]#si"	,'regexp' => "<BDO dir='rtl'>$1</BDO>"),
				'ABBC3_LTR'			=> array( 'id' => 20	,'display' => true	,'image' => 'ltr.gif'		,'found' => "#\[dir=ltr\](.*?)\[/dir\]#si"	,'regexp' => "<BDO dir='ltr'>$1</BDO>"),
				
				// Display icon division for tags ?
				'ABBC3_DIVISION5'	=> array( 'id' => 21	,'display' => true	,'image' => 'spacer.gif'	,'found' => "", 'regexp' => ''),
				
				// [marquee=(left/right/up/down)]Marquee Code[/marquee] code..
				'ABBC3_MARQD'		=> array( 'id' => 21	,'display' => true	,'image' => 'marqd.gif'		,'found' => "#\[marq=down\](.*?)\[/marq\]#si"	,'regexp' => "<marquee direction='down' scrolldelay='120'>$1</marquee>"),
				'ABBC3_MARQU'		=> array( 'id' => 22	,'display' => true	,'image' => 'marqu.gif'		,'found' => "#\[marq=up\](.*?)\[/marq\]#si"		,'regexp' => "<marquee direction='up' scrolldelay='120'>$1</marquee>"),
				'ABBC3_MARQR'		=> array( 'id' => 23	,'display' => true	,'image' => 'marqr.gif'		,'found' => "#\[marq=right\](.*?)\[/marq\]#si"	,'regexp' => "<marquee direction='right' scrolldelay='120'>$1</marquee>"),
				'ABBC3_MARQL'		=> array( 'id' => 24	,'display' => true	,'image' => 'marql.gif'		,'found' => "#\[marq=left\](.*?)\[/marq\]#si"	,'regexp' => "<marquee direction='left' scrolldelay='120'>$1</marquee>"),
				
				// Display icon division for tags ?
				'ABBC3_DIVISION6'	=> array( 'id' => 25	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ""),
				
				// [table=(ccs style)][tr=(ccs style)][td=(ccs style)]text[/td][/tr][/table] code..
				'ABBC3_TABLE'		=> array( 'id' => 25	,'display' => true	,'image' => 'table.gif'		,'found' => "#\[table=(.*?)\](.*?)\[\/table\]#ise"	,'regexp' => "\$this->table_pass('\$1', '\$2')"),
				
				// Display icon for simple upload files ?
				'ABBC3_ATTACH'		=> array( 'id' => 26	,'display' => false	,'image' => 'upload.gif'	,'found' => ""	,'regexp' => ''),
				
				// Break line and continue down ?
				'ABBC3_BREAK1'		=> array( 'id' => 27	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ""),
				
				// [spoil]Spoiler[/spoil] code..
				'ABBC3_SPOIL'		=> array( 'id' => 27	,'display' => true	,'image' => 'spoil.gif'		,'found' => "#\[spoil\](.*?)\[/spoil\]#si"	,'regexp' => '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="' . $user->lang['SPOILER_SHOW'] . '" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'' . $user->lang['SPOILER_HIDE'] . '\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'' . $user->lang['SPOILER_SHOW'] .'\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">$1</div></div></div>'),
				
				// Display icon division for tags ?
				'ABBC3_DIVISION7'	=> array( 'id' => 28	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ''),
				
				// [url]www.phpbb.com[/url] code.. (no xxxx:// prefix).
				// [url=xxxx://www.phpbb.com]phpBB[/url] code..
				// [url=www.phpbb.com]phpBB[/url] code.. (no xxxx:// prefix).
				'ABBC3_URL'			=> array( 'id' => 29	,'display' => true	,'image' => 'url.gif'		,'found' => ""	,'regexp' => ''),
				
				// [email]user@domain.tld[/email] code..
				// [email=user@domain.tld]user[/email] code..
				'ABBC3_EMAIL'		=> array( 'id' => 30	,'display' => true	,'image' => 'email.gif'		,'found' => ""	,'regexp' => ''),
				
				// [url]ed2k://|file|...[/url] code
				// [url=ed2k://|file|...]name[/url] code
				// [url]ed2k://|server|ip|port|/[/url] code
				// [url=ed2k://|server|ip|port|/]name[/url] code
				// [url]ed2k://|friend|name|ip|port|/[/url] code
				// [url=ed2k://|friend|name|ip|port|/]name[/url] code
				'ABBC3_ED2K'		=> array( 'id' => 31	,'display' => true	,'image' => 'emule.gif'		,'found' => '#\[url(=(.*))?\](.*)\[/url\]#iUe' ,'regexp' => "\$this->ed2k_pass('\$0', '\$2', '\$3')"),
				
				// [web]Web Iframe URL[/web] code..
				'ABBC3_WEB'			=> array( 'id' => 32	,'display' => true	,'image' => 'web.gif'		,'found' => "#\[web width=([0-9]?[0-9]?[0-9]?[(%|\w+)]) height=([0-9]?[0-9]?[0-9]?[(%|\w+)])\](http(s)?://)?(.*?)\[/web\]#si"	,'regexp' => '<iframe width="$1" height="$2" src="http$4://$5" style="font-size: 2px;"></iframe><br/>'),
				
				// [img]image_url_here[/img] code..
			//	'ABBC3_IMG'			=> array( 'id' => 33	,'display' => true	,'image' => 'img.gif'		,'found' => "#\[img(=(left|center|right))?\](.*?)\[\/img\]#sie" ,'regexp' => "\$this->img_pass('\$2', '\$3')"),
				'ABBC3_IMG'			=> array( 'id' => 33	,'display' => true	,'image' => 'img.gif'		,'found' => "#\[img(=(left|center|right))?\](.*?)\[\/img\]#si"  ,'regexp' => "<div align='$2'><img src='$3' /></div>"),
				
				// [thumbnail=(left|right)]image URL[/thumbnail] code..
				'ABBC3_THUMB'		=> array( 'id' => 34	,'display' => true	,'image' => 'thumb.gif'		,'found' => "#\[thumbnail(=(left|right))?\](.*?)\[\/thumbnail\]#si"	,'regexp' => "<a href='$3' rel='lightbox[]' alt='$3' title='' class='hoverbox'><img src='$3' border='0' width='" . $this->abbc3_thumb_width . "' align='$2'/></a>"),
				
				// upload pics with ImageShack ?
				'ABBC3_IMGSHACK'	=> array( 'id' => 35	,'display' => true	,'image' => 'imgshack.gif'	,'found' => ""	,'regexp' => ''),
				
				// Display icon division for tags ?
				'ABBC3_DIVISION8'	=> array( 'id' => 36	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ''),
				
				// [flash width=X height=X]Flash URL[/flash] code..
				'ABBC3_FLASH'		=> array( 'id' => 36	,'display' => true	,'image' => 'flash.gif'		,'found' => "#\[flash width=([0-9]?[0-9]?[0-9]) height=([0-49]?[0-9]?[0-9])\](.*?)\[/flash\]#si"	,'regexp' => '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="$1" height="$2"><param name="movie" value="$3" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="$3" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="$1" height="$2" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>'),
				
				// [video width=X height=X]file Video URL[/video] code..
				'ABBC3_VIDEO'		=> array( 'id' => 37	,'display' => true	,'image' => 'video.gif'		,'found' => "#\[video width=([0-9]?[0-9]?[0-9]) height=([0-9]?[0-9]?[0-9])\](.*?)\[/video\]#si"	,'regexp' => '<object width="$1" height="$2" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_' . $this->abbc3_unique_id . '"><param name="url" value="$3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$3" /><!--[if !IE]>--><object width="$1" height="$2" type="video/x-ms-wmv" data="$3"><param name="src" value="$3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>'),
			#	// [video]file Video URL[/video] code..
			#	'ABBC3_VIDEO'		=> array( 'id' => 37	,'display' => true	,'image' => 'video.gif'		,'found' => "#\[video\](.*?)\[/video\]#si"	,'regexp' => '<object id="MediaPlayer' . $this->abbc3_unique_id . '" width=320 height=286 classid="CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95" standby="Loading Windows Media Player components..." type="application/x-oleobject" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112"><param name="filename" value="$1"><param name="Showcontrols" value="True"><param name="autoStart" value="True"><embed type="application/x-mplayer10" src="$1" name="MediaPlayer" width=320 height=240></embed></object>'),
				
				// [stream]file Sound URL[/stream] code..
				'ABBC3_STREAM'		=> array( 'id' => 38	,'display' => true	,'image' => 'sound.gif'		,'found' => "#\[stream\](.*?)\[/stream\]#si"	,'regexp' => '<object width="320" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_' . $this->abbc3_unique_id . '"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="320" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>'),
				
				// [quicktime width=X height=X]file Quicktime URL[/quicktime] code..
				'ABBC3_QUICKTIME'	=> array( 'id' => 39	,'display' => true	,'image' => 'quicktime.gif'	,'found' => "#\[quicktime width=([0-9]?[0-9]?[0-9]) height=([0-9]?[0-9]?[0-9])\](.*?)\[/quicktime\]#si"	,'regexp' => '<object id="qtstream_' . $this->abbc3_unique_id . '" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="$1" height="$2"><param name="src" value="$3" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_' . $this->abbc3_unique_id . '" src="$3" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="$1" height="$2" type="video/quicktime" autoplay="false"></embed></object>'),
				
				// [ram]file Ram URL[/ram] code..
				'ABBC3_RAM'			=> array( 'id' => 40	,'display' => true	,'image' => 'ram.gif'		,'found' => "#\[ram width=([0-9]?[0-9]?[0-9]) height=([0-9]?[0-9]?[0-9])\](.*?)\[/ram\]#si"	,'regexp' => '<object id="rmstream_' . $this->abbc3_unique_id . '" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="$1" height="$2"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_' . $this->abbc3_unique_id . '" /><param name="prefetch" value="false" /><embed name="rmstream_' . $this->abbc3_unique_id . '" type="audio/x-pn-realaudio-plugin" src="$3" width="$1" height="$2" autostart="false" controls="ImageWindow" console="ctrls_' . $this->abbc3_unique_id . '" prefetch="false"></embed></object><br /><object id="ctrls_' . $this->abbc3_unique_id . '" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="$1" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_' . $this->abbc3_unique_id . '" type="audio/x-pn-realaudio-plugin" width="$1" height="36" controls="ControlPanel" console="ctrls_' . $this->abbc3_unique_id . '"></embed></object>'),
				
				// [stage6 width=X height=X]Video ID[/stage6] code..
				'ABBC3_STAGE6'		=> array( 'id' => 41	,'display' => true	,'image' => 'stage6.gif'	,'found' => "#\[stage6 width=([0-9]?[0-9]?[0-9]) height=([0-9]?[0-9]?[0-9])\](.*?)\[/stage6\]#si" ,'regexp' => '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="$1" height="$2" ><param name="src" value="http://video.stage6.com/$3/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/$3/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="$1" height="$2" /></object><br />'),
				
				// [Gvideo]video.google URL[/Gvideo] code..
				'ABBC3_GVIDEO'		=> array( 'id' => 42	,'display' => true	,'image' => 'googlevid.gif'	,'found' => "#\[Gvideo\]http://video.google.(.*?)/videoplay\?docid=(.*?)\[/Gvideo\]#si"	,'regexp' => '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="425" height="350"><param name="movie" value="http://video.google.$1/googleplayer.swf?docid=$2" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.$1/googleplayer.swf?docid=$2" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="425" height="350" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>'),
				
				// [youtube]YouTube URL[/youtube] code..
				'ABBC3_YOUTUBE'		=> array( 'id' => 43	,'display' => true	,'image' => 'youtube.gif'	,'found' => "#\[youtube\]http://((.*?)?)youtube.com/watch\?v=([0-9A-Za-z-_]{11})[^[]*\[/youtube\]#is", 'regexp' => '<object width="425" height="350"><param name="movie" value="http://$2youtube.com/v/$3" /><param name="wmode" value="transparent" /><embed src="http://$2youtube.com/v/$3" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>'),
				
				// MOD : add-on Veoh bbcode - START (http://www.phpbb.com/community/viewtopic.php?p=3929705#p3929705)
				// [veoh]Veoh URL[/veoh] code..
				'ABBC3_VEOH'		=> array( 'id' => 44	,'display' => true	,'image' => 'veoh.gif'		,'found' => "#\[veoh\]http://(.*?).veoh.com/videos/(.*?)\[/veoh\]#si" ,'regexp' => '<embed src="http://\\1.veoh.com/videodetails2.swf?permalinkId=\\2&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="540" height="438" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>'),
				// MOD : add-on Veoh bbcode - END
				
				// Display icon division for tags ?
				'ABBC3_DIVISION9'	=> array( 'id' => 45	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ''),
				
				// [list][*]text[/list] code..
				'ABBC3_LISTB'		=> array( 'id' => 45	,'display' => true	,'image' => 'listb.gif'		,'found' => ""	,'regexp' => ''),
				
				// [list=(a|1)][*]text[/list] code..
				'ABBC3_LISTO'		=> array( 'id' => 46	,'display' => true	,'image' => 'listo.gif'		,'found' => ""	,'regexp' => ''),
				
				// [hr]
				'ABBC3_HR'			=> array( 'id' => 47	,'display' => true	,'image' => 'hr.gif'		,'found' => "#\[hr\]#si" ,'regexp' => '<hr noshade color="#000000" size="1px">'),
				
				// Display icon division for tags ?
				'ABBC3_DIVISION10'	=> array( 'id' => 48	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ''),
				
				// Display icon for cut selected text ?
				'ABBC3_CUT'			=> array( 'id' => 48	,'display' => true	,'image' => 'cut.gif'		,'found' => ""	,'regexp' => ''),
				
				// Display icon for copy selected text ?
				'ABBC3_COPY'		=> array( 'id' => 49	,'display' => true	,'image' => 'copy.gif'		,'found' => ""	,'regexp' => ''),
				
				// Display icon for paste previous copy text ?
				'ABBC3_PASTE'		=> array( 'id' => 50	,'display' => true	,'image' => 'paste.gif'		,'found' => ""	,'regexp' => ''),
				
				// Display icon for delete all bbcodes from selected text ?
				'ABBC3_PLAIN'		=> array( 'id' => 51	,'display' => true	,'image' => 'plain.gif'		,'found' => ""	,'regexp' => ''),
				
				// Display icon division for tags ?
				'ABBC3_DIVISION11'	=> array( 'id' => 52	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ''),
				
				// Special custom BBcodes
				
			);
		}
		
		/**
		* Display CUSTOM ABBC3 ?
		**/
		if ( $this->abbcode_config['ABBC3_CUSTOM'] )
		{
			/**
			* Custom bbcodes : Patterns and replacements for processing - Part 1 of 3
			**/
			$this->abbcode_custom_ary = array(
				
				// MOD : add-on hide bbcode - START
				// [hide]text[/hide] Code..
				'ABBC3_HIDE'		=> array( 'id' => 0		,'display' => false	,'image' => 'hide.gif'		,'open' => '[hide]'			,'close' => '[/hide]'			,'found' => ""													,'regexp' => ''),
				// MOD : add-on hide bbcode - END
				
				// MOD : add-on Moderator bbcode - START
				// [mod=]text[/mod] Code..
				'ABBC3_MODERATOR'	=> array( 'id' => 1		,'display' => false	,'image' => 'moderator.gif'	,'open' => '[mod=]'			,'close' => '[/mod]'			,'found' => "#\[mod=(.*?)\](.*?)\[/mod\]#si"					,'regexp' => '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>$1:</b></span></td></tr><tr><td>$2</td></tr></table>'),
				// MOD : add-on Moderator bbcode - END
				
				// MOD : add-on offtopic bbcode - START
				// [offtopic]text[/offtopic] Code..
				'ABBC3_OFFTOPIC'	=> array( 'id' => 2		,'display' => false	,'image' => 'offtopic.gif'	,'open' => '[offtopic]'		,'close' => '[/offtopic]'		,'found' => "#\[offtopic\](.*?)\[/offtopic\]#si"				,'regexp' => '<i><b><font color="#114499">' . $user->lang['ABBC3_OFFTOPIC'] . ': </font></b><br/><font color="#2277DD">$1</font></i>'),
				// MOD : add-on offtopic bbcode - END
				
				// Display icon division for tags ?
				'ABBC3_DIVISION1'	=> array( 'id' => 3		,'display' => false	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ''),
				
				// MOD : add-on Dailymotion bbcode - START
				// [dm]Video ID[/dm] code..
				'ABBC3_DMOTION'		=> array( 'id' => 3		,'display' => false	,'image' => 'dailymotion.gif','open' => '[dm]'			,'close' => '[/dm]'				,'found' => "#\[dm\](.*?)\[/dm\]#si"							,'regexp' => '<object width="420" height="352"><param name="movie" value="http://www.dailymotion.com/swf/$1" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/$1" type="application/x-shockwave-flash" width="420" height="352" allowFullScreen="true" allowScriptAccess="never"></embed></object>'),
				// MOD : add-on Dailymotion bbcode - END
				
				// MOD : add-on Bebo bbcode - START
			//	'ABBC3_BEBO'		=> array( 'id' => 4		,'display' => false	,'image' => 'spacer.gif'	,'open' => '[Bebo]'			,'close' => '[/Bebo]'			,'found' => "#\[Bebo\](.*?)\[/Bebo\]#si"						,'regexp' => '<embed width="425" height="350" src="http://static.videoegg.com/videoegg/loader.swf" FlashVars="$1" quality="high" allowScriptAccess="never" bgcolor="#FFFFFF" scale="noscale"wmode="window" name="VE_Player" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /><br>'),
				// MOD : add-on Bebo bbcode - END
				
				// MOD : add-on Gamespot bbcode - START
					// [gamespot] Gamespot video URL [/gamespot] Code..
				'ABBC3_GAMESPOT'	=> array( 'id' => 5		,'display' => false	,'image' => 'gamespot.gif'	,'open' => '[gamespot]'		,'close' => '[/gamespot]'		,'found' => "#\[gamespot\]http://www.gamespot.com/video/(.*?)/(.*?)\[/gamespot\]#si"			,'regexp' => '<embed id="mymovie" width="432" height="355" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D$2%26pid%3D$1%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>'),
				// MOD : add-on Gamespot bbcode - END
				
				// MOD : add-on Gametrailers bbcode - START
				// [gametrailers]Gametrailers video URL[/gametrailers] Code..
				'ABBC3_GAMETRAILERS'=> array( 'id' => 6		,'display' => false	,'image' => 'gametrailers.gif'	,'open' => '[gametrailers]'	,'close' => '[/gametrailers]'	,'found' => "#\[gametrailers\]http://www.gametrailers.com/player/(.*?).html\[/gametrailers\]#si",'regexp' => '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="480" height="392"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=$1" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=$1" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="480" height="392"></embed></object>'),
				// MOD : add-on Gamespot bbcode - END
				// MOD : add-on IGN video bbcode - START
				
				// [ignvideo]ING video URL [/ignvideo] Code..
				'ABBC3_IGNVIDEO'	=> array( 'id' => 7		,'display' => false	,'image' => 'ign.gif'		,'open' => '[ignvideo]'		,'close' => '[/ignvideo]'		,'found' => "#\[ignvideo\](.*?)\[/ignvideo\]#si"				,'regexp' => '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="$1" type="application/x-shockwave-flash" width="433" height="360" ></embed>'),
				// MOD : add-on IGN video bbcode - END
				
				// MOD : add-on Putfile bbcode - START
			//	'ABBC3_PUTFILE'		=> array( 'id' => 8		,'display' => false	,'image' => 'spacer.gif'	,'open' => '[Putfile]'		,'close' => '[/Putfile]'		,'found' => "#\[Putfile\]http://media.putfile.com/(.*?)\?pos=(.*?)\[/Putfile\]#si"				,'regexp' => '<object type="application/x-shockwave-flash" data="http://feat.putfile.com/flow/putfile.swf?videoFile=$1" height="349" width="420" align="middle"><param name="movie" value="http://feat.putfile.com/flow/putfile.swf?videoFile=$1" /><param name="quality" value="high" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://feat.putfile.com/flow/putfile.swf?videoFile=$1" allowFullScreen="true" allowScriptAccess="always" height="349" width="420"></embed></object>'),
				// MOD : add-on Putfile bbcode - END
				
				// MOD : add-on liveleak bbcode - START
				// [liveleak]Liveleak video URL [/liveleak] Code..
				'ABBC3_LIVELEAK'	=> array( 'id' => 9		,'display' => false	,'image' => 'liveleak.gif'	,'open' => '[liveleak]'		,'close' => '[/liveleak]'		,'found' => "#\[liveleak\]http://www.liveleak.com/view\?i=(.*?)\[/liveleak\]#si"				,'regexp' => '<object type="application/x-shockwave-flash" width="450" height="370" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=$1"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>'),
				// MOD : add-on liveleak bbcode - End
				
				// MOD : add-on NFO bbcode - START
				'ABBC3_NFO'			=> array( 'id' => 10	,'display' => false	,'image' => 'nfo.gif'		,'open' => '[nfo]'			,'close' => '[/nfo]'			,'found' => "#\[nfo\](.*?)\[/nfo\]#sie"							,'regexp' => "\$this->nfo_pass('\$1')"),
				// MOD : add-on NFO bbcode - End
				
				// Display icon division for tags ?
				'ABBC3_DIVISION2'	=> array( 'id' => 11	,'display' => false	,'image' => 'spacer.gif'	,'found' => ""	,'regexp' => ''),
				
				// MOD : add-on glow bbcode - START // http://www.htmlbasix.com/fontfilters.shtml
				// [glow=color]Text[/glow] Code..
				'ABBC3_GLOW'		=> array( 'id' => 11	,'display' => false	,'image' => 'glow.gif'		,'open' => '[glow=red]'			,'close' => '[/glow]'			,'found' => "#\[glow=(.*?)\](.*?)\[/glow\]#si"				,'regexp' => '<div style="filter:Glow(color=$1,strength=4);color:#ffffff;height:110%">$2</div>'),
				// MOD : add-on glow bbcode - END
				
				// MOD : add-on shadow bbcode - START
				// [shadow=color]Text[/shadow] Code..
				'ABBC3_SHADOW'		=> array( 'id' => 12	,'display' => false	,'image' => 'shadow.gif'	,'open' => '[shadow=blue]'		,'close' => '[/shadow]'			,'found' => "#\[shadow=(.*?)\](.*?)\[/shadow\]#si"			,'regexp' => '<div style="filter:shadow(color=black,strength=4);color:$1;height:110%">$2</div>'),
				// MOD : add-on shadow bbcode - End
				
				// MOD : add-on dropshadow bbcode - START
				// [dropshadow=color]Text[/dropshadow] Code..
				'ABBC3_DROPSHADOW'	=> array( 'id' => 13	,'display' => false	,'image' => 'dropshadow.gif','open' => '[dropshadow=blue]'	,'close' => '[/dropshadow]'		,'found' => "#\[dropshadow=(.*?)\](.*?)\[/dropshadow\]#si"	,'regexp' => '<div style="filter:dropshadow(color=#999999,strength=4);color:$1;height:110%">$2</div>'),
				// MOD : add-on dropshadow bbcode - End
				
				// MOD : add-on Blur bbcode - START
				// [blur=color]Text[/blur] Code..
				'ABBC3_BLUR'		=> array( 'id' => 14	,'display' => false	,'image' => 'blur.gif'		,'open' => '[blur=blue]'		,'close' => '[/blur]'			,'found' => "#\[blur=(.*?)\](.*?)\[/blur\]#si"				,'regexp' => '<div style="filter:Blur(strength=7);color:$1;height:110%">$2</div>'),
				// MOD : add-on Blur bbcode - End
				
				// MOD : add-on Wave bbcode - START
				// [wave=color]text[/wave] Code..
				'ABBC3_WAVE'		=> array( 'id' => 15	,'display' => false	,'image' => 'wave.gif'		,'open' => '[wave=blue]'		,'close' => '[/wave]'			,'found' => "#\[wave=(.*?)\](.*?)\[/wave\]#si"				,'regexp' => '<div style="filter:Wave(strength=2);color:$1;height:110%">$2</div>'),
				// MOD : add-on Wave bbcode - End
				
				// MOD : add-on Search bbcode - START
				// [search=(msn|yahoo|google))]text[/search] Code..
				'ABBC3_SEARCH'		=> array( 'id' => 16	,'display' => false	,'image' => 'search.gif'	,'open' => '[search]'			,'close' => '[/search]'			,'found' => "#\[search(=(.*?))?\](.*?)\[/search\]#sie"		,'regexp' => "\$this->search_pass('\$1', '\$2', '\$3')"),
				// MOD : add-on Search bbcode - End
				
				// Other custom BBcodes
				
			);
		}
	}

	/**
	* Display the mod and/or buttons
	*
	* @return template vars
	**/
	function display_abbc3()
	{

		global $template, $user;
		
		$user->add_lang('mods/abbcode');
		
		/**
		* Display options - Part 2 of 2
		**/
		foreach ( $this->abbcode_config as $abbcode_template => $abbcode_value )
		{
			if ($abbcode_value)
			{
				$template->assign_vars(array(
				 'S_' . $abbcode_template => $abbcode_value,
				));
			}
		}
		
		/**
		* Display ABBC3 ?
		**/
		if ( $this->abbcode_config['ABBC3_MOD'] )
		{
			/**
			* Patterns and replacements for processing - Part 2 of 3
			**/
			foreach ( $this->abbcode_ary as $abbcode_name => $abbcode_data )
			{
				if ( $abbcode_data['display'] ) // true ?
				{
					if ( $abbcode_data['image'] ) // has image ?
					{
						if ( substr($abbcode_name,0,11)=='ABBC3_BREAK' || substr($abbcode_name,0,14)=='ABBC3_DIVISION' ) // is a breck line or division ?
						{
							$template->assign_block_vars('abbc3_tags.break', array(
								'S_ABBC3_BREAK'		=> (substr($abbcode_name,0,11)=='ABBC3_BREAK') ? true : false,
								'S_ABBC3_DIVISION'	=> (substr($abbcode_name,0,14)=='ABBC3_DIVISION') ? true : false,
							));
						}
						else
						{
							$template->assign_block_vars('abbc3_tags', array(
								'TAG_SRC'		=> $abbcode_data['image'],
								'TAG_NAME'		=> strtolower($abbcode_name),
								'TAG_MOVER'		=> $user->lang[$abbcode_name . '_MOVER'],
								'TAG_TIP'		=> $user->lang[$abbcode_name . '_TIP'],
							));
						}
					}
					else // no image
					{
						$template->assign_vars(array(
							'S_' . $abbcode_name	=> ($abbcode_data['display']) ? true : false,
							$abbcode_name . '_MOVER'=> $user->lang[$abbcode_name . '_MOVER'],
							$abbcode_name . '_TIP'	=> $user->lang[$abbcode_name . '_TIP'],
							$abbcode_name . '_NAME'	=> strtolower($abbcode_name),
						));
					}
				}
			}
		}
		
		/**
		* Display CUSTOM ABBC3 ?
		**/
		if ( $this->abbcode_config['ABBC3_CUSTOM'] )
		{
			/**
			* Custom bbcodes : Patterns and replacements for processing - Part 2 of 3
			**/
			foreach ( $this->abbcode_custom_ary as $abbcode_custom_name => $abbcode_custom_data )
			{
				if ( $abbcode_custom_data['display'] ) // true ?
				{
					if ( $abbcode_custom_data['image'] ) // has image ?
					{
						if ( substr($abbcode_custom_name,0,11)=='ABBC3_BREAK' || substr($abbcode_custom_name,0,14)=='ABBC3_DIVISION' ) // is a breck line or division ?
						{
							$template->assign_block_vars('abbc3_custom_tags.break', array(
								'S_ABBC3_BREAK'		=> (substr($abbcode_custom_name,0,11)=='ABBC3_BREAK') ? true : false,
								'S_ABBC3_DIVISION'	=> (substr($abbcode_custom_name,0,14)=='ABBC3_DIVISION') ? true : false,
							));
						}
						else
						{
							$template->assign_block_vars('abbc3_custom_tags', array(
								'TAG_SRC'		=> $abbcode_custom_data['image'],
								'TAG_NAME'		=> strtolower($abbcode_custom_name),
								'TAG_MOVER'		=> $user->lang[$abbcode_custom_name . '_MOVER'],
								'TAG_TIP'		=> $user->lang[$abbcode_custom_name . '_TIP'],
								'TAG_OPEN'		=> $abbcode_custom_data['open'],
								'TAG_CLOSE'		=> $abbcode_custom_data['close'],
							));
						}
					}
				}
			}
		}
	}

	/**
	* Parse ABBC3 bbodes
	*
	* @param $post_message = = post text
	* @return unknown
	*/
	function process_abbc3( $post_message )
	{
		global $template, $user;
		
		$user->add_lang('mods/abbcode');
		
		/************************************************************************************
		* Let´s phpbb3 take care of parsing this bbcodes
		*************************************************************************************
		* 
		* [size=xxx]text[/size] code..
		* [b]text[/b] code..
		* [i]text[/i] code..
		* [u]text[/u] code..
		* [QUOTE] and [/QUOTE] for posting replies with quote, or just for quoting stuff.
		* [CODE] and [/CODE] for posting code (HTML, PHP, C etc etc) in your posts.
		* [list][*]text[/list] code..
		* [list=(a|1)][*]text[/list] code..
		* [img]image_url_here[/img] code..
		* [url]www.phpbb.com[/url] code.. (no xxxx:// prefix).
		* [url=xxxx://www.phpbb.com]phpBB[/url] code..
		* [url=www.phpbb.com]phpBB[/url] code.. (no xxxx:// prefix).	
		* [email]user@domain.tld[/email] code..
		* [color]text[/color] code..
		*
		************************************************************************************/
		
		// pad it with a space so we can match things at the start of the 1st line.
		$this->abbcode_message = ' ' . $post_message;
		
		/**
		* Display ABBC3 ?
		**/
		if ( $this->abbcode_config['ABBC3_MOD'] )
		{
			/**
			* Patterns and replacements for URL processing - Part 3 of 3
			**/
			if ( sizeof( $this->abbcode_ary ) )
			{
				foreach ( $this->abbcode_ary as $abbcode_name => $abbcode_data )
				{
					if ( $abbcode_data['display'] )
					{
						if ( $abbcode_data['found'] != '' && $abbcode_data['regexp'] != '' )
						{
							if ( preg_match ( $abbcode_data['found'], $this->abbcode_message ) )
							{
								$this->abbcode_message = preg_replace( $abbcode_data['found'], $abbcode_data['regexp'], $this->abbcode_message );
							}
						}
					}
				}
			}
		}
		
		/**
		* Display CUSTOM ABBC3 ?
		**/
		if ( $this->abbcode_config['ABBC3_CUSTOM'] )
		{
			/**
			* Custom bbcodes : Patterns and replacements for URL processing - Part 3 of 3
			**/
			if ( sizeof($this->abbcode_custom_ary) )
			{
				foreach ( $this->abbcode_custom_ary as $abbcode_custom_name => $abbcode_custom_data )
				{
					if ( $abbcode_custom_data['display'] )
					{
						if ( $abbcode_custom_data['found'] != '' && $abbcode_custom_data['regexp'] != '' )
						{
							if ( preg_match ( $abbcode_custom_data['found'], $this->abbcode_message ) )
							{
								$this->abbcode_message = preg_replace ( $abbcode_custom_data['found'], $abbcode_custom_data['regexp'], $this->abbcode_message );
							}
						}
					}
				}
			}
		}
			
		return substr( $this->abbcode_message, 1 );	// Remove our padding from the string..
	}

	/**
	* Parsing the tables  - Second pass.
	*
	* @param $stx = table style
	* @param $in = post text between [table] & [/table]
	* @return table
	**/
	function table_pass( $stx, $in )
	{
		$in = str_replace(array ('<br />', "\n"), array ("\n", "\r"), $in);
		
		$table_ary = array(
		//	"#\[table=(.*?)\](.*?)\[/table\]#is"	=>	'<table style='$1' cellspacing='0' cellpadding='0'>$2</table>",
			"#\[tr=(.*?)\](.*?)\[/tr\]#is"			=>	"<tr style='$1'>$2</tr>",
			"#\[td=(.*?)\](.*?)\[/td\]#is"			=>	"<td style='$1'>$2</td>",
		);

		foreach ( $table_ary as $abbcode_found => $abbcode_replace )
		{
			if ( preg_match( $abbcode_found, $in ) )
			{
				$in = preg_replace( $abbcode_found, $abbcode_replace, $in );
			}
		}
		
		$message = "<table style='" . $stx ."' cellspacing='0' cellpadding='0'>" . $in ."</table>";
		
		return $message;
	}

	/**
	* Parsing the e-links  - Second pass.
	*
	* @param $message = post text
	* @param $stx = type of ed2k
	* @param $in = post text between [url] & [/url]
	* @return link
	**/
	function ed2k_pass( $message, $stx, $in )
	{
		if ( preg_match( '#ed2k://#si', $message ) )
		{
			// Code from 
			$ed2k_ary = array(
				// [url]ed2k://|file|...[/url] code
				"#\[url\](ed2k://\|file\|(.*?)\|\d+\|\w+\|(h=\w+\|)?/?)\[/url\]#is" 		=>	"<a href='$1' class='postlink'>$2</a>",

				// [url=ed2k://|file|...]name[/url] code
				"#\[url=(ed2k://\|file\|(.*?)\|\d+\|\w+\|(h=\w+\|)?/?)\](.*?)\[/url\]#si"	=>	"<a href='$1' class='postlink'>$4</a>",

				// [url]ed2k://|server|ip|port|/[/url] code
				"#\[url\](ed2k://\|server\|([\d\.]+?)\|(\d+?)\|/?)\[/url\]#si"				=>	"ed2k server: <a href='$1' class='postlink'>$2:$3</a>",

				// [url=ed2k://|server|ip|port|/]name[/url] code
				"#\[url=(ed2k://\|server\|[\d\.]+\|\d+\|/?)\](.*?)\[/url\]#si"				=>	"ed2k server: <a href='$1' class='postlink'>$2</a>",

				// [url]ed2k://|friend|name|ip|port|/[/url] code
				"#\[url\](ed2k://\|friend\|(.*?)\|[\d\.]+\|\d+\|/?)\[/url\]#si"				=>	"ed2k friend: <a href='$1' class='postlink'>$2</a>",

				// [url=ed2k://|friend|name|ip|port|/]name[/url] code
				"#\[url=(ed2k://\|friend\|(.*?)\|[\d\.]+\|\d+\|/?)\](.*?)\[/url\]#si"		=>	"ed2k friend: <a href='$1' class='postlink'>$3</a>'",
			);
			
			foreach ( $ed2k_ary as $abbcode_found => $abbcode_replace )
			{
				if ( preg_match( $abbcode_found, $message ) )
				{
					$message = preg_replace( $abbcode_found, $abbcode_replace, $message );
				}
			}
			return $message;
		}
	}

	/**
	* Parsing the images aligned - Second pass.
	*
	* @param $stx = align (right|center|left)
	* @param $in = post text between [img=(right|center|left)] & [/img]
	* @return image
	**/
	function img_pass( $stx, $in )
	{
		switch ( $stx )
		{
			case 'right':
				$message = '<img src="' . $in . '" alt="" style="float:right;padding:10px;" /></span>';
				break;
			case 'center':
				$message = '<center><img src="' . $in . '" alt="" align="middle" style="padding:10px;"/></center>';
				break;
			case 'left':
			default:
				$message = '<img src="' . $in . '" alt="" style="float:left;padding:10px;" />';
				break;
		}
		return $message;
	}
	
	/**
	* Parsing the NFO text - Second pass.
	*
	* @param $in = post text between [nfo] & [/nfo]
	* @return table with nfo data
	**/
	function nfo_pass( $in )
	{
		return '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", $in) . '</td></tr></table>';
	}
	
	/**
	* Parsing the serch text - Second pass.
	*
	* @param $stx = have search name param?
	* @param $in = post text between [search] & [/search]
	* @param $search = (msn|yahoo|google)
	* @return link
	**/
	function search_pass( $stx, $in , $search)
	{
		global $user, $config;

		switch ( $in )
		{
			case 'msn' :
				$echo = ' <a href="http://search.live.com/results.aspx?q=' . $search . '&mkt=tr-TR&lf=1" target="_blank">';
				break;
			
			case 'yahoo' :
				$echo = ' <a href="http://search.yahoo.com/search?p=' . $search . '" target="_blank">';
				break;
			
			case 'google' :
				$echo = ' <a href="http://www.google.com.tr/search?q=' . $search . '" target="_blank">';
				break;
			
			default :
				$echo = ' <a href="search.php?keywords=' . $search . '">'; $in = $config['sitename'];
				break;
		}
		
		return $user->lang['SEARCH_MINI'] . $in . ' : ' . $echo . '"' . $search. '" </a>';
	}

}
// End of abbcode3 class

/**
* eD2k Add all links feature
*
* @param $text = post text
* @param $post_id = post id
* @return display table with ed2k links features
*/
function make_addalled2k_link($text, $post_id)
{
	global $user;

	// padding
	$ret = ' ' . $text;
	$t_ed2k_raw = array();
	
	// dig through the message for all ed2k links! split up by "ed2k:"
	$t_ed2k_raw = explode("ed2k:", $text);
	$t_ed2kinsert1 = '';
	$t_ed2kinsert2 = '';
	$t_ed2kinsert3 = '';

	// The first item is garbage
	unset($t_ed2k_raw[0]);
	
	// no need to dig through it if there are not at least 2 links!
	if ( count($t_ed2k_raw) > 1)
	{
		foreach ($t_ed2k_raw as $t_ed2k_raw_line)
		{
			$t_ed2k_parts = explode("|", $t_ed2k_raw_line);
			// This looks now like this (only important parts included
			/**
			[1] => string(4) "file"
			[2] => string(46) "filename.extension"
			[3] => string(9) "321456789"
			[4] => string(32) "112233445566778899AABBCCDDEEFF11"
			[5] => string(?) "source or AICH hash"
			**/

			// Check the obvious things
			if (strlen($t_ed2k_parts[1]) == 4 AND $t_ed2k_parts[1] == "file" AND strlen($t_ed2k_parts[2]) > 0 AND floatval($t_ed2k_parts[3]) > 0 AND strlen($t_ed2k_parts[4]) == 32)
			{
				// This is a true link, lets paste it together and put it in an array
				if ( substr( $t_ed2k_parts[5], 0, 2 ) == "h=" || substr( $t_ed2k_parts[5], 0, 7 ) == "sources" )
				{
					$t_ed2k_reallinks[] = "ed2k://|file|" . str_replace( "'", "\'", $t_ed2k_parts[2] ) . "|" . $t_ed2k_parts[3] . "|" . $t_ed2k_parts[4] . "|" . $t_ed2k_parts[5] . "|/";
				}
				else
				{
					$t_ed2k_reallinks[] = "ed2k://|file|" . str_replace( "'", "\'", $t_ed2k_parts[2] ) . "|" . $t_ed2k_parts[3] . "|" . $t_ed2k_parts[4] . "|/";
				}
			}
		}

		// Now lets see if we have 2 or more links
		// Only then, we do our little trick, because otherwise, it would be wasted for one link alone!
		if ( count( $t_ed2k_reallinks ) > 1 )
		{
			$t_ed2kinsert1 = "<br /><br /><table id='posttable' width='100%' border='1' cellspacing='0' cellpadding='0' valign='top' bordercolor='#C0C0C0' class='ed2k_table'><tr bgcolor='#999999'><td colspan='2' align='center'><font color='white'><b>"  . $user->lang['ABBC3_ED2K_TAG'] . "</b></td></tr>";
			
			$i = 0;
			foreach( $t_ed2k_reallinks as $t_ed2klink )
			{
				$t_ed2k_parts = explode( "|", $t_ed2klink );
				$t_ed2kinsert2 .= "<tr bgcolor='#E4F9DB'><td class='ed2k_row1' ><input type='checkbox' name='lnk' value='" . $t_ed2klink . "'></td><td class='ed2k_row2' >" . $t_ed2k_parts[2] . "</td></tr>";
				$i++;
			}
			
			$t_ed2kinsert3 = "<tr><td colspan='2' align='center' bgcolor='white'><input type='button' value='" . $user->lang['SELECT_ALL_CODE'] . "' class='button2' onclick=checkAll('lnk')>&nbsp;&nbsp;<input type='button' value='" . $user->lang['ABBC3_ED2K_ADD'] . "' class='button2' onclick=download('lnk',0,1)></td></tr></table>";
		}
		unset($t_ed2k_reallinks);
	}

	// remove padding
	return( substr( $ret . $t_ed2kinsert1 . $t_ed2kinsert2 . $t_ed2kinsert3, 1) );
}

?>