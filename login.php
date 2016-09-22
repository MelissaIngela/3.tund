<?php

	//var_dump($_GET);
	//echo"<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupEmail"])){
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["signupEmail"])){
			//oli tõesti tühi 
			$signupEmailError = "See väli on kohustuslik";
		}
	}
	$signupPasswordError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupPassword"])){
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["signupPassword"])){
			//oli tõesti tühi 
			$signupPasswordError = "See väli on kohustuslik";
		} else {
			
			//oli midagi, ei olnud tühi
			
			//kas pikkus vähemalt 8
			if (strlen ($_POST["signupPassword"]) < 8 ){
				
				$signupPasswordError = " Parool peab olema vähemalt 8 tähemärki pikk";
				
			}
			
		}
	}
	$signupEesnimiError = "";
	if (isset ($_POST["signupEesnimi"])){
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["signupEesnimi"])){
			//oli tõesti tühi 
			$signupEesnimiError = "See väli on kohustuslik";
		}
	}
	$signupPerekonnanimiError = "";
	if (isset ($_POST["signupPerekonnanimi"])){
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["signupPerekonnanimi"])){
			//oli tõesti tühi 
			$signupPerekonnanimiError = "See väli on kohustuslik";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
			<form method="POST">
				
				<input placeholder="Email" name= "loginEmail" type="email">
				<br><br>
				<input placeholder="Parool" name="loginpassword" type="password">
				<br><br>
				<input type="submit">
				
			</form>
		<h1>Loo kasutaja</h1>
			<form method="POST">
				
				<input placeholder="Email" name= "signupEmail" type="email"> <?php echo $signupEmailError; ?>
				<br><br>
				<input placeholder="Parool" name="signupPassword" type="password"><?php echo $signupPasswordError; ?>
				<br><br>
				<input type="submit" value="Loo kasutaja">
				
			</form>	
		<h1>Nimi</h1>
			<form method="POST">
				
				<input placeholder="Eesnimi" name= "signupEesnimi" type="name"> <?php echo $signupEesnimiError; ?>
				<br><br>
				<input placeholder="Perekonnanimi" name="signupPerekonnanimi" type="name"><?php echo $signupPerekonnanimiError; ?>
				<br><br>
				<input type="submit" value="Loo kasutaja">
				
			
		

	</body>
</html>