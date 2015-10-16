<?php

	//edit
	
	//id mida muudame
	echo $_GET["edit"]
	
	//saada kätte kõige uuemad andmed selle id kohta
	//numbrimärk ja värv
?>
<h2>Muuda autot</h2>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 
	<label for="number_plate">Auto nr</label><br>
  	<input id="number_plate" name="number_plate" type="text" value=""><br><br>
	<label for="color">Värv</label><br>
  	<input name="color" type="text"> <value="<?=$color; ?>"><br><br>
  	<input type="submit" name="update" value="Salvesta">
  </form>