<?php

/**
 * A simple description for this script
 *
 * PHP Version 5.2.0 or Upper version
 *
 * @package    Dura
 * @author     Hidehito NOZAWA aka Suin <http://suin.asia>
 * @copyright  2010 Hidehito NOZAWA
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU GPL v3
 *
 */

class Dura_Class_Icon
{

	// bluelovers
	static $iconDir = '/static/style/icon';
	static $iconPrefix = '';
	static $iconExt = 'png';
	// bluelovers

	public static function &getIcons()
	{
		static $icons = null;

		if ($icons === null)
		{
			$icons = array();
			$iconDir = DURA_PATH . Dura_Class_Icon::$iconDir;

			if ($dir = opendir($iconDir))
			{
				while (($file = readdir($dir)) !== false)
				{
					if (preg_match('/^' . Dura_Class_Icon::$iconPrefix . '(.+)\.' . Dura_Class_Icon::$iconExt . '$/', $file, $match))
					{
						list($dummy, $icon) = $match;
						$icons[$icon] = $file;
					}
				}

				closedir($dir);
			}
		}

		return $icons;
	}

	// bluelovers
	public static function getIconColor($icon)
	{
		static $_map;

		if (!isset($_map))
		{
			/*
			@include DURA_TRUST_PATH . '/resource/colors.php';
			*/
			$_icon_color = new Dura_Resource_Colors();

			$_map = array();

			$_map['icon_color'] = (array )$_icon_color->toArray();
		}

		if ((string )$icon)
		{
			$color = empty($_map['icon_color'][(string )$icon]) ? 'gray' : $_map['icon_color'][(string )$icon];
		}
		else
		{
			return false;
		}

		return $color;
	}
	// bluelovers

	public static function getIconUrl($icon)
	{
		$url = DURA_URL . Dura_Class_Icon::$iconDir . '/' . Dura_Class_Icon::$iconPrefix . $icon . '.' . Dura_Class_Icon::$iconExt;
		return $url;
	}
}
