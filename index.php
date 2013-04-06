<?php
	// Include the site configuration file:
	require_once(dirname(__FILE__)."/scripts/config.php");
	// Include Biscuit core:
	require_once("core.php");
	$Biscuit = new Biscuit();
	$Biscuit->run();
	$Biscuit->render();
	Biscuit::end_program(true);
?>
