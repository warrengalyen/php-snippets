<?php
	/**
	 * Checks if an email is valid, can take an mx blacklist
	 *
	 * @author Warren Galyen
	 *
	 * @license https://raw.githubusercontent.com/warrengalyen/PHP-Snippets/master/LICENSE Unlicense
	 *
	 * @link https://github.com/warrengalyen/PHP-Snippets/
	 *
	 * @package MechanikaDesign-PHP-Snippets
	 *
	 * @param String $email The email you want to check
	 *
	 * @param array $blacklist An array containing mx servers you want to blacklist. Example: array('domain.com', 'example,com'), OPTIONAL
	 *
	 * @return boolean true if the domain is valid otherwise false
	 *
	 * @version 1
	 */
	function is_valid_email($email, $blacklist = array()){
				
		if(preg_match('/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/', $email)){
			
			$ret = getmxrr(explode("@", $email)[1], $mxrecords);
			
			if(count($blacklist)>0){				
				foreach($mxrecords as $mx){
					if(in_array($mx, $blacklist)){
						return false;
					}
				}
				return true;
			}
			
			return $ret;
			
		}else{ return false; }
	}
?>