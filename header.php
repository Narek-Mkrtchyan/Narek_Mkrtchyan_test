<? 
require_once 'app/global.inc.php';
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
          rel="Stylesheet"type="text/css"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>

    <title>test</title>
</head>
<body>

	<header class="header">
        <div class="center flex_center mobile_header">
            <menu class="flex_center navigator">
                <li ><a class="button_header" href="/">Home</a></li>
                <li ><a class="button_header" href="./topwords.php">Scraper</a></li>
            </menu>
            <form class="flex_center header_form" method="post">
                <div>
                    <span>From</span>
                    <input class="date_input" type="text" id="txtFrom" name="from_date" value="<?=$_POST['from_date']?>" autocomplete="off" />
                </div>
                <div>
                    <span>To</span>
                    <input class="date_input" type="text" id="txtTo" name="to_date" value="<?=$_POST['to_date']?>" autocomplete="off"/>
                </div>
                <input class="button_header" type="submit" value="Filter">
            </form>

        </div>

	</header>

	
