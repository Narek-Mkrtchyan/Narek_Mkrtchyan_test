<?
error_reporting(E_ALL ^ E_NOTICE);

define('ROOT', 'app/');
require_once ROOT.'config.inc.php';
require_once ROOT.'./class/DbConnect.php';
if (!$dbh = DbConnect::GetInstance()->mDbh) exit(1);

require_once  ROOT.'./class/Blog.php';
require_once  ROOT.'./class/TWords.php';
require_once  ROOT.'./class/Page.php';
require_once  ROOT.'./class/Scraper.php';
?>