<?php
	/**
	 * Gets the age in years from a given date
	 *
	 * @author Warren Galyen
	 *
	 * @license https://raw.githubusercontent.com/warrengalyen/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/warrengalyen/PHP-Snippets/
	 *
	 * @package MechanikaDesign-PHP-Snippets
	 *
	 * @param String $date The date you want to calculate from, example '1992-02-21'
	 *
	 * @return int The current age
	 *
	 *	@version 1
	 */
	function age_from_date($date){
		return intval(substr(date('Ymd') - date('Ymd', strtotime($date)), 0, -4));
	}
?>