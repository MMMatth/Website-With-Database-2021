<!DOCTYPE html>
<html>
<head>
	<title>Editeur</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="style-ed.css">
	<link sizes="16x16" rel="shortcut icon" type="image/png" href="https://i.ibb.co/XzpdKJx/ico.png"/>
	<!--Importation d'une police via googe font-->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

</head>

<body>
<!--menu-->
<!-- On vas faire un menu avec du javascript directement dedans deja 
on definie l'image avec le src ensuite on fait que quand on survole 
l'image ca met le gif et si on enleve la souris de au dessus on 
remet l'image en png-->
<div class="view_port">
	<nav>
		<ul>
			<li><a class = "menu" href="#">
			    <img width="120%"
			    src="https://cdn.discordapp.com/attachments/506495193936035844/901135595710054440/Illustration_sans_titre.png" 
			     onmouseover="this.src='https://cdn.discordapp.com/attachments/506495193936035844/901131027303506011/Illustration_sans_titre.gif'" 
			     onmouseout="this.src='https://cdn.discordapp.com/attachments/506495193936035844/901135595710054440/Illustration_sans_titre.png'">
			     </a>
			<ul class="sous">
				<li ><a href="index.html">Accueil</a></li>
				<li ><a href="jeux_video.php">Jeux vidéo</a></li>
				<li ><a href="#">Editeur</a></li>
				<li ><a href="form.php">Formulaire</a></li>				
			</ul>
		</ul>
	</nav>
	<h1>
		Editeurs 
	</h1>
	<div class= tableau>
	<?php
    $db=mysqli_connect("mysql-mmm.alwaysdata.net","mmm",
    "Rk&&ND@oC4dBMXkf", "mmm_mmm");
    $sql="select * from Editeur";// on prend tout les editeurs
    $result = mysqli_query($db,$sql);
    $num = mysqli_num_rows($result);// nombre d'éditeur dans la bdd
    for ($j = 0; $j < $num; $j++) {// on crée une boucle pour afficher toute les cases
        $ligne = mysqli_fetch_array($result);
        echo "<div class = 'case'><br>".$ligne["id_e"].'<br>'.$ligne["nom"].'<br>'.$ligne["anne_creation"].'<br>'.$ligne["nationalité"].'<br>'.$ligne["PDG"].'<br>'.$ligne["IMG_e"]."</td>";// on crée les cases avec les info de la bdd
    echo "</div>";
    }
    echo"</div>";
    
    mysqli_close($db);
    ?>
    </div>
</div>
</body>
</html>