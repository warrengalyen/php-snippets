<?php
	/**
	 * Make a file_get_contents but include post data
	 *
	 * @author Warren Galyen
	 *
	 * @license https://raw.githubusercontent.com/warrengalyen/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/warrengalyen/PHP-Snippets/
	 *
	 * @package MechanikaDesign-PHP-Snippets
	 *
	 * @param String $url The url you want to send the request to
	 * @param array $post_variables The post varables you want to send, example array('user' => 'abc', 'pass' => '123')
	 *
	 * @return String The data send back from page
	 *
	 *	@version 1
	 */
	function file_get_contents_post($url, $post_variables){
		$post_data = http_build_query($post_variables);
		$opts = array('http' =>
			array(
				'method'  => 'POST',
				'header'  => 'Content-type: application/x-www-form-urlencoded',
				'content' => $post_data
			)
		);
		$context  = stream_context_create($opts);
		return file_get_contents($url, false, $context);
	}
?>