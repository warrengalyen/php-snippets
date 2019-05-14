<?php
	/**
	 * Creates hyperlinks from all urls found in a string
	 *
	 * @author Warren Galyen
	 *
	 * @license https://raw.githubusercontent.com/warrengalyen/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/warrengalyen/PHP-Snippets/
	 *
	 * @package MechanikaDesign-PHP-Snippets
	 *
	 * @param String $raw The location on the file on the server, example files/file.zip
	 * @param array $array An internal array, don't pass it in
	 *
	 * @return String the same String as provided but with urls as hyperlinks
	 *
	 *	@version 1
	 */
	function linkify_text($raw, $array=array()) {
		$attributes = '';
		$raw = " {$raw}";
		foreach ($array as $attribute => $value) { $attributes .= " {$attribute}=\"{$value}\""; }
		$raw = preg_replace('`([^"=\'>])((http|https)://[^\s<]+[^\s<\.)])`i',
		'$1<a href="$2"'.$attributes.'>$2</a>', $raw);
		return substr($raw, 1);
	}
?>