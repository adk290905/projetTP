<?php
	$id = ''; $nom_etu = ''; $prenom_etu = '';
	ob_start();
?>


<form method = "POST" action = "traitement.php">
	<center><h2>Inscription</h2></center>
	<input type = "hidden" name = "key" value = "<?=$id ?>"required>
	<input type="text" placeholder = "votre nom" name = "nomE" value = "<?=$nom_etu ?>" required>
	<input type = "text" placeholder = "votre prenom" name = "preE" value = "<?=$prenom_etu ?>" required>
	
	<select>
		<option>Choisissez une option</option>
		<option>SIL</option>
		<option>SI</option>
		<option>RIT</option>
		<option>ER</option>
	</select>
	<input type="submit" name ="btn" value="Ajouter">
	
</form>

<?php
	$content = ob_get_clean();
	require "main.html";
	//a
?>

