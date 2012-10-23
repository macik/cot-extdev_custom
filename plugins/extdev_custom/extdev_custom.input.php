<?PHP
/* ====================
[BEGIN_COT_EXT]
Hooks=input
[END_COT_EXT]
==================== */

/**
 * Custom config registers filter function
 *
 * @package extdev_custom
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2012
 * @license Distributed under BSD license.
 */

defined('COT_CODE') or die('Wrong URL');

// runs only in current plugin config page
if (defined('COT_ADMIN')
	&& (($_GET['p']=='extdev_custom' && $_GET['n']=='edit' && $_GET['o']=='plug' && $_GET['m']=='config') ))
{

	define('EXTDEV_CUSTOM_CONF',true);

	/**
	 * A filter for import color values from RGB triple input fields
	 * and returns it as HEX code (in #aabbcc format)
	 *
	 * @param string $value Actualli not neede but used for compatibility with custom filters
	 * @param string $name Input name
	 * @return string Color in RGB HEX fotmat (#aabbcc)
	 */
	function colortriple_filter($value, $name)
	{
		$components = array('R','G','B');
		$colors = is_array($value) ? $value : array();
		foreach ($components as $c) {
			$col = $colors[$c];
			$col = is_numeric($col) ? abs(floor($col)) : 0;
			$col = ($col > 255) ? 255 : $col;
			$col = dechex($col);
			$colors[$c] = str_pad($col, 2,'0',STR_PAD_LEFT);
		}
		return '#'.strtolower(implode('',$colors));
	}

	$cot_import_filters['color_select'][] = 'colortriple_filter';
}

?>