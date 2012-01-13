<?php
global $AoWoWconf;

// -- Trinity Database --
$AoWoWconf['mangos']['host']	 = '127.0.0.1';
$AoWoWconf['mangos']['user']	 = 'root';
$AoWoWconf['mangos']['pass']	 = '';
$AoWoWconf['mangos']['db']		 = 'tc2_world';
$AoWoWconf['mangos']['aowow']	 = 'aowow_'; // AoWoW table prefix
$AoWoWconf['mangos']['aowow_db'] = 'wowhead'; // AoWoW DB
// -- Realmd Database --
$AoWoWconf['realmd']['host']	= '127.0.0.1';
$AoWoWconf['realmd']['user']	= 'root';
$AoWoWconf['realmd']['pass']	= '';
$AoWoWconf['realmd']['db']		= 'tc2_auth_dev';
// -- Characters Database -- currently unused
$AoWoWconf['characters']['host']	= '127.0.0.1';
$AoWoWconf['characters']['user']	= 'root';
$AoWoWconf['characters']['pass']	= '';
$AoWoWconf['characters']['db']		= 'tc2_characters';
// -- Site Configuration --
// Title of the website
$AoWoWconf['aowow']['name'] = 'AvalonHead';
// Skin, only 'wowhead' is supported currently
$AoWoWconf['aowow']['template'] = 'wowhead';
// Time to keep cache in seconds (Default: 1 week)
$AoWoWconf['aowow']['cache_time'] = (60*60*24*7);
// Default locale
$AoWoWconf['locale'] = 2;
// Allow account creating
$AoWoWconf['register'] = false;
// Used with register, account expansion
$AoWoWconf['expansion'] = 2;
// Limit of some SQL queries
$AoWoWconf['limit'] = 300;
// Disable cache, show smarty console panel
$AoWoWconf['debug'] = false;
// Map object grouping factor. Meters = 10^param.
// 0 to disable.
// 1 is default and highly recommended.
// Do not use float values or values > 3.
$AoWoWconf['map_grouping'] = 1;

?>