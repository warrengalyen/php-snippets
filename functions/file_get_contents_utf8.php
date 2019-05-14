<?php
	/**
	 * Reads entire file into a string and encodes it as UTF-8.
	 *
	 * @author Warren Galyen
	 *
	 * @license https://raw.githubusercontent.com/warrengalyen/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/warrengalyen/PHP-Snippets/
	 *
	 * @package MechanikaDesign-PHP-Snippets
	 *
	 * @param String $url Name of the file to read. 
	 *
	 * @return String The function returns the read data or FALSE on failure. 
	 *
	 *	@version 1
	 */
	function file_get_contents_utf8($url){
		$raw = file_get_contents($url);
		if($raw === FALSE){
			return false;
		}else{
			return mb_convert_encoding($raw, 'UTF-8',
			mb_detect_encoding($raw, 'UTF-8, ISO-8859-1', true));
		}
	}
?>