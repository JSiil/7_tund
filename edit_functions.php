<?php

	require_once("../../configglobal.php");
	$database = "if15_jaagsii";
	//edit functions
	function getSingleCarData($edit_id){
		
		echo"id on".$edit_id;
		
		$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
		
		$stmt=$mysqli->prepare("SELECT number_plate, color FROM car_plates WHERE id=? AND deleted IS NULL");
		//asendan?märgi
		$stmt->bind_param("i", $edit_id);
		$stmt->bind_result($number_plate, $color);
		$stmt->execute();
		
		//tekitan objekti
		$car=new Stdclass();
		
		//saime ühe rea andmeid
		if($stmt->fetch()){
			//saan siin alles kasutada bind_result muutujaid
			$car->number_plate=$number_plate;
			$car->color=$color;
			
		}else{
			
			//ei saanud rida andmeid kätte
			//sellist id'd pole olemas
			// see rida on kustutatud
			header("Location: table.php");
		}
		
		return $car;
		
		$stmt->close();
		$mysqli->close();
	}
	
		
?>