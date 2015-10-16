<?php

	//edit
	require_once("edit_functions.php");
	
	//id mida muudame
	if(!isset($_GET["edit"])){
		
		//ei ole aadressireal ?edit=midagi
		//suunan table.php lehele
		
		header("location:table.php");
	}else{
		//saada kätte uusimad andmed
		//nrmärk ja värv
		//küsime andmebaasist andmed id järgi
		
		//saadan kaasa id
		$car_object=getSingleCarData($_GET["edit"]);
		var_dump($car_object);
	}
	
	
	
	//saada kätte kõige uuemad andmed selle id kohta
	//numbrimärk ja värv
?>
<h2>Muuda autot</h2>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 
	<label for="number_plate">Auto nr</label><br>
  	<input id="number_plate" name="number_plate" type="text" value="<?php echo $car_object->number_plate;?>"><br><br>
	<label for="color">Värv</label><br>
  	<input name="color" type="text" value="<?=$car_object->color;?>"><br><br>
  	<input type="submit" name="update" value="Salvesta">
  </form>