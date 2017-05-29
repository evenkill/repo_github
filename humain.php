<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire mot de passe</title>
	</head>
	
	<body>
		<div id="identité">	

				Votre identité :<br />
				<ul>
					<li><?echo 'Votre pseudo : ' . htmlspecialchars($_POST['pseudo']) . ' ';?></li>
					<li><?echo 'Votre âge : ' . htmlspecialchars($_POST['age']) . 'ans';?></li>
					<li><?echo 'Votre couleur de peau : ' . htmlspecialchars($_POST['color_skin']) . ' ';?></li>
					<li><?echo 'Votre taille : ' . htmlspecialchars($_POST['tall']) . ' cm'?></li>
					<li><?echo 'Votre poids : ' . htmlspecialchars($_POST['tall']) . ' kg'?></li>
				</ul>
		</div>
	</body>
</html>