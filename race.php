<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	
	<body>
		

		<?php
		if (isset($_POST['race']) AND $_POST['race'] == "humain") 
		{
		
		?>
		<h1>Vous avez choisi d'être un Humain</h1>
		<div id="physique">
			<form action="humain.php" method="post">
				<fieldset>
				<legend>Votre identité :</legend>

					<label for="pseudo">Veuillez choisir un pseudo :</label>
						<input type="text" name="pseudo" id="pseudo" maxlength="20" /><br />
					<br /><br />

					<label for="age">Indiquez votre âge :</label>
						<input type="number" name="age" id="age" min="18" max="60" placeholder="Entre 18 et 60 ans" /><br />
					<br /><br />	
					
					<label for="color_skin">Votre couleur de peau :</label><br />
						<input type="radio" name="color_skin" id="blanc" value="blanc" />
						<label for="color_skin">Blanc</label><br />

						<input type="radio" name="color_skin" id="noir" value="noir" />
						<label for="color_skin">Noir</label><br />

						<input type="radio" name="color_skin" id="metisse" value="metisse" />
						<label for="color_skin">Métisse</label><br />
					<br /><br />

					<label for="tall">Votre taille en cm :</label><br />
						<input type="number" name="tall" id="tall" min="150" max="220" placeholder="Entre 150 et 220 cm" />
					<br /><br />
						
					<label for="tall">Votre poids en kg :</label><br />
						<input type="number" name="weight" id="weight" min="50" max="130" placeholder="Entre 50 et 130 kg"/>
					<br />

				</fieldset>



				
			<input type="submit" value="Valider" />
			</form>
		
		<?php
		}
		
		elseif (isset($_POST['race']) AND $_POST['race'] == "nain") 
		{
		
		?>
		<h1>Vous avez choisi d'être un Nain</h1>
		
		<?php	
		}

		else 
		{
			echo 'Vous n\'avez rien choisi';
		}
	    ?>
	</body>
</html>