<?php

/**
* Only adjust bitfields, do not rewrite text...
*
* You should make a backup from your users, posts and privmsgs table in case something goes wrong
* Forum descriptions and rules need to be re-submitted manually.
*/

set_time_limit(0);

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path . 'includes/message_parser.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

// Other setting
$abbcode_bitfield = new bitfield();
$abbcode_bitfield->set(99);

$echos = 0;

echo '<h2>Updating user signatures</h2>';

// Adjust user signatures
$sql = 'SELECT user_id, user_sig, user_sig_bbcode_uid, user_sig_bbcode_bitfield
	FROM ' . USERS_TABLE . '
	WHERE user_sig_bbcode_bitfield = "" ';
$result = $db->sql_query($sql);

while ($row = $db->sql_fetchrow($result))
{
	// Search for bbcodes
	if ($row['user_sig_bbcode_uid'] && $row['user_sig'] && preg_match('#\[(.*?)\](.*?)\[/(.*?)\]#is', $row['user_sig']) )
	{
		// Update signatures
		$sql = 'UPDATE ' . USERS_TABLE . " SET user_sig_bbcode_bitfield = '" . $abbcode_bitfield->get_base64() . "'
			WHERE user_id = " . $row['user_id'];
		$db->sql_query($sql);

		if ($echos > 200)
		{
			echo '<br />' . "\n";
			$echos = 0;
		}

		echo $echos;
		$echos++;

		flush();
	}
}
$db->sql_freeresult($result);

echo "<br />Finished with signatures...<br />";

echo '<h2>Updating posts</h2>';

// Now adjust posts
$sql = 'SELECT post_id, post_text, bbcode_uid, enable_bbcode, enable_smilies, enable_sig, bbcode_bitfield
	FROM ' . POSTS_TABLE . '
	WHERE bbcode_bitfield = "" ';
$result = $db->sql_query($sql);

while ($row = $db->sql_fetchrow($result))
{
	// Search for bbcodes
	if ($row['enable_bbcode'] && preg_match('#\[(.*?)\](.*?)\[/(.*?)\]#is', $row['post_text']) )
	{
		// Update posts
		$sql = 'UPDATE ' . POSTS_TABLE . " SET bbcode_bitfield = '" . $abbcode_bitfield->get_base64() . "'
			WHERE post_id = " . $row['post_id'];
		$db->sql_query($sql);

		if ($echos > 200)
		{
			echo '<br />' . "\n";
			$echos = 0;
		}

		echo $echos;
		$echos++;

		flush();
	}
}
$db->sql_freeresult($result);

echo "<br />Finished with topics...<br />";

echo '<h2>Updating private messages</h2>';

// Now Update pms
$sql = 'SELECT msg_id, message_text, bbcode_uid, enable_bbcode, bbcode_bitfield
	FROM ' . PRIVMSGS_TABLE . '
	WHERE bbcode_bitfield = "" ';
$result = $db->sql_query($sql);

while ($row = $db->sql_fetchrow($result))
{
	// Search for bbcodes
	if ($row['enable_bbcode'] && preg_match('#\[(.*?)\](.*?)\[/(.*?)\]#is', $row['message_text']))
	{
		// Update pms
		$sql = 'UPDATE ' . PRIVMSGS_TABLE . " SET bbcode_bitfield = '" . $abbcode_bitfield->get_base64() . "'
			WHERE msg_id = " . $row['msg_id'];
		$db->sql_query($sql);

		if ($echos > 200)
		{
			echo '<br />' . "\n";
			$echos = 0;
		}

		echo $echos;
		$echos++;

		flush();
	}
}
$db->sql_freeresult($result);

echo '<br />Finished with private messages...<br />';

// Done
echo '<h1>Finished!</h1>';

$db->sql_close();

?>