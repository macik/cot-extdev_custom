<?PHP
/* ====================
[BEGIN_COT_EXT]
Code=extdev_custom
Name=extdev: Custom config
Description=Example of custom UI control in config relies on Custom var type
Version=1.0
Date=2012-Oct-23
Author=Andrey Matsovkin
Copyright=Copyright (c) 2011-2012, Andrey Matsovkin
Notes=
Auth_guests=R1
Lock_guests=W2345A
Auth_members=RW1
Lock_members=2345
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
color_select=10:custom:color_select_input():#aabbcc:Simple color setup
[END_COT_EXT_CONFIG]
==================== */

/**
 * Custom config  plugin for Cotonti CMF
 *
 * @package extdev_custom
 * @version 1.0
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2012
 * @license Distributed under BSD license.
 */

if (!defined('COT_CODE')) { die('Wrong URL ('.array_pop(explode("\\",__FILE__)).').'); }


?>