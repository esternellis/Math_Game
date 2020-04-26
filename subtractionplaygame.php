<!DOCTYPE html>
<html>
<head>
</head>
<body>

<style type="text/css">
.center{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
.center_text{
	text-align: center;
}
#problem{
	width:400px;
	margin: 0px 0px 0px 700px;
	text-align: right;
}
</style>

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
    	<input type="text" id="digitplace" name="digitplace">
    	<input type="submit">
	</form>
	<br>
	<img src=$burger_images[$current_image] class="center" width=300 height=$burger_height[$current_image]>
_END;
?>
</body>
</html>
