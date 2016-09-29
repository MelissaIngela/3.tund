<?php
	$database = "if16_melissabramanis";
	//var_dump($GLOBALS);
	
	function signup($email, $password) {
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],$GLOBALS["serverPassword"], $GLOBALS["database"]);
		
		$stmt = $mysqli->prepare("INSERT INTO user_sample (email, password) VALUES (?, ?)");
		
		echo $mysqli-> error;
		
		$stmt->bind_param("ss", $email, $password);
		
		if($stmt->execute()){
			echo "salvestamine õnnestus";
				
		}else{
			echo "ERROR  ".$stmt->error;
		}
		
	}












	/*function sum($x, $y){
		
		$answer = $x+$y;
		
		return $answer;
	}
	function hello ($firstname, $familyname){
		
		$name = $firstname . $familyname;
		return "Tere tulemast ".$firstname." ".$familyname." !";
		
	}
	
	
	echo sum(354534,586745);
	echo"<br>";
	echo sum (1,2);
	echo"<br>";
	$firstname = "Melissa Ingela";
	$familyname = "Bramanis";
	echo  hello($firstname, $familyname);*/
	


?>