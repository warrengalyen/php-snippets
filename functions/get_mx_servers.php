<?php
	/**
	 * Gets the mx servers of a domain
	 *
	 * @author Warren Galyen
	 *
	 * @license https://raw.githubusercontent.com/warrengalyen/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/warrengalyen/PHP-Snippets/
	 *
	 * @package MechanikaDesign-PHP-Snippets
	 *
	 * @param String $domain The domain you want to check
	 *
	 * @return array An array with the mx servers used by the domain
	 *
	 *	@version 1
	 */
	function get_mx_servers($domain){
		$mx = array();
		getmxrr($domain,$mx);
		return $mx;
	}
?>