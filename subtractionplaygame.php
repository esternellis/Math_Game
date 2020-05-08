<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<?php

require_once("menu_bar.php");
//pick and print a problem, record correct answer
require_once('subtractiongame.php');
$current_problem = pick_problem();
session_start();
if(!isset($_SESSION['burger_image_sub'])){
	$_SESSION['burger_image_sub']=0;
}
$current_image = $_SESSION['burger_image_sub'];

//get user response and redirect to additioncheckanswer.php
echo <<<_END
	<br><br><br>
	<div class="center_text">
		$current_problem
	</div>
	<form action="subtractioncheckanswer.php?method=1&answer=$current_answer" method="post" class="center_text">
    	<input type="text" id="textbox" name="digitplace">
    	<input type="submit" id="button">
	</form>
	<br>
	<img src=$icecream_images[$current_image] class="center_image" width=200 height=$icecream_height[$current_image]>
_END;
?>
</body>
</html>
