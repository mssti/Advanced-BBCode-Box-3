<?php
/**
*
* @package phpBB3
* @version $Id: abbcode_custom.php,v 1.0.8 2008/03/01 03:01:00 leviatan21 Exp $
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

if (!defined('IN_PHPBB'))
{
	exit;
}

$custom_abbcode_ary = array( //0=($0)<br/>1=($1)<br/>2=($2)<br/>3=($3)<br/>4=($4)<br/>5=($5)<br/>6=($6)<br/>7=($7)

	// [rapidshare]file url[/rapidshare\] Code..
	'ABBC3_RAPIDSHARE'	=> array( 'id' => 61	,'display' => false	,'image' => 'rapidshare.gif',
	'found'				=> "#\[rapidshare\](.*?)\[\/rapidshare\]#sie",
	'regexp'			=> "\$this->rapidshare_pass('\$1')"),

	// [flash width=X height=X]Flash URL[/flash] code..
	'ABBC3_FLASH'		=> array( 'id' => 100	,'display' => false	,'image' => 'flash.gif',
	'found'				=> "#\[flash (width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9])\](.*?)\[/flash\]#si",
	'regexp'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="$2" height="$5"><param name="movie" value="$6" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="$6" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="$2" height="$5" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>'),
//	'found'				=> "#\[flash( (width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?\](.*?)\[/flash\]#sie",
//	'regexp'			=> 	"\$this->BBvideo_pass('\$7', '\$3', '\$6')"),
	
	// Flv: [flv width,height]http://url[/flv] Code..
	'ABBC3_FLV'			=> array( 'id' => 101	,'display' => false	,'image' => 'flashflv.gif',
	'found'				=> "#\[flv (width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9])\](.*?)\[/flv\]#si",
	'regexp'			=> '<embed src="./images/flvplayer.swf" width="$2" height="$5" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=$6&autostart=false" /><br/>'),
//	'found'				=> "#\[flv( (width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?\](.*?)\[/flv\]#sie",
//	'regexp'			=> 	"\$this->BBvideo_pass('\$7', '\$3', '\$6')"),
//	'regexp'			=> '<embed src="./images/flvplayer.swf" width="' . ( ( '$3' != 0 ) ? '$3' : $this->abbcode_config['ABBC3_VIDEO_width'] ) . '" height="' .  ( ( '$6' != 0 ) ? '$6' : $this->abbcode_config['ABBC3_VIDEO_height'] ) . '" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=$7&autostart=false" /><br/>'),

	'ABBC3_BBVIDEO'		=> array( 'id' => 63	,'display' => true	,'image' => 'bbvideo.gif',
	'found' => "#\[BBvideo( (width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?\](.*?)\[/BBvideo\]#sie",
	'regexp' => "\$this->BBvideo_pass('\$7', '\$3', '\$6')"),

	// [video width=X height=X]file Video URL[/video] code..
	'ABBC3_VIDEO'		=> array( 'id' => 102	,'display' => true	,'image' => 'video.gif',
	'found'				=> "#\[video (width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9])\](.*?)\[/video\]#si",
	'regexp'			=> '<object width="$2" height="$5" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_' . $this->abbcode_config['ABBC3_UID'] . '"><param name="url" value="$6" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$6" /><!--[if !IE]>--><object width="$2" height="$5" type="video/x-ms-wmv" data="$6"><param name="src" value="$6" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>'),
	
	// [stream]file Sound URL[/stream] code..
	'ABBC3_STREAM'		=> array( 'id' => 103	,'display' => false	,'image' => 'sound.gif',
	'found'				=> "#\[stream\](.*?)\[/stream\]#si",
	'regexp'			=> '<object width="320" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_' . $this->abbcode_config['ABBC3_UID'] . '"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="320" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>'),
	
	// [quicktime width=X height=X]file Quicktime URL[/quicktime] code..
	'ABBC3_QUICKTIME'	=> array( 'id' => 104	,'display' => false	,'image' => 'quicktime.gif',
	'found'				=> "#\[quicktime width=([0-9]?[0-9]?[0-9]) height=([0-9]?[0-9]?[0-9])\](.*?)\[/quicktime\]#si",
	'regexp'			=> '<object id="qtstream_' . $this->abbcode_config['ABBC3_UID'] . '" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="$1" height="$2"><param name="src" value="$3" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_' . $this->abbcode_config['ABBC3_UID'] . '" src="$3" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="$1" height="$2" type="video/quicktime" autoplay="false"></embed></object>'),
	
	// [ram]file Ram URL[/ram] code..
	'ABBC3_RAM'			=> array( 'id' => 105	,'display' => false	,'image' => 'ram.gif',
	'found'				=> "#\[ram width=([0-9]?[0-9]?[0-9]) height=([0-9]?[0-9]?[0-9])\](.*?)\[/ram\]#si",
	'regexp'			=> '<object id="rmstream_' . $this->abbcode_config['ABBC3_UID'] . '" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="$1" height="$2"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '" /><param name="prefetch" value="false" /><embed name="rmstream_' . $this->abbcode_config['ABBC3_UID'] . '" type="audio/x-pn-realaudio-plugin" src="$3" width="$1" height="$2" autostart="false" controls="ImageWindow" console="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '" prefetch="false"></embed></object><br /><object id="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="$1" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '" type="audio/x-pn-realaudio-plugin" width="$1" height="36" controls="ControlPanel" console="ctrls_' . $this->abbcode_config['ABBC3_UID'] . '"></embed></object>'),
	
	// [Gvideo]video.google URL[/Gvideo] code..
	'ABBC3_GVIDEO'		=> array( 'id' => 106	,'display' => false	,'image' => 'googlevid.gif',
	'found'				=> "#\[Gvideo\]http://video.google.(.*?)/videoplay\?docid=(.*?)\[/Gvideo\]#si",
	'regexp'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="425" height="350"><param name="movie" value="http://video.google.$1/googleplayer.swf?docid=$2" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.$1/googleplayer.swf?docid=$2" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="425" height="350" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>'),
	
	// [youtube]YouTube URL[/youtube] code..
	'ABBC3_YOUTUBE'		=> array( 'id' => 107	,'display' => false	,'image' => 'youtube.gif',
	'found'				=> "#\[youtube\]http://((.*?)?)youtube.com/watch\?v=([0-9A-Za-z-_]{11})[^[]*\[/youtube\]#is",
	'regexp'			=> '<object width="425" height="350"><param name="movie" value="http://$2youtube.com/v/$3" /><param name="wmode" value="transparent" /><embed src="http://$2youtube.com/v/$3" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>'),
	
	// [veoh]Veoh URL[/veoh] code.. (http://www.phpbb.com/community/viewtopic.php?p=3929705#p3929705)
	'ABBC3_VEOH'		=> array( 'id' => 108	,'display' => false	,'image' => 'veoh.gif',
	'found'				=> "#\[veoh\]http://(.*?).veoh.com/videos/(.*?)\[/veoh\]#si",
	'regexp'			=> '<embed src="http://\\1.veoh.com/videodetails2.swf?permalinkId=\\2&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="540" height="438" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>'),
	
	// [collegehumor]collegehumor video URL[/collegehumor] Code..
	'ABBC3_COLLEGE'		=> array( 'id' => 109	,'display' => false	,'image' => 'collegehumor.gif',
	'found'				=> "#\[collegehumor\]http://www.collegehumor.com/video:(.*?)\[/collegehumor\]#si",
	'regexp'			=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=$1&fullscreen=1" width="480" height="360" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=$1&fullscreen=1" /></object>'),
	
	// [dm]Video ID[/dm] code..
	'ABBC3_DMOTION'		=> array( 'id' => 110	,'display' => false	,'image' => 'dailymotion.gif',
	'found'				=> "#\[dm\](.*?)\[/dm\]#si",
	'regexp'			=> '<object width="420" height="352"><param name="movie" value="http://www.dailymotion.com/swf/$1" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/$1" type="application/x-shockwave-flash" width="420" height="352" allowFullScreen="true" allowScriptAccess="never"></embed></object>'),
	
	// [gamespot] Gamespot video URL [/gamespot] Code..
	'ABBC3_GAMESPOT'	=> array( 'id' => 111	,'display' => false	,'image' => 'gamespot.gif',
	'found'				=> "#\[gamespot\]http://www.gamespot.com/video/(.*?)/(.*?)\[/gamespot\]#si",
	'regexp'			=> '<embed id="mymovie" width="432" height="355" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D$2%26pid%3D$1%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>'),
	
	// [gametrailers]Gametrailers video URL[/gametrailers] Code..
	'ABBC3_GAMETRAILERS'=> array( 'id' => 112	,'display' => false	,'image' => 'gametrailers.gif',
	'found'				=> "#\[gametrailers\]http://www.gametrailers.com/player/(.*?).html\[/gametrailers\]#si",
	'regexp'			=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="480" height="392"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=$1" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=$1" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="480" height="392"></embed></object>'),
	
	// [ignvideo]ING video URL [/ignvideo] Code..
	'ABBC3_IGNVIDEO'	=> array( 'id' => 113	,'display' => false	,'image' => 'ign.gif',
	'found'				=> "#\[ignvideo\](.*?)\[/ignvideo\]#si",
	'regexp'			=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="$1" type="application/x-shockwave-flash" width="433" height="360" ></embed>'),
	
	// [liveleak]Liveleak video URL [/liveleak] Code..
	'ABBC3_LIVELEAK'	=> array( 'id' => 114	,'display' => false	,'image' => 'liveleak.gif',
	'found'				=> "#\[liveleak\]http://www.liveleak.com/view\?i=(.*?)\[/liveleak\]#si",
	'regexp'			=> '<object type="application/x-shockwave-flash" width="450" height="370" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=$1"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>'),
	
	// Custom BBcodes

// Break line and continue down ?
//	'ABBC3_BREAK100'	=> array( 'id' => 200	,'display' => false	,'image' => 'spacer.gif'	,'found' => ""											,'regexp' => ""),
// Display icon division for tags ?
//	'ABBC3_DIVISION100'	=> array( 'id' => 201	,'display' => false	,'image' => 'spacer.gif'	,'found' => ""											,'regexp' => ''),

	
);

#	// [stage6 width=X height=X]Video ID[/stage6] code..
#	'ABBC3_STAGE6'		=> array( 'id' => 106	,'display' => false	,'image' => 'stage6.gif',
#	'found'				=> "#\[stage6 width=([0-9]?[0-9]?[0-9]) height=([0-9]?[0-9]?[0-9])\](.*?)\[/stage6\]#si",
#	'regexp'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="$1" height="$2" ><param name="src" value="http://video.stage6.com/$3/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/$3/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="$1" height="$2" /></object><br />'),
	
#	// [Bebo]Bebo video URL[Bebo] Code..
#	'ABBC3_BEBO'		=> array( 'id' => 117	,'display' => false	,'image' => 'spacer.gif',
#	'found'				=> "#\[Bebo\](.*?)\[/Bebo\]#si",
#	'regexp'			=> '<embed width="425" height="350" src="http://static.videoegg.com/videoegg/loader.swf" FlashVars="$1" quality="high" allowScriptAccess="never" bgcolor="#FFFFFF" scale="noscale"wmode="window" name="VE_Player" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /><br>'),

#	// [Putfile]Putfile video URL [/Putfile] Code..
#	'ABBC3_PUTFILE'		=> array( 'id' => 118	,'display' => false	,'image' => 'spacer.gif',
#	'found'				=> "#\[Putfile\]http://media.putfile.com/(.*?)\?pos=(.*?)\[/Putfile\]#si",
#	'regexp'			=> '<object type="application/x-shockwave-flash" data="http://feat.putfile.com/flow/putfile.swf?videoFile=$1" height="349" width="420" align="middle"><param name="movie" value="http://feat.putfile.com/flow/putfile.swf?videoFile=$1" /><param name="quality" value="high" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://feat.putfile.com/flow/putfile.swf?videoFile=$1" allowFullScreen="true" allowScriptAccess="always" height="349" width="420"></embed></object>'),

#	// [video]file Video URL[/video] code..
#	'ABBC3_VIDEO'		=> array( 'id' => 116	,'display' => false	,'image' => 'video.gif',
#	'found'				=> "#\[video\](.*?)\[/video\]#si",
#	'regexp'			=> '<object id="MediaPlayer' . $this->abbcode_config['ABBC3_UID'] . '" width=320 height=286 classid="CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95" standby="Loading Windows Media Player components..." type="application/x-oleobject" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112"><param name="filename" value="$1"><param name="Showcontrols" value="True"><param name="autoStart" value="True"><embed type="application/x-mplayer10" src="$1" name="MediaPlayer" width=320 height=240></embed></object>'),

?>