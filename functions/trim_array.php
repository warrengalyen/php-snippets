<?php
	/**
	 * Trim all the elements in an array
	 *
	 * @author Warren Galyen
	 *
	 * @license https://raw.githubusercontent.com/warrengalyen/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/warrengalyen/PHP-Snippets/
	 *
	 * @package MechanikaDesign-PHP-Snippets
	 *
	 * @param array $array The array you want trimmed
	 *
	 * @return array Your trimmed array
	 *
	 *	@version 1
	 */
	function trim_array($array){
		$i=0;
		foreach($array as $item){
			$array[$i] = trim($array[$i]);
			$i++;
		}
		return array_values($array);
	}
?>