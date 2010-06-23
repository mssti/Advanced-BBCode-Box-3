<?php
/**
* @package: phpBB 3.0.5 :: Advanced BBCode box 3 -> root/includes/acp/info
* @version: $Id: acp_abbcode.php, v 1.0.12 2009/08/01 09:08:01 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
**/

/**
* @package module_install
*/
class acp_abbcodes_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_abbcodes',
			'title'		=> 'ACP_ABBCODES',
			'version'	=> '1.0.12',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_ABBC3_SETTINGS', 'auth' => 'acl_a_styles', 'cat' => array('ACP_ABBCODES')),
				'bbcodes'	=> array('title' => 'ACP_ABBC3_BBCODES' , 'auth' => 'acl_a_bbcode', 'cat' => array('ACP_ABBCODES')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>