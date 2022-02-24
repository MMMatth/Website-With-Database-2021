<!DOCTYPE html>
<html>
<head>
	<title>Jeux Vidéo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="style-jv.css">
	<link sizes="16x16" rel="shortcut icon" type="image/png" href="https://i.ibb
	.co/XzpdKJx/ico.png"/>
	<!--Importation d'une police via googe font-->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&displa
	y=swap" rel="stylesheet">
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
				<li ><a href="#">Jeux vidéo</a></li>
				<li ><a href="editeur.php">Editeur</a></li>
				<li ><a href="form.php">Formulaire</a></li>				
			</ul>
		</ul>
	</nav>
	<h1>
		Jeux vidéo 
	</h1>
	<div class= tableau>
	<form class= case_requette action="" method = "post">
        <select class = requette_bouton name="name_requete" size="1">
        	<option class = requette_bouton value="1">
        	    Trier par age croissant
        	</option>
        	<option class = requette_bouton value="2">
        	    Trier par age décroissant
        	</option>
        	<option class = requette_bouton value="3">
        	    Trier par année de publication croissant
        	</option>
        	<option class = requette_bouton value="4">
        	    Trier par année de publication decroissant
        	</option>
        </select>
        <input class = requette_bouton type="submit" value="Valider">
    </form>
	<?php
    $db=mysqli_connect("mysql-mmm.alwaysdata.net","mmm",
    "Rk&&ND@oC4dBMXkf", "mmm_mmm");
    $sql="select * from Jeux_video";
    $sql_2="select nom,id_e from Editeur";// sert pour la partie requette de l'éditeur 
    // c'est des requettes simple qui vont permettre de changer le $sql donc de changer le tableau afficher
    if($_POST["name_requete"] == 1){$sql="SELECT * FROM Jeux_video ORDER BY age_max ASC";}// On recupère avec POST sur le petit formulaire juste en haut
    else if($_POST["name_requete"] == 2){$sql="SELECT * FROM Jeux_video ORDER BY age_max DESC;";}
    else if($_POST["name_requete"] == 3){$sql="SELECT * FROM Jeux_video ORDER BY ann_publi ASC";}
    else if($_POST["name_requete"] == 4){$sql="SELECT * FROM Jeux_video ORDER BY ann_publi DESC;";}
    $result = mysqli_query($db,$sql);
    $result_2 = mysqli_query($db,$sql_2);
    while ($ligne=mysqli_fetch_array($result)) {//on crée une boucle qui s'arretera quand tout les jeux seront parcouru quand 
        $ligne_2=mysqli_fetch_array($result_2);
        if($ligne_2["id_e"]=$ligne["id_editeur"]){// si l'id editeur de la base jeux vidéo est égal a une id de la base editeur
            $val=$ligne_2["id_e"];// on l'enregistre avec une val
            $sql_3="select nom from Editeur WHERE id_e = $val ";// on cherche l'editeur qui correspond
            $result_3 = mysqli_query($db,$sql_3)->fetch_row();
            $nom_editeur = $result_3[0];// on met le resultat dans une variable 
            $editeur= "<td class = 'case'><a class = 'hyper' href='result.php?editeur=$val' title='Envoyer'>$nom_editeur</a></td>" ;// on definie $editeur pour le tableau
        }
        echo "<div class = 'case'>".$ligne["id"].'<br>'.$ligne["nom_jeux"].'<br>'.$editeur.'<br><p>'.$ligne["age_max"].' ans</p>'.$ligne["ann_publi"].'<br>'.$ligne["type_jeux"].'<br>'.$ligne["IMG"]."</td>";// on crée la case avec toute les info de la base de données
        echo "</div>";
    }
    mysqli_close($db);
    ?>	
</div>
	
</body>
</html>