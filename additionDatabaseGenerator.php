<?php

function generate_question_and_answer(){

	$myFile = fopen("additionDB.txt", "w+");
	
	for ($i=0; $i < 300; $i++) { 
		$numOne = getRanNum();
		$numTwo = getRanNum();
		$answer = $numOne + $numTwo;		
		fwrite($myFile, "$numOne $numTwo $answer\n");


	}

}

function getRanNum(){
	$num = rand(1, 99);
	return $num; 
}

generate_question_and_answer();

?>

