<?php

defined('is_running') or die('Not an entry point...');

require_once('Sermons.php');

class Gadget_Player{

	function __construct(){

		SermonsRenderPlayer();

	}

}

?>