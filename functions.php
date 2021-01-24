<?php 

define('VERSION', '3.2');

function get_version() {
	if ( defined('VERSION') ) {
		return VERSION;
	}
}

?>