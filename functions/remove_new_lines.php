<?php
	/**
	 * Removes new lines and tabs
	 *
	 * @author Warren Galyen
	 *
	 * @license https://raw.githubusercontent.com/warrengalyen/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/warrengalyen/PHP-Snippets/
	 *
	 * @package MechanikaDesign-PHP-Snippets
	 *
	 * @param String $raw The string you want to remove the lines from
	 *
	 * @return String Your string without the lines and tabs
	 *
	 *	@version 1
	 */
	function remove_new_lines($raw){
		$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
		return str_replace($newlines, "", html_entity_decode($raw));
	}
?>