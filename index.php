<?php
	require_once(dirname(__FILE__)."/framework/bootstrap.php");
	$Biscuit = Bootstrap::load();
	$Biscuit->dispatch();
	Bootstrap::end_program(true);
?>