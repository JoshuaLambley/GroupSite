<?php  
//Commented
//This file is required for it to run
require_once('../common.php');

	//Connects to the DBAnimal database
	$db = new DBAnimal();
	
	//Stores the result from animal query in the result value
	$result = ($db->animalQuery($_GET['type'], $_GET['age'], $_GET['gender']));
	
	//Loops through the amount of results returned an prints HTML with the results at each
	//index
	
	if(count($result) == 0){
		echo <<<ZZEOF
		<div class="AnBodyTotal" id="replace">
			<h1>No animals were found with your set parameters, please try again!</h1>
		</div>
ZZEOF;
	}
	
	for($i = 0; $i < count($result); $i++){
	echo <<<ZZEOF
		
		<div style="display: flex; flex-direction: row; border-style: outset; border-radius: 25px; border: rounded; margin-bottom: 10px; background-color: white;">
		
				<div><img style="width: 200px; height: 200px; margin-right: 4px;" src ="{$result[$i][4]}" ></div>
				<div>
					<div style="font-size: 2.5em;">This is {$result[$i][0]}</div>
					<div style="font-size: 1.2em; padding-top: .5em;">Type of animal: {$result[$i][1]}</div>
					<div style="font-size: 1.2em; padding-top: .5em;">They are: {$result[$i][2]}</div>
					<div class="Biography" style="font-size: 1.2em; padding-top: .5em;">{$result[$i][5]}</div>
				</div>	
			
		</div>
		
ZZEOF;
	}
?>

