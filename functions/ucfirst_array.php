<?php
	/**
	 * Makes the first letter in every element uppercase
	 *
	 * @author Warren Galyen
	 *
	 * @license https://raw.githubusercontent.com/warrengalyen/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/warrengalyen/PHP-Snippets/
	 *
	 * @package MechanikaDesign-PHP-Snippets
	 *
	 * @param array $array An array
	 *
	 * @return array An array
	 *
	 *	@version 1
	 */
	function ucfirst_array($array){
		for ($i = 0; $i < count($array); $i++) {
			$array[$i] = ucfirst($array[$i]);
		}
		return $array;
	}
?>