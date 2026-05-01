<?php
	$id = ''; $nom_etu = ''; $prenom_etu = '';
	ob_start();
?>




<style>
    form { display: flex; flex-direction: column; gap: 10px; }
</style>
<form method = "POST" action = "traitement.php">
	<input type = "hidden" name = "key" value = "<?=$id ?>">
	<input type="text" placeholder = "votre nom" name = "nomE" value = "<?=$nom_etu ?>">
	<input type = "text" placeholder = "votre prenom" name = "preE" value = "<?=$prenom_etu ?>" >
	<input type="submit" name ="btn" value="Ajouter">
	<select>
		<option>SIL</option>
		<option>SI</option>
		<option>RIT</option>
		<option>ER</option>
	</select>
	
</form>

<?php
	$content = ob_get_clean();
	require "main.html";
?>

