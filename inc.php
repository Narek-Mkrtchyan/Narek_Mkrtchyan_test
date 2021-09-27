<?
	require_once 'app/global.inc.php';

	$scrap = new Scraper();
	$scrap->handleRequest();
	
	echo 'OK';
?>
