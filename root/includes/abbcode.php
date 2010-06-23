<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3
* @version: $Id: abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
**/

/**
* @todo data base table = define('ABBCODES_TABLE', $table_prefix . 'abbcodes'); ?
* Base article :
*	http://www.phpbb.com/community/viewtopic.php?f=46&t=579376
* 	http://www.phpbb.com/kb/article/adding-custom-bbcodes-in-phpbb3/
* If you are using phpBB2, you can find compatible BBCode MODs in the BBCode section of the MOD database.
* 	http://www.phpbb.com/mods/db/index.php?i=browse&mode=group:category&sub=bbcode
* http://www.famfamfam.com/lab/icons/silk/
**/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Advanced BBCode Box 3 class
*
* @package phpBB3
**/
class abbcode
{
	var $abbcode_config		= array();
	var $abbcode_ary		= array();
	var $abbcode_acp_ary	= array();
	var $abbcode_custom_ary	= array();
	var $abbcode_video_ary	= array();
	var $abbcode_bitfield	= '';
	var $abbcode_dir		= '';
	var $abbc3_unique_id;

	
	/**
	* Some default settings untill load the ACP ABBC3 settings
	*
	* @param string 	$what	all / config / bbcodes
	* @return template vars
	**/
	function abbcode_init( $what = 'all')
	{
		global $phpbb_root_path, $phpEx, $config, $user ;
		
		$user->add_lang('mods/abbcode');
		
		$this->abbcode_dir = "{$phpbb_root_path}styles/" . $user->theme['imageset_path'] . "/imageset/abbcode";
		
		if ( $what =='all' || $what == 'config')
		{
			// Other setting
			$abbc3_unique_id = substr(base_convert(unique_id(), 16, 36), 0, 8);
			$abbcode_bitfield = new bitfield();
			$abbcode_bitfield->set(99);
			
			/**
			* Display options - Part 1 of 2
			**/
			$this->abbcode_config = array(
				'ABBC3_MOD'				=> true,		// Display ABBC3 ?
				'ABBC3_CUSTOM_BBCODES'	=> false,		// Display custom bbcodes icons ?
				'ABBC3_GREYBOX'			=> true,		// Display thumbnails with greybox ?
				'ABBC3_TAB'				=> true,		// Display icon division for tags ?
				'ABBC3_RESIZE'			=> true,		// Resize larger images ?
				'ABBC3_RESIZE_METHOD'	=> 'greybox',	// 'enlarge' 'samewindow' 'newwindow' 'greybox'
				'ABBC3_BOXRESIZE'		=> true, 		// Resize posting textarea ?
				
				'ABBC3_VIDEO_width'		=> 425, 		// Width for posted video ?
				'ABBC3_VIDEO_height'	=> 350, 		// Height for posted video ?
				
				'ABBC3_UPLOAD_MAX_SIZE'	=> ( $config['max_filesize']  ) ? $config['max_filesize']  : 0,	// Set-up max file size change this to your liking, Set to 0 for unlimited
				'ABBC3_UPLOAD_EXTENSION'=> 'swf, gif, jpg, jpeg, png, psd, bmp, tif, tiff',	// Add / change or delete this to your liking. Example add : ,'zip'
				
				'ABBC3_MAX_IMG_WIDTH'	=> ( $config['img_max_width'] ) ? $config['img_max_width'] : 500,
				'ABBC3_MAX_IMG_HEIGHT'	=> 0,
				'ABBC3_MAX_THUM_WIDTH'	=> ( ( $config['img_max_thumb_width'] ) ? $config['img_max_thumb_width'] : 200 ) . 'px',
				
				'POST_AUTHOR'			=> &$user->data['username'],
				'ABBC3_UID'				=> substr(base_convert(unique_id(), 16, 36), 0, 8),
				'ABBC3_BITFIELD'		=> $abbcode_bitfield->get_base64(),
				
				'ABBC3_HELP_PAGE'		=> append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", 'mode=help'),		// Link to ABBC3 help page
				'ABBC3_UPLOAD_PAGE'		=> append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", 'mode=upload'),	// Link to ABBC3 upload page
				'ABBC3_WIZARD_PAGE'		=> append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", 'mode=wizards'),	// Link to ABBC3 wizards page
				
				// Bakground image
				'ABBC3_BG'				=> 'bg_abbc3.gif',	// or leave it blank for fit to your style, Ex : 'ABCC3_BG'				=> '',
			);
			
			// Overwrite abbcode_config with the ACP options
			$this->obtain_abbcodes_config();
		}
		
		/**
		* Patterns and replacements for ABBC3 bbcodes processing - Part 1 of 3
		**/
		if ( $what =='all' || $what == 'bbcode')
		{
			$this->abbcode_ary = array(
		// FIRST LINE
				// [font=fonttype]text[/font] code..
				'ABBC3_FONTTYPE'	=> array( 'id' =>  1	,'display' => true	,'image' => ''				,'found' => "#\[font=(.*?)\](.*?)\[/font\]#si"			,'regexp' => "<span style='font-family:$1'>$2</span>"),
				// [size=xxx]text[/size] code..
				'ABBC3_FONTSIZE'	=> array( 'id' =>  2	,'display' => true	,'image' => ''				,'found' => ""											,'regexp' => ""),
				// [highlight=color]text[/highlight] code..
				'ABBC3_FONTHILI'	=> array( 'id' =>  3	,'display' => true	,'image' => ''				,'found' => "#\[highlight=(\#[0-9A-F]{6}|[a-z\-]+)\](.*?)\[/highlight\]#si"	,'regexp' => "<span style='background-color: $1;'>$2</span>"),
				// [color=#xxxxxx]text[/color] code..
				'ABBC3_FONTCOLOR'	=> array( 'id' =>  4	,'display' => false	,'image' => ''				,'found' => ""											,'regexp' => ''),
				
				// Display icon for cut selected text ?
				'ABBC3_CUT'			=> array( 'id' =>  5	,'display' => true	,'image' => 'cut.gif'		,'found' => ""											,'regexp' => ''),
				// Display icon for copy selected text ?
				'ABBC3_COPY'		=> array( 'id' =>  6	,'display' => true	,'image' => 'copy.gif'		,'found' => ""											,'regexp' => ''),
				// Display icon for paste previous copy text ?
				'ABBC3_PASTE'		=> array( 'id' =>  7	,'display' => true	,'image' => 'paste.gif'		,'found' => ""											,'regexp' => ''),
				// Display icon for delete all bbcodes from selected text ?
				'ABBC3_PLAIN'		=> array( 'id' =>  8	,'display' => true	,'image' => 'plain.gif'		,'found' => ""											,'regexp' => ''),
				
		// SECOND LINE
		// Break line and continue down ?
				'ABBC3_BREAK1'		=> array( 'id' =>  9	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""											,'regexp' => ""),
				// [CODE] and [/CODE] for posting code (HTML, PHP, C etc etc) in your posts.
				'ABBC3_CODE'		=> array( 'id' => 10	,'display' => true	,'image' => 'code.gif'		,'found' => ""											,'regexp' => ""),
				// [QUOTE] and [/QUOTE] for posting replies with quote, or just for quoting stuff.
				'ABBC3_QUOTE'		=> array( 'id' => 11	,'display' => true	,'image' => 'quote.gif'		,'found' => ""											,'regexp' => ""),
				// [spoil]Spoiler[/spoil] code..
				'ABBC3_SPOIL'		=> array( 'id' => 12	,'display' => true	,'image' => 'spoil.gif'		,'found' => "#\[spoil\](.*?)\[/spoil\]#si"				,'regexp' => '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil button2" type="button" value="' . $user->lang['SPOILER_SHOW'] . '" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'' . $user->lang['SPOILER_HIDE'] . '\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'' . $user->lang['SPOILER_SHOW'] .'\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">$1</div></div></div>'),
				// [hide]text[/hide] Code..
				'ABBC3_HIDE'		=> array( 'id' => 13	,'display' => false	,'image' => 'hide.gif'		,'found' => ""											,'regexp' => ''),
				// [mod=]text[/mod] Code..
				'ABBC3_MODERATOR'	=> array( 'id' => 14	,'display' => true	,'image' => 'moderator.gif'	,'found' => "#\[mod=(.*?)\](.*?)\[/mod\]#si"			,'regexp' => '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>$1:</b></span></td></tr><tr><td>$2</td></tr></table>'),
				// [offtopic]text[/offtopic] Code..
				'ABBC3_OFFTOPIC'	=> array( 'id' => 15	,'display' => true	,'image' => 'offtopic.gif'	,'found' => "#\[offtopic\](.*?)\[/offtopic\]#si"		,'regexp' => '<i><b><font color="#114499">' . $user->lang['ABBC3_OFFTOPIC'] . ': </font></b><br/><font color="#2277DD">$1</font></i>'),
				// [nfo]nfo text[/nfo] Code..
				'ABBC3_NFO'			=> array( 'id' => 16	,'display' => false	,'image' => 'nfo.gif'		,'found' => "#\[nfo\](.*?)\[/nfo\]#sie"					,'regexp' => "\$this->nfo_pass('\$1')"),
				
		// Display icon division for tags ?
				'ABBC3_DIVISION2'	=> array( 'id' => 17	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""											,'regexp' => ""),
				// [align=(justify/right/center/left)]text[/align] code..
				'ABBC3_JUSTIFY'		=> array( 'id' => 18	,'display' => true	,'image' => 'justify.gif'	,'found' => "#\[align=justify\](.*?)\[/align\]#si"		,'regexp' => "<div style='text-align:justify'>$1</div>"),
				'ABBC3_RIGHT'		=> array( 'id' => 19	,'display' => true	,'image' => 'right.gif'		,'found' => "#\[align=right\](.*?)\[/align\]#si"		,'regexp' => "<div align='right'>$1</div>"),
				'ABBC3_CENTER'		=> array( 'id' => 20	,'display' => true	,'image' => 'center.gif'	,'found' => "#\[align=center\](.*?)\[/align\]#si"		,'regexp' => "<div align='center'>$1</div>"),
		//		'ABBC3_CENTER2'		=> array( 'id' => 20	,'display' => false	,'image' => 'spacer.gif'	,'found' => "#\[center\](.*?)\[/center\]#si"			,'regexp' => "<div align='center'>$1</div>"),
				'ABBC3_LEFT'		=> array( 'id' => 21	,'display' => true	,'image' => 'left.gif'		,'found' => "#\[align=left\](.*?)\[/align\]#si"			,'regexp' => "<div align='left'>$1</div>"),
				// [pre]text[/pre] code..
				'ABBC3_PRE'			=> array( 'id' => 22	,'display' => true	,'image' => 'preformat.gif'	,'found' => "#\[pre\](.*?)\[/pre\]#si"					,'regexp' => "<pre>$1</pre>"),
				// [tab]
				'ABBC3_TAB'			=> array( 'id' => 23	,'display' => true	,'image' => 'tab.gif'		,'found' => "#\[tab=([0-9]?[0-9]?[0-9])\]#si"			,'regexp' => "<span style='margin-left:$1px;'></span>"),
		//		'ABBC3_TAB'			=> array( 'id' => 24	,'display' => true	,'image' => 'tab.gif'		,'found' => "#\[tab\]([0-9]?[0-9]?[0-9])\[/tab\]#si"	,'regexp' => "<span style='margin-left:$1px;'></span>"),
				
		// Display icon division for tags ?
				'ABBC3_DIVISION3'	=> array( 'id' => 24	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""											,'regexp' => ""),
				// [sup]Superscript[/sup] code..
				'ABBC3_SUP'			=> array( 'id' => 25	,'display' => true	,'image' => 'sup.gif'		,'found' => "#\[sup\](.*?)\[/sup\]#si"					,'regexp' => "<sup>$1</sup>"),
				// [sub]Subscrip[/sub] code..
				'ABBC3_SUB'			=> array( 'id' => 26	,'display' => true	,'image' => 'sub.gif'		,'found' => "#\[sub\](.*?)\[/sub\]#si"					,'regexp' => "<sub>$1</sub>"),
				// [b]text[/b] code..
				'ABBC3_BOLD'		=> array( 'id' => 27	,'display' => true	,'image' => 'bold.gif'		,'found' => ""											,'regexp' => ""),
				// [i]text[/i] code..
				'ABBC3_ITALIC'		=> array( 'id' => 28	,'display' => true	,'image' => 'italic.gif'	,'found' => ""											,'regexp' => ""),
				// [u]text[/u] code..
				'ABBC3_UNDERLINE'	=> array( 'id' => 29	,'display' => true	,'image' => 'under.gif'		,'found' => ""											,'regexp' => ""),
				// [s]Strikethrough[/s] code..
				'ABBC3_STRIKE'		=> array( 'id' => 30	,'display' => true	,'image' => 'strike.gif'	,'found' => "#\[s\](.*?)\[/s\]#si"						,'regexp' => "<span style='text-decoration: line-through;'>$1</span>"),
				// [fade]Faded Text[/fade] code..
				'ABBC3_FADE'		=> array( 'id' => 31	,'display' => true	,'image' => 'fade.gif'		,'found' => "#\[fade\](.*?)\[/fade\]#si"				,'regexp' => "<span class='fade_link'>$1</span> <script type='text/javascript'>fade_ontimer();</script>"),
				// gradient text
				'ABBC3_GRAD'		=> array( 'id' => 32	,'display' => true	,'image' => 'grad.gif'		,'found' => ""											,'regexp' => ""),
				// [glow=color]Text[/glow] Code..
				'ABBC3_GLOW'		=> array( 'id' => 33	,'display' => false	,'image' => 'glow.gif'		,'found' => "#\[glow=(.*?)\](.*?)\[/glow\]#si"			,'regexp' => '<div style="filter:Glow(color=$1,strength=4);color:#ffffff;height:110%">$2</div>'),
				// [shadow=color]Text[/shadow] Code..
				'ABBC3_SHADOW'		=> array( 'id' => 34	,'display' => false	,'image' => 'shadow.gif'	,'found' => "#\[shadow=(.*?)\](.*?)\[/shadow\]#si"		,'regexp' => '<div style="filter:shadow(color=black,strength=4);color:$1;height:110%">$2</div>'),
				// [dropshadow=color]Text[/dropshadow] Code..
				'ABBC3_DROPSHADOW'	=> array( 'id' => 35	,'display' => false	,'image' => 'dropshadow.gif','found' => "#\[dropshadow=(.*?)\](.*?)\[/dropshadow\]#si"	,'regexp' => '<div style="filter:dropshadow(color=#999999,strength=4);color:$1;height:110%">$2</div>'),
				// [blur=color]Text[/blur] Code..
				'ABBC3_BLUR'		=> array( 'id' => 36	,'display' => false	,'image' => 'blur.gif'		,'found' => "#\[blur=(.*?)\](.*?)\[/blur\]#si"			,'regexp' => '<div style="filter:Blur(strength=7);color:$1;height:110%">$2</div>'),
				// [wave=color]text[/wave] Code..
				'ABBC3_WAVE'		=> array( 'id' => 37	,'display' => false	,'image' => 'wave.gif'		,'found' => "#\[wave=(.*?)\](.*?)\[/wave\]#si"			,'regexp' => '<div style="filter:Wave(strength=2);color:$1;height:110%">$2</div>'),
				
		// Display icon division for tags ?
				'ABBC3_DIVISION4'	=> array( 'id' => 38	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""											,'regexp' => ''),
				// [list][*]text[/list] code..
				'ABBC3_LISTB'		=> array( 'id' => 39	,'display' => true	,'image' => 'listb.gif'		,'found' => ""											,'regexp' => ''),
				// [list=(a|1)][*]text[/list] code..
				'ABBC3_LISTO'		=> array( 'id' => 40	,'display' => true	,'image' => 'listo.gif'		,'found' => ""											,'regexp' => ''),
				// [list=(a|1)][*]text[/list] code..
				'ABBC3_LISTITEM'	=> array( 'id' => 41	,'display' => true	,'image' => 'listitem.gif'	,'found' => ""											,'regexp' => ''),
				// [hr]
				'ABBC3_HR'			=> array( 'id' => 42	,'display' => true	,'image' => 'hr.gif'		,'found' => "#\[hr\]#si" 								,'regexp' => '<hr noshade color="#000000" size="1px">'),
				
		// THIRD LINE
		// Break line and continue down ?
				'ABBC3_BREAK2'		=> array( 'id' => 43	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""											,'regexp' => ""),
				// [dir=(rtl|ltr)]Direction[/dir] code..
				'ABBC3_RTL'			=> array( 'id' => 44	,'display' => true	,'image' => 'rtl.gif'		,'found' => "#\[dir=rtl\](.*?)\[/dir\]#si"				,'regexp' => "<BDO dir='rtl'>$1</BDO>"),
				'ABBC3_LTR'			=> array( 'id' => 45	,'display' => true	,'image' => 'ltr.gif'		,'found' => "#\[dir=ltr\](.*?)\[/dir\]#si"				,'regexp' => "<BDO dir='ltr'>$1</BDO>"),
				// [marquee=(left/right/up/down)]Marquee Code[/marquee] code..
				'ABBC3_MARQD'		=> array( 'id' => 46	,'display' => true	,'image' => 'marqd.gif'		,'found' => "#\[marq=down\](.*?)\[/marq\]#si"			,'regexp' => "<marquee direction='down' scrolldelay='120'>$1</marquee>"),
				'ABBC3_MARQU'		=> array( 'id' => 47	,'display' => true	,'image' => 'marqu.gif'		,'found' => "#\[marq=up\](.*?)\[/marq\]#si"				,'regexp' => "<marquee direction='up' scrolldelay='120'>$1</marquee>"),
				'ABBC3_MARQR'		=> array( 'id' => 48	,'display' => true	,'image' => 'marqr.gif'		,'found' => "#\[marq=right\](.*?)\[/marq\]#si"			,'regexp' => "<marquee direction='right' scrolldelay='120'>$1</marquee>"),
				'ABBC3_MARQL'		=> array( 'id' => 49	,'display' => true	,'image' => 'marql.gif'		,'found' => "#\[marq=left\](.*?)\[/marq\]#si"			,'regexp' => "<marquee direction='left' scrolldelay='120'>$1</marquee>"),
				// [table=(ccs style)][tr=(ccs style)][td=(ccs style)]text[/td][/tr][/table] code..
				'ABBC3_TABLE'		=> array( 'id' => 50	,'display' => true	,'image' => 'table.gif'		,'found' => "#\[table=(.*?)\](.*?)\[\/table\]#ise"		,'regexp' => "\$this->table_pass('\$1', '\$2')"),
				
		// Display icon division for tags ?
				'ABBC3_DIVISION5'	=> array( 'id' => 51	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""											,'regexp' => ""),
				// Display icon for simple upload files ?
				'ABBC3_UPLOAD'		=> array( 'id' => 52	,'display' => false	,'image' => 'upload.gif'	,'found' => ""											,'regexp' => ''),
				// [url]www.phpbb.com[/url] code.. (no xxxx:// prefix).
				// [url=xxxx://www.phpbb.com]phpBB[/url] code..
				// [url=www.phpbb.com]phpBB[/url] code.. (no xxxx:// prefix).
				'ABBC3_URL'			=> array( 'id' => 53	,'display' => true	,'image' => 'url.gif'		,'found' => ""											,'regexp' => ''),
				// [email]user@domain.tld[/email] code..
				// [email=user@domain.tld]user[/email] code..
				'ABBC3_EMAIL'		=> array( 'id' => 54	,'display' => true	,'image' => 'email.gif'		,'found' => ""											,'regexp' => ''),
				// [url]ed2k://|file|...[/url] code
				// [url=ed2k://|file|...]name[/url] code
				// [url]ed2k://|server|ip|port|/[/url] code
				// [url=ed2k://|server|ip|port|/]name[/url] code
				// [url]ed2k://|friend|name|ip|port|/[/url] code
				// [url=ed2k://|friend|name|ip|port|/]name[/url] code
				'ABBC3_ED2K'		=> array( 'id' => 55	,'display' => true	,'image' => 'emule.gif'		,'found' => '#\[url(=(.*))?\](.*)\[/url\]#iUe' 			,'regexp' => "\$this->ed2k_pass('\$0', '\$2', '\$3')"),
				// [web]Web Iframe URL[/web] code..
				'ABBC3_WEB'			=> array( 'id' => 56	,'display' => false	,'image' => 'web.gif'		,'found' => "#\[web width=([0-9]?[0-9]?[0-9]?[(%|\w+)]) height=([0-9]?[0-9]?[0-9]?[(%|\w+)])\](http(s)?://)?(.*?)\[/web\]#si"	,'regexp' => '<iframe width="$1" height="$2" src="http$4://$5" style="font-size: 2px;"></iframe><br/>'),
				// [img]image_url_here[/img] code..
			//	'ABBC3_IMG'			=> array( 'id' => 57	,'display' => true	,'image' => 'img.gif'		,'found' => "#\[img(=(left|center|right))?\](.*?)\[\/img\]#sie" ,'regexp' => "\$this->img_pass('\$2', '\$3')"),
				'ABBC3_IMG'			=> array( 'id' => 57	,'display' => true	,'image' => 'img.gif'		,'found' => "#\[img(=(left|center|right))?\](.*?)\[\/img\]#si"  ,'regexp' => '<div align="$2"><img src="$3" alt="' . $user->lang['IMAGE'] . '"' . ( ( $this->abbcode_config['ABBC3_RESIZE']  ) ? ' onload="NcodeImageResizer.createOn(this);"' : '') . '/></div>'),
				// [thumbnail=(left|right)]image URL[/thumbnail] code..
				'ABBC3_THUMBNAIL'	=> array( 'id' => 58	,'display' => true	,'image' => 'thumb.gif'		,'found' => "#\[thumbnail(=(left|right))?\](.*?)\[\/thumbnail\]#si"	,'regexp' => "<a href='$3' rel='gb_imageset[]' alt='$3' title='' class='hoverbox' onclick='externalLinks(this);'><img src='$3' border='0' width='" . $this->abbcode_config['ABBC3_MAX_THUM_WIDTH'] . "' align='$2'/></a>"),
				// upload pics with ImageShack ?
				'ABBC3_IMGSHACK'	=> array( 'id' => 59	,'display' => true	,'image' => 'imgshack.gif'	,'found' => ""											,'regexp' => ''),
				// [testlink]http://...[/testlink] code..
				'ABBC3_TESTLINK'	=> array( 'id' => 60	,'display' => true	,'image' => 'testlink.gif'	,'found' => "#\[testlink\](.*?)\[\/testlink\]#sie"		,'regexp' => "\$this->testlink_pass('\$1')"),
				// [click]link[/click] code
				'ABBC3_CLICK'		=> array( 'id' => 62	,'display' => false	,'image' => 'click.gif'		,'found' => '#\[click(=(.*))?\](.*)\[/click\]#iUe' 		,'regexp' => "\$this->click_pass('\$2', '\$3')"),
				// [search=(msn|yahoo|google))]text[/search] Code..
				'ABBC3_SEARCH'		=> array( 'id' => 63	,'display' => true	,'image' => 'search.gif'	,'found' => "#\[search(=(.*?))?\](.*?)\[/search\]#sie"	,'regexp' => "\$this->search_pass('\$1', '\$2', '\$3')"),
				
		// Display icon division for tags ?
				'ABBC3_DIVISION6'	=> array( 'id' => 64	,'display' => true	,'image' => 'spacer.gif'	,'found' => ""											,'regexp' => ''),
				// [BBvideo] video url [/BBvideo] Code..
				'ABBC3_BBVIDEO'		=> array( 'id' => 65	,'display' => true	,'image' => 'bbvideo.gif'	,'found' => "#\[BBvideo( (width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?\](.*?)\[/BBvideo\]#sie"	,'regexp' => "\$this->BBvideo_pass('\$7', '\$3', '\$6')"),
				
			/** This video codes are on abbcode_custom.php file **/
		  		// 100 swf: [flash width=X height=X]Flash URL[/flash] code..
				// 101 Flv: [flv width,height]http://url[/flv] Code..
				// 102 [video width=X height=X]file Video URL[/video] code..
				// 103 [video]file Video URL[/video] code..
				// 104 [stream]file Sound URL[/stream] code..
				// 105 [quicktime width=X height=X]file Quicktime URL[/quicktime] code..
				// 106 [ram]file Ram URL[/ram] code..
				// 107 [stage6 width=X height=X]Video ID[/stage6] code..
				// 108 [Gvideo]video.google URL[/Gvideo] code..
				// 108 [youtube]YouTube URL[/youtube] code..
				// 110 [veoh]Veoh URL[/veoh] code.. (http://www.phpbb.com/community/viewtopic.php?p=3929705#p3929705)
				// 111 [collegehumor]collegehumor video URL[/collegehumor] Code..
				// 112 [dm]Video ID[/dm] code..
				// 113 [Bebo]Bebo video URL[Bebo] Code..
				// 114 [gamespot] Gamespot video URL [/gamespot] Code..
				// 115 [gametrailers]Gametrailers video URL[/gametrailers] Code..
				// 116 [ignvideo]ING video URL [/ignvideo] Code..
				// 117 [Putfile]Putfile video URL [/Putfile] Code..
				// 118 [liveleak]Liveleak video URL [/liveleak] Code..
				
				// Extra Custom bbcodes
				
			);
		}
		
		/**
		* Display ABBC3_BBVIDEO ?
		**/
		if ( $what =='all' || $what == 'bbvideo')
		{
			/**
			* Patterns and replacements for ABBC3_BBVIDEO bbcode processing - Part 1 of 3
			**/
			$this->abbcode_video_ary = array(
				'uncutvideo.aol.com'=> array ( 'display' => true	,'image' => 'aol.gif'			,'example' => "http://uncutvideo.aol.com/categories/News/month/007c338a423704ba813dadd72fb75408?index=0"								,'found' => "#http://uncutvideo.aol.com/([^[]*\/([0-9A-Za-z-_]*)?)?([^[]*)?#si"							,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="wmode" value="opaque" /><param name="movie" value="http://uncutvideo.aol.com/v7.0017/en-US/uc_videoplayer.swf" /><param name="FlashVars" value="aID=1$2&site=http://uncutvideo.aol.com/"/><embed src="http://uncutvideo.aol.com/v7.0017/en-US/uc_videoplayer.swf" wmode="opaque" FlashVars="aID=1$2&site=http://uncutvideo.aol.com/" width="{WIDTH}" height="{HEIGHT}" type="application/x-shockwave-flash"></embed></object><br/>' ),
				'clipfish.(de|co)'	=> array ( 'display' => true	,'image' => 'clipfish.gif'		,'example' => "http://www.clipfish.de/player.php?videoid=NTU2Mzd8MTk5NTM1Nw=="															,'found' => "#http://www.clipfish.(.*?)/player.php\?videoid=([^[]*)?#si"								,'regexp' => '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="{WIDTH}" height="{HEIGHT}" id="player" align="middle"><param name="allowScriptAccess" value="always" /><param name="movie" value="http://www.clipfish.$1/videoplayer.swf?as=0&videoid=$2==&r=1&c=0067B3" /><param name="quality" value="high" /><param name="bgcolor" value="#0067B3" /><param name="allowFullScreen" value="true" /><embed src="http://www.clipfish.$1/videoplayer.swf?as=0&videoid=$2==&r=1&c=0067B3" quality="high" bgcolor="#0067B3" width="{WIDTH}" height="{HEIGHT}" name="player" align="middle" allowFullScreen="true" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed></object><br/>' ),
				'collegehumor.com'	=> array ( 'display' => true	,'image' => 'collegehumor.gif'	,'example' => "http://www.collegehumor.com/video:1802097"																				,'found' => "#http://www.collegehumor.com/video:([0-9]+)#si"											,'regexp' => '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=$1&fullscreen=1" width="{WIDTH}" height="{HEIGHT}" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=$1&fullscreen=1" /></object><br/>' ),
				'crackle.com'		=> array ( 'display' => true	,'image' => 'crackle.gif'		,'example' => "http://crackle.com/c/High_Wire/Fall_Out_Boy_Songs/2185986"																,'found' => "#http://crackle.com/([A-Za-z-_/]+)?([0-9]+)?([^[]*)?#is"									,'regexp' => '<embed src="http://crackle.com/flash/ReferrerRedirect.ashx" quality="high" bgcolor="#869ca7" width="{WIDTH}" height="{HEIGHT}" name="mtgPlayer" align="middle" play="false" loop="false" allowFullScreen="true" flashvars="mu=0&ap=0&ml=o%3D12%26fi%3D%26fpl%3D2839&id=$2" quality="high" allowScriptAccess="never" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer"/><br/>' ),
				'dailymotion.com'	=> array ( 'display' => true	,'image' => 'dailymotion.gif'	,'example' => "http://www.dailymotion.com/video/x4ez1x_alberto-contra-el-heliocentrismo_sport"											,'found' => "#http://www.dailymotion.com/video/([0-9A-Za-z]+)([0-9A-Za-z-_]+)?#si"						,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://www.dailymotion.com/swf/$1&v3=1&related=1"/><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://www.dailymotion.com/swf/$1&v3=1&related=1" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" allowFullScreen="true" allowScriptAccess="always"></embed></object><br/>' ),
				'gamespot.com'		=> array ( 'display' => true	,'image' => 'gamespot.gif'		,'example' => "http://www.gamespot.com/video/928334/6185856/lost-odyssey-official-trailer-8"											,'found' => "#http://www.gamespot.com/video/([0-9]+)?/([0-9]+)?(/[^/]+)?#si"							,'regexp' => '<embed id="mymovie" width="{WIDTH}" height="{HEIGHT}" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D$2%26pid%3D$1%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/><br/>' ),
				'gametrailers.com'	=> array ( 'display' => true	,'image' => 'gametrailers.gif'	,'example' => "http://www.gametrailers.com/player/30461.html"																			,'found' => "#\http://www.gametrailers.com/player/([0-9]+).html#si"										,'regexp' => '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="{WIDTH}" height="{HEIGHT}"><param name="allowScriptAccess" value="sameDomain" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=$1" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=$1" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}"></embed></object><br/>' ),
				'gamevideos.com'	=> array ( 'display' => true	,'image' => 'gamevideos.gif'	,'example' => "http://www.gamevideos.com/video/id/17766"																				,'found' => "#http://www.gamevideos.com/video/id/([^[]*)?#si"											,'regexp' => '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="{WIDTH}" height="{HEIGHT}" id="gamevideos6" align="middle"><param name="quality" value="high" /><param name="play" value="true" /><param name="loop" value="true" /><param name="scale" value="showall" /><param name="wmode" value="window" /><param name="devicefont" value="false" /><param name="bgcolor" value="#000000" /><param name="menu" value="true" /><param name="allowScriptAccess" value="sameDomain" /><param name="allowFullScreen" value="true" /><param name="salign" value="" /><param name="movie" value="http://www.gamevideos.com//swf/gamevideos11.swf?embedded=1&amp;fullscreen=1&amp;autoplay=0&amp;src=http://www.gamevideos.com/video/videoListXML%3Fid%3D$1%26ordinal%3D%26adPlay%3Dfalse" /><param name="quality" value="high" /><param name="bgcolor" value="#000000" /><embed src="http://www.gamevideos.com//swf/gamevideos11.swf?embedded=1&amp;fullscreen=1&amp;autoplay=0&amp;src=http://www.gamevideos.com/video/videoListXML%3Fid%3D$1%26ordinal%3D%26adPlay%3Dfalse" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" play="true" loop="true" scale="showall" wmode="window" devicefont="false" id="gamevideos6" bgcolor="#000000" name="gamevideos6" menu="true" allowscriptaccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" align="middle" height="{HEIGHT}" width="{WIDTH}" /></object><br/>' ),
				'godtube.com'		=> array ( 'display' => true	,'image' => 'godtube.gif'		,'example' => "http://www.godtube.com/view_video.php?viewkey=25ec0b736884cda85a16"														,'found' => "#http://www.godtube.com/view_video.php\?viewkey=([^[]*)?#si"								,'regexp' => '<embed src="http://godtube.com/flvplayer.swf" FlashVars="viewkey=$1" wmode="transparent" quality="high" width="{WIDTH}" height="{HEIGHT}" name="godtube" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed><br/>' ),
				'ign.com'			=> array ( 'display' => true	,'image' => 'ign.gif'			,'example' => "object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv"	,'found' => "#object_ID=([0-9]+)?([^/]+[^[]*)?#si"														,'regexp' => '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=$1$2 type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" ></embed><br/>' ),
				'liveleak.com'		=> array ( 'display' => true	,'image' => 'liveleak.gif'		,'example' => "http://www.liveleak.com/view?i=2ac_1203907789&p=1"																		,'found' => "#http://www.liveleak.com/view\?i=([0-9A-Za-z-_]+)?(\&[^/]+)?#si"							,'regexp' => '<object type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=$1"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object><br/>' ),
				'livevideo.com'		=> array ( 'display' => true	,'image' => 'livevideo.gif'		,'example' => "http://www.livevideo.com/video/UKUFO/D930AEB5460D4707B2F6DC0CD8D3C258/haiti-and-the-dominican-republ.aspx"				,'found' => "#http://www.livevideo.com/video/([^[]*)/([^[]*)/([^[]*)#is"								,'regexp' => '<embed src="http://www.livevideo.com/flvplayer/embed/$2&autoStart=0" type="application/x-shockwave-flash" quality="high" width="{WIDTH}" height="{HEIGHT}" wmode="transparent"></embed><br/>' ),
				'megavideo.com'		=> array ( 'display' => true	,'image' => 'megavideo.gif'		,'example' => "http://www.megavideo.com/?v=0Q8S7E29"																					,'found' => "#http://www.megavideo.com/\?v=([^[]*)#ise"													,'regexp' => "\$this->external_video( '\$0', 'object' )" ),
				'metacafe.com'		=> array ( 'display' => true	,'image' => 'metacafe.gif'		,'example' => "http://www.metacafe.com/watch/966360/merry_christmas_with_crazy_frog/"													,'found' => "#http://www.metacafe.com/watch/([0-9]+)?((/[^/]+)/?)?#si"									,'regexp' => '<embed src="http://www.metacafe.com/fplayer/$1/.swf" width="{WIDTH}" height="{HEIGHT}" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed><br/>' ),
				'myspacetv.com'		=> array ( 'display' => true	,'image' => 'myspacetv.gif'		,'example' => "http://myspacetv.com/index.cfm?fuseaction=vids.individual&videoid=25769593"												,'found' => "#http://myspacetv.com/index.cfm([^[]*)?videoid=([^[]*)?#si"								,'regexp' => '<embed src="http://lads.myspace.com/videos/vplayer.swf" flashvars="m=$2&v=2&type=video" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}"></embed><br/>' ),
				'vids.myspace.com'	=> array ( 'display' => true	,'image' => 'vidsmyspace.gif'	,'example' => "http://vids.myspace.com/index.cfm?fuseaction=vids.individual&VideoID=28799328"											,'found' => "#http://vids.myspace.com/index.cfm([^[]*)?videoid=([^[]*)?#si"								,'regexp' => '<embed src="http://lads.myspace.com/videos/vplayer.swf" flashvars="m=$2&v=2&type=video" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}"></embed><br/>' ),
				'myvideo.(de|be|nl)'=> array ( 'display' => true	,'image' => 'myvideo.gif'		,'example' => "http://www.myvideo.de/watch/2668372"																						,'found' => "#http://www.myvideo.(.*?)/(.*?)/([^[]*)?#si"												,'regexp' => '<object style="width:{WIDTH}px;height:{HEIGHT}px;" type="application/x-shockwave-flash" data="http://www.myvideo.$1/movie/$3"> <param name="movie" value="http://www.myvideo.$1/movie/$3" /><param name="AllowFullscreen" value="true" /></object><br/>' ),
				'photobucket.com'	=> array ( 'display' => true	,'image' => 'photobucket.gif'	,'example' => "http://s0006.photobucket.com/albums/0006/pbhomepage/video2/?action=view&current=dedc9ad8.flv"							,'found' => "#http://(.*?).photobucket.com/albums/(.*?)([^[]+)?\?([^[]*\w=([^[]*)?)?#si"				,'regexp' => '<embed width="{WIDTH}" height="{HEIGHT}" type="application/x-shockwave-flash" wmode="transparent" src="http://i$2.photobucket.com/player.swf?file=http://vid$2.photobucket.com/albums/$2$3$5&amp;sr=1"><br/>' ),
				'sevenload.com'		=> array ( 'display' => true	,'image' => 'sevenload.gif'		,'example' => "http://en.sevenload.com/videos/Cf6wyZr/Zoom"																				,'found' => "#http://(.*?).sevenload.com/(.*?)/([0-9A-Za-z-_]+)?([^[]*)?#is"							,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="FlashVars" value="apiHost=api.sevenload.com"/><param name="AllowScriptAccess" value="always"/><param name="movie" value="http://en.sevenload.com/pl/$3/425x350/swf" /><embed src="http://en.sevenload.com/pl/$3/425x350/swf" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" allowfullscreen="true" AllowScriptAccess="always" FlashVars="apiHost=api.sevenload.com"></embed></object><br />' ),
				'spike.com'			=> array ( 'display' => true	,'image' => 'spike.gif'			,'example' => "http://www.spike.com/video/2946505"																						,'found' => "#http://www.spike.com/video/([0-9]+)[^[]*#si"												,'regexp' => '<embed width="{WIDTH}" height="{HEIGHT}" src="http://www.spike.com/efp" quality="high" bgcolor="000000" name="efp" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="flvbaseclip=$1&"></embed><br/>' ),
				'stage6.com'		=> array ( 'display' => true	,'image' => 'stage6.gif'		,'example' => "http://www.stage6.com/user/TheNelAware/video/2217443/Indiana-Jones-4-Trailer.."											,'found' => "#http://www.stage6.com/user/TheNelAware/video/([0-9]+)/([0-9]+)?(/[^/]+)?#si"				,'regexp' => '<object codebase="http://go.divx.com/plugin/DivXBrowserPlugin.cab" height="{HEIGHT}" width="{WIDTH}" classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616"><param name="autoplay" value="false"/><param name="src" value="http://video.stage6.com/$1/.divx" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/$1/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" height="{HEIGHT}" width="{WIDTH}" /></object><br/>' ),
				'starsclips.net'	=> array ( 'display' => true	,'image' => 'starsclips.gif'	,'example' => "http://www.starsclips.net/videos.aspx/video~incredible_aerobatic_fly_formation/Incredible_aerobatic_fly_formation"		,'found' => "#http://www.starsclips.net/videos.aspx/video~([0-9A-Za-z-_]+)(/[0-9A-Za-z-_]+)?(/[^/]+)?#si",'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://www.starsclips.net/emb.aspx/video~$1"></param><param name="wmode" value="transparent"></param><embed src="http://www.starsclips.net/emb.aspx/video~$1" type="application/x-shockwave-flash" wmode="transparent" width="{WIDTH}" height="{HEIGHT}"></embed></object><br/>' ),
				'tu.tv'				=> array ( 'display' => true	,'image' => 'tutv.gif'			,'example' => "http://tu.tv/videos/el-gato-boxeador"																					,'found' => "#http://tu.tv/videos/([^[]*)?#sie"															,'regexp' => "\$this->external_video( '\$0', 'object' )" ),
				'vbox7.com'			=> array ( 'display' => true	,'image' => 'vbox7.gif'			,'example' => "http://www.vbox7.com/play:93ab2ba5"																						,'found' => "#http://www.vbox7.com/play:([^[]+)?#si"													,'regexp' => '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://i47.vbox7.com/player/ext.swf?vid=$1"><param name="quality" value="high"><embed src="http://i47.vbox7.com/player/ext.swf?vid=$1" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}"></embed></object><br/>' ),
				'veoh.com'			=> array ( 'display' => true	,'image' => 'veoh.gif'			,'example' => "http://www.veoh.com/videos/v1409404EqT5SJjM"																				,'found' => "#http://(.*?).veoh.com/videos/([0-9A-Za-z-_]+)#si" 										,'regexp' => '<embed src="http://$1.veoh.com/videodetails2.swf?permalinkId=$2&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="{WIDTH}" height="{HEIGHT}" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed><br/>' ),
				'videu.de'			=> array ( 'display' => true	,'image' => 'videu.gif'			,'example' => "http://www.videu.de/video/38"																							,'found' => "#http://www.videu.de/video/([^[]*)?#si"													,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://www.videu.de/flv/player2.swf?iid=$1"></param><param name="wmode" value="transparent"></param><embed src="http://www.videu.de/flv/player2.swf?iid=$1" type="application/x-shockwave-flash" wmode="transparent" width="{WIDTH}" height="{HEIGHT}"></embed></object><br/>' ),
				'vidiac.com'		=> array ( 'display' => true	,'image' => 'vidiac.gif'		,'example' => "http://www.vidiac.com/video/d9ec881e-8a1c-41a7-8e4a-919180b0f538.htm"													,'found' => "#http://www.vidiac.com/video/([^[]*).htm#si"												,'regexp' => '<embed src="http://www.vidiac.com/vidiac.swf" FlashVars="video=$1" quality="high" bgcolor="#ffffff" width="{WIDTH}" height="{HEIGHT}" name="ePlayer" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed><br/>' ),
				'vidilife.com'		=> array ( 'display' => true	,'image' => 'vidilife.gif'		,'example' => "http://www.vidiLife.com/video_play_1136791_Really_Bad_Driver_Drives_Off_Parking_Garage.htm"								,'found' => "#http://www.vidiLife.com/([^[]*)?#sie"														,'regexp' => "\$this->external_video( '\$0', 'embed' )" ),
				'vimeo.com'			=> array ( 'display' => true	,'image' => 'vimeo.gif'			,'example' => "http://vimeo.com/725441"																									,'found' => "#http://vimeo.com/([^[]*)?#si"																,'regexp' => '<object type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" data="http://www.vimeo.com/moogaloop.swf?clip_id=$1&amp;server=www.vimeo.com&amp;fullscreen=1&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color="><param name="quality" value="best" /><param name="allowfullscreen" value="true" /><param name="scale" value="showAll" /><param name="movie" value="http://www.vimeo.com/moogaloop.swf?clip_id=$1&amp;server=www.vimeo.com&amp;fullscreen=1&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=" /></object><br />' ),
				'video.google'		=> array ( 'display' => true	,'image' => 'googlevid.gif'		,'example' => "http://video.google.com/videoplay?docid=-8351924403384451128"															,'found' => "#http://video.google.(.*?)/videoplay\?docid=(-[0-9]+)#si"									,'regexp' => '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://video.google.$1/googleplayer.swf?docid=$2" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.$1/googleplayer.swf?docid=$2" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="{WIDTH}" height="{HEIGHT}" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object><br/>' ),
				'video.yahoo'		=> array ( 'display' => true	,'image' => 'yahoovid.gif'		,'example' => "http://video.yahoo.com/watch/2057334/6491459?v=2057334"																	,'found' => "#http://video.yahoo.com/watch/([0-9]+)/([0-9]+)[^[]*#si"									,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf?ver=2.0.44" /><param name="allowFullScreen" value="true" /><param name="flashVars" value="id=$2&vid=$2&lang=en-US&intl=us&thumbUrl=http://us.i1.yimg.com/us.yimg.com/i/us/sch/cn/video04/$1_rnd618da3dd_19.jpg" /><embed src="http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf?ver=2.0.44" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" allowFullScreen="true" flashVars="id=$2&vid=$1&lang=en-US&intl=us&thumbUrl=http://us.i1.yimg.com/us.yimg.com/i/us/sch/cn/video04/$1_rnd618da3dd_19.jpg" ></embed></object><br/>' ),
				'vsocial.com'		=> array ( 'display' => true	,'image' => 'vsocial.gif'		,'example' => "http://www.vsocial.com/video/?d=2893"																					,'found' => "#http://www.vsocial.com/video/\?d=([^[]*)#is"												,'regexp' => '<embed allowScriptAccess="always" id="flash_player" name="flash_player" width="{WIDTH}" height="{HEIGHT}" src="http://static.vsocial.com/flash/upsl3.0.2/ups3.0.2.swf?d=$2&a=1&s=false&url=http://www.vsocial.com/xml/upsl/vsocial/template.php"></embed><br/>' ),
				'wat.tv'			=> array ( 'display' => true	,'image' => 'wattv.gif'			,'example' => "http://www.wat.tv/playlist/564333"																						,'found' => "#http://(.*?).wat.tv/playlist/([^[]*)?#is"													,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://www.wat.tv/images/v2.5/flash/loaderexport.swf?revision=2.5.108&mediaID=$2&baseUrl=www.wat.tv&referer=www.wat.tv&request=/playlist/$2" /><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="true" /><embed src="http://www.wat.tv/images/v2.5/flash/loaderexport.swf?revision=2.5.108&mediaID=$2&baseUrl=www.wat.tv&referer=www.wat.tv&request=/playlist/$2" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" allowScriptAccess="always" allowFullScreen="true"></embed></object><br />' ),
				'youtube.com'		=> array ( 'display' => true	,'image' => 'youtube.gif'		,'example' => "http://mx.youtube.com/watch?v=TA4hm97m494&rel=1"																			,'found' => "#http://((.*?)?)youtube.com/watch\?v=([0-9A-Za-z-_]+)?([^[]*)?#is"							,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://$2youtube.com/v/$3" /><param name="wmode" value="transparent"/><embed src="http://$2youtube.com/v/$3" type="application/x-shockwave-flash" wmode="transparent" width="{WIDTH}" height="{HEIGHT}"></embed></object><br/>' ),
	#			'filefront.com'		=> array ( 'display' => true	,'image' => 'filefront.gif'		,'example' => "http://files.filefront.com/quickysavi/;9703466;/fileinfo.html"															,'found' => "#http://files.filefront.com/(.*?)/(;)?([0-9]+)?(;)?(/[^/]+)?#sie"							,'regexp' => "\$this->external_video( '\$0' )" ),
	#			'filefront.com'		=> array ( 'display' => true	,'image' => 'filefront.gif'		,'example' => "http://files.filefront.com/quickysavi/;9703466;/fileinfo.html"															,'found' => "#http://files.filefront.com/(.*?)/(;)?([0-9]+)?(;)?(/[^/]+)?#si"							,'regexp' => '<object width="450" height="338"><param name="movieID" value="http://static.filefront.com/ffv6/player/vp_embed.swf?v=$3&autorun=false"></param><param name="wmode" value="transparent"></param><embed src="http://static.filefront.com/ffv6/player/vp_embed.swf?v=$3&autorun=false" type="application/x-shockwave-flash" wmode="transparent" width="450" height="338"></embed></object><br/>'),
				
				'swf'				=> array ( 'display' => true	,'image' => 'flash.gif'			,'example' => ""																														,'found' => "#([^[]+)?.swf#si"																			,'regexp' => '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="$0" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="$0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="{WIDTH}" height="{HEIGHT}" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object><br/>'),
				'flv'				=> array ( 'display' => true	,'image' => 'flashflv.gif'		,'example' => ""																														,'found' => "#([^[]+)?.flv#si"																			,'regexp' => '<embed src="./images/flvplayer.swf" width="{WIDTH}" height="{HEIGHT}" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=$0&autostart=false" /><br/>'),
				'(wmv|mpg)'			=> array ( 'display' => true	,'image' => 'video.gif'			,'example' => ""																														,'found' => "#([^[]+)?.(wmv|mpg)#si"																	,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_' . $this->abbcode_config['ABBC3_UID'] . '"><param name="url" value="$0" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$0" /><!--[if !IE]>--><object width="{WIDTH}" height="{HEIGHT}" type="video/x-ms-wmv" data="$0"><param name="src" value="$0" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object><br/>'),
				'(mp3|qt)'			=> array ( 'display' => true	,'image' => 'quicktime.gif'		,'example' => ""																														,'found' => "#([^[]+)?.(mp3|qt)#si"																		,'regexp' => '<object id="qtstream_' . $this->abbcode_config['ABBC3_UID'] . '" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="{WIDTH}" height="{HEIGHT}"><param name="src" value="$0" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_' . $this->abbcode_config['ABBC3_UID'] . '" src="$0" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="{WIDTH}" height="{HEIGHT}" type="video/quicktime" autoplay="false"></embed></object><br/>'),
				'ram'				=> array ( 'display' => true	,'image' => 'ram.gif'			,'example' => ""																														,'found' => "#([^[]+)?.ram#si"																			,'regexp' => '<object id="rmstream_' . $this->abbcode_config['ABBC3_UID'] . '" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="{WIDTH}" height="{HEIGHT}"><param name="src" value="$0" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '" /><param name="prefetch" value="false" /><embed name="rmstream_' . $this->abbcode_config['ABBC3_UID'] . '" type="audio/x-pn-realaudio-plugin" src="$0" width="{WIDTH}" height="{HEIGHT}" autostart="false" controls="ImageWindow" console="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '" prefetch="false"></embed></object><br /><object id="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="{WIDTH}" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '" /><embed name="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '" type="audio/x-pn-realaudio-plugin" width="{WIDTH}" height="36" controls="ControlPanel" console="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '"></embed></object>'),
				
			);
		}
	}
	
	/**
	* Overwrite default ABBC3 settings with the ACP ABBC3 settings
	*
	* @param string	$dir	folder where ABBC3 files are stored
	**/
	function obtain_abbcodes_config()
	{
		if ( file_exists($this->abbcode_dir . '/config/abbc3config.txt') )
		{
			$config_file = file($this->abbcode_dir . '/config/abbc3config.txt');
			
			foreach($config_file as $config)
			{
				$spl_config   = preg_split('/:/',$config);
				$this->abbcode_config[$spl_config[0]] = ((is_int($spl_config[1])) ? false : trim($spl_config[1]));
			}
		}
	}
	
	/**
	* Overwrite default ABBC3 bbcodes with the ACP options
	*
	* @param string	$dir	folder where ABBC3 files are stored
	**/
	function obtain_abbcode_acp_ary()
	{
		$abbcodes_acp_file = array();
		if ( file_exists($this->abbcode_dir . '/config/abbc3bbcodes.txt') )
		{
			$abbcodes_acp_file = file($this->abbcode_dir . '/config/abbc3bbcodes.txt');
		}
		return $abbcodes_acp_file;
	}
	
	/**
	* Add extra files to ABBC3...
	*
	* @param string	$file_to_add	Name of file
	**/
	function get_abbcode_custom_ary( $file_to_add )
	{
		global $phpbb_root_path, $phpEx, $user;
		
		$custom_abbcode_ary = array();
		
		if ( !file_exists($phpbb_root_path . 'includes/' . $file_to_add . '.' . $phpEx) )
		{
			trigger_error( sprintf($user->lang['FILE_NOT_FOUND_404'], "{$phpbb_root_path}includes/$file_to_add.$phpEx") );
		}
		else
		{
			include($phpbb_root_path . 'includes/' . $file_to_add . '.' . $phpEx);
			
			if ( !file_exists( $user->lang_path . 'mods/' . $file_to_add . '.' . $phpEx) )
			{
				trigger_error( sprintf($user->lang['FILE_NOT_FOUND_404'], $user->lang_path . 'mods/' . $file_to_add . '.' . $phpEx) );
			}
			else
			{
				$user->add_lang('mods/abbcode_custom');
			}
		}
		return $custom_abbcode_ary;
	}
	
	/**
	* Display the mod and/or buttons
	*
	* @param string 	$what	all / config / bbcodes
	* @return template vars
	**/
	function abbcode_display( $what = 'all' )
	{
		global $template, $user;
		
		$user->add_lang('mods/abbcode');
		
		/**
		* Display options - Part 2 of 2
		**/
		if ( sizeof( $this->abbcode_config ) && ( $what =='all' || $what == 'config') )
		{
			foreach ( $this->abbcode_config as $abbcode_template => $abbcode_value )
			{
				if ($abbcode_value)
				{
					$template->assign_vars(array(
					 'S_' . $abbcode_template => $abbcode_value,
					));
				}
			}
		}
		
		/**
		* Display ABBC3 bbcodes - Part 2 of 3
		**/
		if ( sizeof( $this->abbcode_ary ) && ( $what =='all' || $what == 'bbcodes') )
		{
			// Extra Custom BBcodes
			// Overwrite abbcode_config with the ACP options
			// Make sure the list of all bbcodes is sorted by order
			$this->abbcode_ary = $this->sortmddata( $this->abbcode_ary, 'id', 'ASC', 'num', $this->abbcode_dir);
			
			$need_permissions  = array( 'ABBC3_URL', 'ABBC3_IMG', 'ABBC3_THUMBNAIL', 'ABBC3_FLASH', 'ABBC3_FLV', 'ABBC3_QUOTE', 'ABBC3_MODERATOR', 'ABBC3_UPLOAD' );
			
			foreach ( $this->abbcode_ary as $abbcode_name => $abbcode_data )
			{
				// Check permissions status : HTML, BBCode, Smilies, Images, Flash and Quote status
				if ( in_array( $abbcode_name, $need_permissions ) )
				{
					$abbcode_data['display'] = $this->abbode_auth( $abbcode_name );
				}
				
				if ( $abbcode_data['display'] )	// true ?
				{
					if ( $abbcode_data['image'] )	// has image ?
					{
						if ( substr($abbcode_name,0,11)=='ABBC3_BREAK' || substr($abbcode_name,0,14)=='ABBC3_DIVISION' ) // is a breck line or division ?
						{
							$template->assign_block_vars('abbc3_tags.linebreak', array(
								'S_ABBC3_BREAK'		=> (substr($abbcode_name,0,11)=='ABBC3_BREAK') ? true : false,
								'S_ABBC3_DIVISION'	=> (substr($abbcode_name,0,14)=='ABBC3_DIVISION') ? true : false,
							));
						}
						else
						{
							$template->assign_block_vars('abbc3_tags', array(
								'TAG_SRC'		=> $abbcode_data['image'],
								'TAG_NAME'		=> strtolower($abbcode_name),
								'TAG_MOVER'		=> &$user->lang[$abbcode_name . '_MOVER'],
								'TAG_TIP'		=> &$user->lang[$abbcode_name . '_TIP'],
								'TAG_NOTE'		=> &$user->lang[$abbcode_name . '_NOTE'],
								'TAG_EXAMPLE'	=> &$user->lang[$abbcode_name . '_EXAMPLE'],
							));
						}
					}
					else // no image
					{
						$template->assign_vars(array(
							'S_' . $abbcode_name	=> $abbcode_data['display'],
							$abbcode_name . '_NAME'	=> strtolower($abbcode_name),
							$abbcode_name . '_MOVER'=> &$user->lang[$abbcode_name . '_MOVER'],
							$abbcode_name . '_TIP'	=> &$user->lang[$abbcode_name . '_TIP'],
							$abbcode_name . '_NOTE'	=> &$user->lang[$abbcode_name . '_NOTE'],
						));
					}
				}
			}
		}
	}
	
	/**
	* Parse ABBC3 bbodes
	*
	* @param string 	$post_message	post text
	* @return string
	**/
	function abbcode_process( $post_message )
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
			// Extra Custom BBcodes
			// Overwrite abbcode_config with the ACP options
			// Make sure the list of all bbcodes is sorted by order
			$this->abbcode_ary = $this->sortmddata( $this->abbcode_ary, 'id', 'ASC', 'num', $this->abbcode_dir);

			/**
			* Patterns and replacements for ABBC3 bbcodes processing - Part 3 of 3
			**/
			if ( sizeof( $this->abbcode_ary ) )
			{
				foreach ( $this->abbcode_ary as $abbcode_name => $abbcode_data )
				{
					if ( $abbcode_data['display'] && @$abbcode_data['found'] && @$abbcode_data['regexp'] )
					{
						if ( preg_match ( $abbcode_data['found'], $this->abbcode_message ) )
						{
							$this->abbcode_message = preg_replace( $abbcode_data['found'], $abbcode_data['regexp'], $this->abbcode_message );
						}
					}
				}
			}
		}
		
		return substr( $this->abbcode_message, 1 );	// Remove our padding from the string..
	}
	
	/**
	* Check permissions status : HTML, BBCode, Smilies, Images, Flash and Quote ( and others )status
	*
	* @param string		$abbcode_name
	* @return boolean	true / false
	**/
	function abbode_auth( $abbcode_name )
	{
		global $user, $config, $auth, $forum_id;
		
		// Get phpbb bbcodes status
		if ( isset($forum_id) )
		{
			// POSTING
			$bbcode_status	= ($config['allow_bbcode'] && $auth->acl_get('f_bbcode', $forum_id)) ? true : false;
			$status_ary  = array(
			//	'SMILES'	=> ( ( $bbcode_status && $config['allow_smilies'] && $auth->acl_get('f_smilies', $forum_id) ) ? 1 : 0 ),
				'IMG'		=> ( ( $bbcode_status && $auth->acl_get('f_img', $forum_id) ) ? 1 : 0 ),
				'FLASH'		=> ( ( $bbcode_status && $auth->acl_get('f_flash', $forum_id) && $config['allow_post_flash'] ) ? 1 : 0 ),
				'URL'		=> ( ( $config['allow_post_links'] ) ? 1 : 0 ),
				'QUOTE'		=> ( ( $auth->acl_get('f_reply', $forum_id ) ) ? 1 : 0 ),
				'MODERATOR'	=> ( ( $auth->acl_get('a_', $forum_id) || $auth->acl_get('m_', $forum_id) ) ? 1 : 0 ),
				'UPLOAD'	=> ( ( $auth->acl_get('a_', $forum_id) || $auth->acl_get('m_', $forum_id) ) ? 1 : 0 ),
			);
		}
		else
		{
			// PM
			$bbcode_status	= ($config['allow_sig_bbcode']) ? ((request_var('disable_bbcode', !$user->optionget('bbcode'))) ? 0 : 1) : 0;
			$status_ary  = array(
			//	'SMILES'	=> ( ( $config['allow_sig_smilies'] ) ? ((request_var('disable_smilies', !$user->optionget('smilies'))) ? 0 : 1) : 0 ),
				'IMG'		=> ( ( $config['auth_img_pm'] && $auth->acl_get('u_pm_img') ) ? 1 : 0 ),
				'FLASH'		=> ( ( $config['allow_sig_flash'] && $auth->acl_get('u_pm_flash') ) ? 1 : 0 ),
				'URL'		=> ( ( $config['allow_sig_links']) ? ((request_var('disable_magic_url', 0)) ? 0 : 1) : 0 ),
				'QUOTE'		=> 1,
				'MODERATOR'	=> ( ( $auth->acl_get('a_', $forum_id) || $auth->acl_get('m_', $forum_id) ) ? 1 : 0 ),
				'UPLOAD'	=> ( ( $auth->acl_get('a_', $forum_id) || $auth->acl_get('m_', $forum_id) ) ? 1 : 0 ),
			);
		}
		
		list( $garbage, $auth_tag ) = split( '_', $abbcode_name );
		$auth_tag = ( $auth_tag == 'THUMBNAIL') ? 'IMG' : ( ( $auth_tag == 'FLV') ? 'FLASH' : $auth_tag );
		
		foreach ( $status_ary as $phpbb3_bbcode => $value )
		{
			if ( strtoupper($auth_tag) == $phpbb3_bbcode )
			{
				return $value;
			}
		}
	}
	
	/**
	* Parsing the tables  - Second pass.
	*
	* @param string		$stx	table style
	* @param string		$in 	post text between [table] & [/table]
	* @return string	table
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
		return "<table style='" . $stx . "' cellspacing='0' cellpadding='0'>" . $in ."</table>";
	}
	
	/**
	* Parsing the e-links  - Second pass.
	*
	* @param string		$message	post text
	* @param string		$stx		type of ed2k
	* @param string		$in			post text between [url] & [/url]
	* @return string	link
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
	* @param string		$stx	align (right|center|left)
	* @param string		$in		post text between [img=(right|center|left)] & [/img]
	* @return string	image
	**/
	function img_pass( $stx, $in )
	{
		switch ( $stx )
		{
			case 'right':
				return '<img src="' . $in . '" alt="" style="float:right;padding:10px;" onload="NcodeImageResizer.createOn(this);" /></span>';
				break;
			case 'center':
				return '<center><img src="' . $in . '" alt="" align="middle" style="padding:10px;" onload="NcodeImageResizer.createOn(this);" /></center>';
				break;
			case 'left':
			default:
				return '<img src="' . $in . '" alt="" style="float:left;padding:10px;" onload="NcodeImageResizer.createOn(this);" />';
				break;
		}
	}
	
	/**
	* Parsing the NFO text - Second pass.
	*
	* @param string		$in		post text between [nfo] & [/nfo]
	* @return string	table with nfo data
	**/
	function nfo_pass( $in )
	{
		return '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", $in) . '</td></tr></table>';
	}
	
	/**
	* Parsing the serch text - Second pass.
	*
	* @param string		$stx	have search name param?
	* @param string		$in		post text between [search] & [/search]
	* @param string		$search (msn|yahoo|google)
	* @return string	link
	**/
	function search_pass( $stx, $in , $search)
	{
		global $user, $config;
		
		$in = trim($in);
		$search = trim($search);
		
		switch ( $in )
		{
			case 'msn' :
				$echo = ' <a href="http://search.live.com/results.aspx?q=' . str_replace(' ', '+',$search) . '" target="_blank">';
				break;
			
			case 'yahoo' :
				$echo = ' <a href="http://search.yahoo.com/search?p=' . str_replace(' ', '+',$search) . '" target="_blank">';
				break;
			
			case 'google' :
				$echo = ' <a href="http://www.google.com.tr/search?q=' . str_replace(' ', '+',$search) . '" target="_blank">';
				break;
			
			default :
				$echo = ' <a href="search.php?keywords=' . $search . '">'; $in = $config['sitename'];
				break;
		}
		return $user->lang['SEARCH_MINI'] . $in . ' : ' . $echo . '"' . $search. '" </a>';
	}
	
	/**
	* Enter link checker
	*
	* @param string		$in 	post text between [testlink] &[/testlink]
	* @return string	link with text ok/wrong
	**/
	function testlink_pass( $in )
	{
		global $user;
		
		$in	= trim($in);
		$linktest_good	 = $user->lang['ABBC3_TESTLINK_GOOD'];
		$linktest_wrong	 = $user->lang['ABBC3_TESTLINK_WRONG'];
		
		$linktest = new linktest();
		$linktest_links	 = explode( "\n", $in );
		$linktest_result = array();
		$linktest_echo	 = '';
		$linktest_round  = 2;
		$linktest_format = 'KB';
		
		foreach ($linktest_links as $linktest_value)
		{
			if (trim($linktest_value) !== '')
			{
				// undo make_clickable_callback();
			#	$message = preg_replace('#<!\-\-(.*?)\-\->#is', '', $message); // Remove Comments from post content	
				$linktest_value		= trim(str_replace('\"', '',preg_replace('#<!-- m --><a class=(.*?) href=(.*?)>(.*?)</a><!-- m -->#si','$2',$linktest_value)));
				
				$linktest_return	= $linktest->test($linktest_value, $linktest_format, $supported = false);
				
				if (!$linktest_return[0])
				{
					$linktest_weight= "";
					$linktest_msg	= "<font color='red' size='4' >$linktest_wrong</font>";
					$linktest_pic	= "<img src='$this->abbcode_dir/images/error.gif' class='postimage' type='image' name='abbcode_linktest' alt='$linktest_wrong' title='$linktest_wrong' />&nbsp;";
				}
				else
				{
					$linktest_weight= "&nbsp;(" . round($linktest_return[0], $linktest_round) . "&nbsp;$linktest_format)";
					$linktest_msg	= "<font color='green' size='4' >$linktest_good</font>";
					$linktest_pic	= "<img src='$this->abbcode_dir/images/ok.gif'    class='postimage' type='image' name='abbcode_linktest' alt='$linktest_good'  title='$linktest_good'  />&nbsp;";
				}
				
				$linktest_value		= "<a href='$linktest_value' onclick='window.open(this.href);return false;' title='' alt='' rel='external' >$linktest_value</a>";
				$linktest_result[]	= array('link' => $linktest_value, 'weight' => $linktest_weight, 'pic' => $linktest_pic, 'msg' => $linktest_msg);
			}
		}
		
		if (count($linktest_result) > 0)
		{
			foreach ($linktest_result as $linktest_data => $linktest_value)
			{
			#	$linktest_echo .= $linktest_value['msg'] . $linktest_value['link'] . $linktest_value['weight'] . "<br />";
				$linktest_echo .= $linktest_value['pic'] . $linktest_value['link'] . $linktest_value['weight'] . "<br />";
			}
		}
		unset( $linktest, $linktest_result );
		
		return '<dl class="testlink"><dd>'. $linktest_echo . '</dd></dl>';
	}

	/**
	* Enter rapidshare checker
	*
	* @param string		$in 	post text between [rapidshare] &[/rapidshare]
	* @return string	link with text ok/wrong
	**/
	function rapidshare_pass( $in )
	{
		global $user, $phpbb_root_path;
		
		$in = trim($in);
		
		$rapidshare_links	 = explode( "\n", $in );
		if ( sizeof($rapidshare_links) > 1 )
		{
			return "[rapidshare]" . str_replace('\"', '',preg_replace('#<!-- m --><a class=(.*?) href=(.*?)>(.*?)</a><!-- m -->#si','$2',$in)) . "[/rapidshare]";
		}

		$rapidshare_pic = '';
		$rapidshare_msg = '';
		
		$rs_checkfiles = fopen ( "http://rapidshare.com/cgi-bin/checkfiles.cgi?urls=" . $in, "r" );
		$t_imageset_path = "{$phpbb_root_path}styles/" . $user->theme['imageset_path'] . '/imageset/abbcode/images/';
		
		while ( !feof ( $rs_checkfiles ) )
		{
			$buffer = fgets ( $rs_checkfiles, 4096 );
			if ( eregi ( '<font color="red">File', $buffer ) )
			{
	//			$rapidshare_msg = '<font color="red" size="3" >' . $user->lang['ABBC3_RAPIDSHARE_WRONG'] . '</font>';
				$rapidshare_pic = '<img src="' . $t_imageset_path . 'error.gif" class="postimage" type="image" name="abbc_rapidshare" alt="' . $user->lang['ABBC3_RAPIDSHARE_WRONG'] . '" title="' . $user->lang['ABBC3_RAPIDSHARE_WRONG'] . '" />';
			}
			
			if ( eregi ( '<font color="green">File', $buffer ) )
			{
	//			$rapidshare_msg = '<font color="green" size="3" >' . $user->lang['ABBC3_RAPIDSHARE_GOOD'] . '</font>';
				$rapidshare_pic = '<img src="' . $t_imageset_path . 'ok.gif" class="postimage" type="image" name="abbc_rapidshare" alt="' . $user->lang['ABBC3_RAPIDSHARE_GOOD'] . '" title="' . $user->lang['ABBC3_RAPIDSHARE_GOOD'] .'" />';
			}
		}
		fclose ( $rs_checkfiles );
		
		return '<a href="' . $in . '" title="' . $in . '" alt="' . $in . '" target="_blanc">' . $in . '</a>&nbsp;' . $rapidshare_pic;
	//	Or you can use :
	//	return '<a href="' . $in . '" title="' . $in . '" alt="' . $in . '" target="_blanc">' . $in . '</a>&nbsp;' . $rapidshare_msg;
	}

	/**
	* Count the number of click on a link or image
	*
	* @param string		$var1	post text after [click(=(.*))]
	* @param string		$var2	post text between [click] &[/click]
	* @return string	link or none
	**/
	function click_pass( $var1, $var2 )
	{
		global $db, $user, $phpbb_root_path, $phpEx;
		
		$url = ( $var1 ) ? $var1 : $var2;
		
		if ( !$url || ( $var1 && !$var2 ) )
		{
			return '';
		}
		
		$valid = false;
		
		$url = str_replace( ' ', '%20', $url );
		
		// Checking urls
		if (preg_match('#^' . get_preg_expression('url') . '$#i', $url) ||
			preg_match('#^' . get_preg_expression('www_url') . '$#i', $url) ||
			preg_match('#^' . preg_quote(generate_board_url(), '#') . get_preg_expression('relative_url') . '$#i', $url))
		{
			$valid = true;
			// if there is no scheme, then add http schema
			if (!preg_match('#^[a-z][a-z\d+\-.]*:/{2}#i', $url))
			{
				$url = 'http://' . $url;
			}
			// Is this a link to somewhere inside this board? If so then remove the session id from the url
			if ( strpos($url, generate_board_url()) !== false && strpos($url, 'sid=') !== false )
			{
				$url = preg_replace('/(&amp;|\?)sid=[0-9a-f]{32}&amp;/', '\1', $url);
				$url = preg_replace('/(&amp;|\?)sid=[0-9a-f]{32}$/', '', $url);
				$url = append_sid($url);
			}
		}
		
		// Checking image urls
		if ( preg_match("#\[img:(.*)\](.*)\[\/img:(.*)\]#si", $url) )
		{
			$valid = true;
		}
		
		if ( $valid )
		{
			$data = array(
				'url' => preg_replace('#\[img:(.*)\](.*)\[\/img:(.*)\]#si', '\2', str_replace( array( '&#58;', '&#46;' ), array( ':', '.' ), addslashes( $url ) ) ),
			);
			
			$sql = 'SELECT id, clicks FROM ' . CLICKS_TABLE . ' WHERE ' . $db->sql_build_array( 'SELECT', $data );
			$result = $db->sql_query($sql);
			
			if( $row = $db->sql_fetchrow( $result ) )
			{
				$clicks_id = $row['id'];
				$clicks_val= $row['clicks'];
			}
			else
			{
				$sql = 'INSERT INTO ' . CLICKS_TABLE . ' ' . $db->sql_build_array( 'INSERT', $data );
				$db->sql_query($sql);
				
				$clicks_id = $db->sql_nextid();
				$clicks_val= '0';
			}
			
			$redirect = append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", "mode=click&amp;id=$clicks_id");	// Link to ABBC3 simple redirect page

			return '<a href="' . $redirect . '" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" >' . ( ($var1) ? $var2 : $url ) . '</a> ' . sprintf( ( ( $clicks_val == 1 ) ? $user->lang['ABBC3_CLICK_TIME'] : $user->lang['ABBC3_CLICK_TIMES'] ), $clicks_val );
		}
		return '[click' . ( ($var1) ? '=' . $var1 : '' ) . ']' . $var2 . '[/click]';
	}
	
	/**
	* Parsing the web videos - Second pass.
	*
	* @param string		$in		post text between [BBvideo] & [/BBvideo]
	* @param string		$w		value for video width
	* @param string		$h		value for video Height
	* @return embed video
	**/
	function BBvideo_pass( $in, $w, $h )
	{
		global $user, $phpbb_root_path;
		
		$w = ( intval( $w ) ) ? $w : $this->abbcode_config['ABBC3_VIDEO_width'] ;
		$h = ( intval( $h ) ) ? $h : $this->abbcode_config['ABBC3_VIDEO_height'] ;
		
		$t_imageset_path = $this->abbcode_dir . '/images/';
		
		if ( sizeof( $this->abbcode_video_ary ) )
		{
			foreach ( $this->abbcode_video_ary as $video_name => $video_data )
			{
				// Fisrt check that video url is one of the list and if it's enabled to parse.
				if ( ( preg_match( '#' . $video_name . '#si', $in ) ) && ( $video_data['display'] ) )
				{
					// Second check if video have data to search and parse
					if ( $video_data['found'] != '' && $video_data['regexp'] != '' )
					{
						if ( preg_match( $video_data['found'], $in ) )
						{
							if ( preg_match( '#\.#si', $video_name ) )
							{
								$img = '<img src="' . $t_imageset_path . $video_data['image'] .'" class="postimage" type="image" alt="" title="" /> <strong>' . $user->lang['ABBC3_BBVIDEO_VIDEO'] .' : <a href="http://' . $video_name . '" target="_blank" >' . preg_replace('#\((.*?)\)#is','',$video_name) . '</a></strong><br/>';
							}
							else
							{
								$img = '<img src="' . $t_imageset_path . $video_data['image'] .'" class="postimage" type="image" alt="" title="" /> <strong>' . $user->lang['ABBC3_BBVIDEO_FILE'] .' : </strong>' . $video_name . '<br/>';
							}
							
							$video_data['regexp'] = str_replace( array ('{WIDTH}','{HEIGHT}') , array ($w, $h) , $video_data['regexp'] );
							
							$in = preg_replace( $video_data['found'], $video_data['regexp'], str_replace(' ', '', trim( $in ) ) );
							
							return $img . $in;
						}
					}
				}
			}
		}
		return '[BBvideo]' . $in . '[/BBvideo]' ;
	}
	
	/**
	* Parsing the web videos without a clear link.
	*
	* @param string		$in		post text between [BBvideo] & [/BBvideo]
	* @param string		object or embed
	* @return embed video
	**/
	function external_video( $link, $search )
	{
		$page = file_get_contents (str_replace( ' ', '+', $link) );
		$ini  = strpos( $page, '<' . $search );
		$last = strpos( $page, $search . '>' );
		if ( $search == 'object'){ $last++ ; };
		$video_data = substr( $page, $ini, ( ($last+6)-$ini) );
		
		return $video_data;
	}
	
	/**
	* Enter description here...
	*
	* Code from : http://www.php.net/manual/en/function.array-multisort.php#61334
	* 
	* @param array	$array		the array you want to sort
	* @param string $by			the associative array name that is one level deep
	* @param string $order		ASC or DESC
	* @param string $type		num or str
	* @return array	
	**/
	function sortmddata($array, $by, $order, $type, $dir = '')
	{
		// add Extra Custom BBcodes ?
		if ( $this->abbcode_config['ABBC3_CUSTOM_BBCODES'] )
		{
			$this->abbcode_custom_ary = $this->get_abbcode_custom_ary( 'abbcode_custom' );
			
			if ( sizeof( $this->abbcode_custom_ary ) )
			{
				foreach ( $this->abbcode_custom_ary as $custom_name => $custom_data )
				{
					$this->abbcode_custom_ary[$custom_name]['custom'] = true;
					$this->abbcode_ary[$custom_name] = $this->abbcode_custom_ary[$custom_name];
				}
			}
		}
		
		// Overwrite abbcode_config with the ACP options
		$this->abbcode_acp_ary = $this->obtain_abbcode_acp_ary();
		foreach($this->abbcode_acp_ary as $config_acp)
		{
			$spl_config = preg_split('/:/',$config_acp);
			
			if ( !$this->abbcode_config['ABBC3_CUSTOM_BBCODES'] && @trim($spl_config[4]) )
			{
				continue;
			}
			$this->abbcode_ary[trim($spl_config[0])]['id']		=  $spl_config[1];
			$this->abbcode_ary[trim($spl_config[0])]['display']	= (trim($spl_config[2]) == 0) ? false : true;
			$this->abbcode_ary[trim($spl_config[0])]['image']	=  trim($spl_config[3]);
		}
		
		$array = $this->abbcode_ary;
		
		$sortby = "sort$by"; //This sets up what you are sorting by
		$firstval = current($array); //Pulls over the first array
		$vals = array_keys($firstval); //Grabs the associate Arrays
		
		foreach ($vals as $init)
		{
			$keyname = "sort$init";
			$$keyname = array();
		}
		//This was strange because I had problems adding Multiple arrays into a variable variable
		//I got it to work by initializing the variable variables as arrays Before I went any further
		
		foreach ($array as $key => $row)
		{
			foreach ($vals as $names)
			{
				$keyname = "sort$names";
				$test = array();
				$test[$key] = @$row[$names];
				$$keyname = array_merge($$keyname,$test);
			}
		}
		//This will create dynamic mini arrays so that I can perform the array multisort with no problem
		//Notice the temp array... I had to do that because I cannot assign additional array elements to a varaiable variable
		
		if ($order == "DESC")
		{
			if ($type == "num")
			{
				array_multisort($$sortby, SORT_DESC, SORT_NUMERIC, $array, SORT_DESC, SORT_STRING);
			}
			else
			{
				array_multisort($$sortby, SORT_DESC, SORT_STRING, $array, SORT_DESC, SORT_STRING);
			}
		}
		else
		{
			if ($type == "num")
			{
				array_multisort($$sortby, SORT_ASC, SORT_NUMERIC, $array, SORT_DESC, SORT_STRING);
			}
			else
			{
				array_multisort($$sortby, SORT_ASC, SORT_STRING, $array, SORT_DESC, SORT_STRING);
			}
		}
		//This just goed through and asks the additional arguments What they are doing and are doing variations of the multisort
		
		return $array;
	}
	
}
// End of abbcode3 class

/**
* linktest class
* 
* This class is used to check the validity of file host links (also called one-click hosts). 
* It does so by looking for the file size that the host displays. It requires that you have
* curl installed and a version of PHP that supports preg_match and preg_replace.
* 
* @license 	GPL license
* @author	 	Max Power
* @copyright	2008, Max Power
**/
class linktest
{
	// global variables shared by all methods
	var $url, $method, $format, $domain, $adjustment, $filters;	//	public $url, $method, $format, $domain, $adjustment, $filters;
	
	// class constants
	var $PATTERN 	= "@([\d\.,\s]+)(KB|MB|GB)@i";				//	const PATTERN = "@([\d\.,\s]+)(KB|MB|GB)@i";
	var $CONVERSION = 1024;										//	const CONVERSION = 1024;
	
	/**
	* The test method is the only public method and the only method necessary for interfacing
	* with this class. The list of supported hosts is in this method. Only six hosts are used
	* as default but many others are available as needed and need to be uncommented for use.
	* 
	* @param string url (required) - must be a full url including http://
	* @param string format (optional) - only accepted strings are 'KB', 'MB', and 'GB'
	* @param boolean supported (optional) - to only allow supported hosts or not
	* @return array result - zero index is either a number or false
	**/ 
	function test($url, $format = 'MB', $supported = true)
	{
		// VARIABLE SETUP
		
		// check for valid hostname in url
		$pattern = '@^https?://?([^/]+)@i';
		
		if (preg_match($pattern, $url, $matches))
		{
			$hostname = $matches[1];
		}
		else
		{
			$result[0] = false;
			$result[1] = 'invalid url';
			$result[2] = "The link provided is not a valid url";
			return $result;
		}
		
		// set format to 'MB' if variable is not KB, MB or GB
		$format = strtoupper($format);
		
		if ($format !== 'KB' && $format !== 'MB' && $format !== 'GB')
		{
			$format = 'MB';
		}
		
		// set supported to true if variable is not true or false
		if ($supported !== true && $supported !== false)
		{
			$supported = true;
		}
		
		// set global variables
		$this->url = $url;
		$this->format = $format;
		
		// FILE HOST PROCESSING
		/** array of hosts to check against url
		* important: do not change key names
		* the following is the format of the hosts array:
		* $hosts[method name][domain name] = array(domain pattern, url retrieve method, size adjustment, filters array);
		**/
		
		// most popular hosts
		$hosts['rapidshare_method']['rapidshare.com']	= array("@rapidshare\.com@i", 'curl', 1000/$this->CONVERSION, array('@<u>100 MB</u>@i'));
		$hosts['rapidshare_method']['rapidshare.de']	= array("@rapidshare\.de@i", 'curl', 1, array('@>300 MB<@i'));
		$hosts['other_method']['megaupload.com']		= array("@megaupload\.com@i", 'curl', 1);
		$hosts['other_method']['megarotic.com']			= array("@megarotic\.com@i", 'curl', 1);
		$hosts['other_method']['depositfiles.com']		= array("@depositfiles\.com@i", 'file', 1);
		$hosts['other_method']['megashares.com']		= array("@megashares\.com@i", 'curl', 1, array('@ 10GB@i'));
		
		// lesser known hosts, these hosts are commented out but can be used as needed
		//$hosts['other_method']['filefactory.com']		= array("@filefactory\.com@i", 'curl', 1);
		//$hosts['other_method']['sendspace.com']		= array("@sendspace\.com@i", 'file', 1);
		//$hosts['other_method']['badongo.com']			= array("@badongo\.com@i", 'curl', 1);
		//$hosts['other_method']['filecloud.com']		= array("@filecloud\.com@i", 'curl', 1);
		//$hosts['other_method']['filefront.com']		= array("@filefront\.com@i", 'curl', 1);
		//$hosts['other_method']['gigasize.com']		= array("@gigasize\.com@i", 'curl', 1);
		//$hosts['other_method']['uploadmb.com']		= array("@uploadmb\.com@i", 'curl', pow(1000/$this->CONVERSION, 2));
		//$hosts['other_method']['speedshare.org']		= array("@speedshare\.org@i", 'curl', 1);
		//$hosts['other_method']['uploading.com']		= array("@uploading\.com@i", 'curl', 1);
		//$hosts['other_method']['furk.net']			= array("@furk\.net@i", 'curl', 1);
		//$hosts['other_method']['savefile.info']		= array("@savefile\.info@i", 'curl', 1);
		//$hosts['other_method']['arbup.org']			= array("@arbup\.org@i", 'curl', 1, array('@x 120MB p@i'));
		//$hosts['other_method']['getupload.com']		= array("@getupload\.com@i", 'curl', 1);
		//$hosts['other_method']['turboupload.com']		= array("@turboupload\.com@i", 'curl', 1);
		//$hosts['other_method']['titanicshare.com']	= array("@titanicshare\.com@i", 'curl', 1);
		//$hosts['other_method']['file2you.net']		= array("@file2you\.net@i", 'curl', 1);
		//$hosts['other_method']['upitus.com']			= array("@upitus\.com@i", 'curl', 1, array('@o 80 MB \(@i'));
		//$hosts['other_method']['egoshare.com']		= array("@egoshare\.com@i", 'curl', 1);
		//$hosts['other_method']['tornadodrive.com']	= array("@tornadodrive\.com@i", 'curl', 1);
		//$hosts['other_method']['uploadpalace.com']	= array("@uploadpalace\.com@i", 'curl', 1);
		//$hosts['other_method']['4filehosting.com']	= array("@4filehosting\.com@i", 'curl', 1);
		//$hosts['other_method']['primeupload.com']		= array("@primeupload\.com@i", 'curl', 1);
		//$hosts['other_method']['yousendit.com']		= array("@yousendit\.com@i", 'file', 1);
		//$hosts['other_method']['transferbigfiles.com']= array("@transferbigfiles\.com@i", 'file', 1, array('@o 1gb p@i', '@>~300kb<@i'));
		//$hosts['other_method']['mailbigfile.com']		= array("@mailbigfile\.com@i", 'curl', 1);
		//$hosts['other_method']['friendlyfiles.net']	= array("@friendlyfiles\.net@i", 'curl', 1);
		//$hosts['other_method']['bigupload.com']		= array("@bigupload\.com@i", 'file', 1);
		//$hosts['other_method']['axifile.com']			= array("@axifile\.com@i", 'curl', 1, array('@ 200 @i'));
		//$hosts['other_method']['speedyshare.com']		= array("@speedyshare\.com@i", 'curl', 1);
		//$hosts['other_method']['justupit.com']		= array("@justupit\.com@i", 'curl', 1, array('@>170mb!!<@i'));
		//$hosts['other_method']['momoshare.com']		= array("@momoshare\.com@i", 'curl', 1);
		//$hosts['other_method']['internetfiles.org']	= array("@internetfiles\.org@i", 'curl', 1);
		//$hosts['other_method']['ultrashare.net']		= array("@ultrashare\.net@i", 'curl', 1, array('@ 100MB P@i'));
		//$hosts['other_method']['upload2.net']			= array("@upload2\.net@i", 'curl', 1, array('@s 25Mb@i'));
		//$hosts['other_method']['webfilehost.com']		= array("@webfilehost\.com@i", 'curl', 1, array('@500\s?MB@i'));
		//$hosts['other_method']['rapidfile.net']		= array("@rapidfile\.net@i", 'file', 1, array('@o 300 MB U@i'));
		//$hosts['other_method']['zshare.net']			= array("@zshare\.net@i", 'file', 1);*/
		
		// find out which host to check and set variables from array
		$host = false;
		
		foreach ($hosts as $key => $value)
		{
			foreach ($value as $domain => $pattern)
			{
				if ( preg_match($pattern[0], $hostname, $matches))
				{
					$host				= $key;
					$this->domain		= $domain;
					$this->method		= $pattern[1];
					$this->adjustment	= $pattern[2];
					$this->filters		= $pattern[3];
				}
			}
		}
		
		// return false if no supported hosts were matched or set default variables if supported is false
		if (!$host)
		{
			if ($supported == true)
			{
				$result[0] = false;
				$result[1] = 'invalid host';
				$result[2] = "The domain $hostname is not a supported host";
				
				return $result;
			}
			else
			{
				$host 				= 'other_method';
				$this->domain 		= $hostname;
				$this->method 		= 'curl';
				$this->adjustment 	= 1;
				$this->filters 		= null;
			}
		}
		
		// dynamic function call
		$result = $this->$host();
		
		return $result;
	}
	
	/**
	* rapidshare_method requires a two step process in order to view the file size. To make it more
	* complicated, the second page can only be reached using POST. This method gathers the 
	* information required to make the POST call and passes it to the other_method function, which
	* the other domains use. If other hosts require a two step process, this rapidshare_method
	* can be used as a template.
	* 
	* @return array result
	**/
	function rapidshare_method()
	{
		// get rapidshare submit form url
		$pattern	= '@<form.*.action="(.*)".*.method@i';
		$matches	= $this->match($this->url, $pattern);
		$url		= $matches[1];
		$params		= "dl.start=Free";
		
		// get rapidshare.de hidden param
		if ($this->domain == 'rapidshare.de')
		{
			$pattern	= '@<input.*.hidden.*.value="(.*)">@i';
			$matches	= $this->match($this->url, $pattern);
			$param		= $matches[1];
			if (!is_null($param))
			{
				$params = "$params&uri=$param";
			}
		}
		
		// get file size
		$this->url		= $url;
		$result 		= $this->other_method($params);
		
		return $result;
	}
	
	/**
	* The other_method is used to get the file size by all domains other than rapidshare. It
	* contains the standard pattern for finding the file size and also makes the call to the
	* match method and convertSize method.
	* 
	* @param string params (optional) - params is used for passing POST parameters
	* @return array result
	**/
	function other_method($params = null)
	{
		// get file size and format
		$pattern		= $this->PATTERN;
		$matches		= $this->match($this->url, $pattern, $params);
		$size			= $matches[1];
		$sourceFormat	= strtoupper($matches[2]);
		
		if (is_null($size) || rtrim($size) == '')
		{
			$result[0] = false;
			$result[1] = 'invalid link';
			$result[2] = "This link for $this->domain is invalid";
			return $result;
		}
		
		// convert size to requested format
		$result = $this->convertSize($size, $sourceFormat);
		
		return $result;
	}
	
	/**
	* The match method is used by the other_method methods to get the HTML and perform the preg_replace
	* and preg_match. First, it gets the HTML using the curl or file_get_contents method accodding
	* to the global method variable. Next, the HTML is filtered for common problems and then for
	* the domain specific filters that are stored in the global fitlers array. Finally, the filtered
	* HTML is matched against the pattern that is passed into the method.
	* 
	* @param string url (required) - this url may not always be the same as the global url so it must be passed
	* @param string params (optional) - params is used for passing POST parameters
	* @return array result
	**/
	function match($url, $pattern, $params = null)
	{
		// get html from url
		if ($this->method == 'curl')
		{
			$curl = curl_init();
			
			if (!is_null($params))
			{
				curl_setopt($curl, CURLOPT_POST, 1);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
			}
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$html = curl_exec($curl);
			curl_close($curl);
		}
		else
		{
			if (!is_null($params))
			{
				$options = array('http' => array('method' => 'POST', 'content' => $params));
				$context = stream_context_create($options);
				$html = file_get_contents($url, null, $context);
			}
			else
			{
				$html = file_get_contents($url);
			}
		}
		
		// uncomment line below to test unfiltered html
		// echo "<xmp>$html</xmp>"; exit;
		
		// setup patterns for preg_replace to remove common-problem text
		$patterns[] = '@<title>.*?</title>@i';
		$patterns[] = '@<meta.*?>@i';
		$patterns[] = '@<noscript>(.|\n)*?</noscript>@i';
		$patterns[] = '@&nbsp;@i';
		$patterns[] = '@</b>@i';
		
		// add custom patterns from filters array
		if (is_array($this->filters))
		{
			foreach ($this->filters as $value)
			{
				$patterns[] = $value;
			}
		}

		// process patterns with preg_replace
		foreach ($patterns as $value)
		{
			$test = preg_replace($value, ' ', $html);
			if (!is_null($test))
			{
				$html = $test;
			}
		}
		
		// uncomment line below to test filtered html
		// echo "<xmp>$html</xmp>"; exit;
		
		// check html against pattern and return result
		if (preg_match($pattern, $html, $matches))
		{
			return $matches;
		}
		else
		{
			return false;
		}
	}

	/**
	* The convertSize method is used to change the file size from the format that the host
	* uses (KB, MB, or GB) to the file size format that was requested from the test method.
	* It also uses the adjustment variable, which is used if the host converts their file
	* sizes wrong (the most noteable example is rapidshare.com, which needs adjustment).
	* 
	* @param number size (required) - the file size that was matched from the host
	* @param string sourceFormat (required) - the format that the host uses (not the requested format)
	* @return array result
	**/
	function convertSize($size, $sourceFormat)
	{
		// set variables for equation
		$size 				= str_replace(',', '', $size);
		$conversion			= $this->CONVERSION;
		$adjustment 		= $this->adjustment;
		$format['source']	= $sourceFormat;
		$format['final']	= $this->format;
		
		// set multiplier and divsor for equation
		foreach ($format as $key => $value)
		{
			switch ($value)
			{
				case 'KB':
					$x[$key] = 1;
					break;
				case 'MB':
					$x[$key] = $conversion;
					break;
				case 'GB':
					$x[$key] = $conversion * $conversion;
					break;
			}
		}
		
		// convert size to KB then convert to final format
		$size = $size * $adjustment;
		$size = ($size * $x['source']) / $x['final'];
		$result[0] = $size;
		
		return $result;
	}
}

	/**
	* eD2k Add all links feature
	*
	* @param string		$text		post text
	* @param int		$post_id	post id
	* @return string	display table with ed2k links features
	**/
	function make_addalled2k_link($text, $post_id)
	{
		global $user;
		$user->add_lang('mods/abbcode');
		
		$abbc3_unique_id = substr(base_convert(unique_id(), 16, 36), 0, 8);
		
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
				$t_ed2kinsert1 = "<br/><hr noshade color='#000000' size='1px'><div class='ed2k_div1'><a href='javascript:toggle_ed2k(\"$abbc3_unique_id\");'>" . $user->lang['ABBC3_ED2K_TAG'] . "</a></div> <div id='posttable".$abbc3_unique_id."' class='ed2k_div2' ><table border='0' cellspacing='0' cellpadding='0' valign='top' class='ed2k_table'>";
				
				$i = 0;
				foreach( $t_ed2k_reallinks as $t_ed2klink )
				{
					$t_ed2k_parts = explode( "|", $t_ed2klink );
					$t_ed2kinsert2 .= "<tr><td class='ed2k_col1' ><input type='checkbox' name='lnk' value='" . $t_ed2klink . "'></td><td class='ed2k_col2' >" . $t_ed2k_parts[2] . "</td></tr>";
					$i++;
				}
				
				$t_ed2kinsert3 = "<tr><td colspan='2' class='ed2k_col1'><input type='button' value='" . @$user->lang['SELECT_ALL_CODE'] . "' class='button2' onclick=checkAll('lnk')>&nbsp;&nbsp;<input type='button' value='" . @$user->lang['ABBC3_ED2K_ADD'] . "' class='button2' onclick=download('lnk',0,1)></td></tr></table></div>";
			}
			unset($t_ed2k_reallinks);
		}
		
		// remove padding
		return( substr( $ret . $t_ed2kinsert1 . $t_ed2kinsert2 . $t_ed2kinsert3, 1) );
	}

?>