<!DOCTYPE html>
<html>
<head>
	<title>Resultat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="style-re.css">
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
				<li ><a href="editeur.php">Editeur</a></li>
				<li ><a href="form.php">Formulaire</a></li>				
			</ul>
		</ul>
	</nav>
	<script src="script.js"></script>
	<h1>
		Resultat 
	</h1>
	<div class = tableau>
	<?
	$erreur="<h2>Désoler, il n'y a malheureusment pas de résultat à votre recherche</h2>";
	$db=mysqli_connect("mysql-mmm.alwaysdata.net","mmm","Rk&&ND@oC4dBMXkf", "mmm_mmm");

        if($_POST["name_requete"]==1){
            $sql="SELECT * FROM Jeux_video 
            WHERE Jeux_video.type_jeux = 'FPS' 
            AND ann_publi >= '".$_POST['date']."'
            AND age_max <= '".$_POST['age']."'";
            //les deux AND sont les precondition qu'on voit dans le form (date et age)
            $result = mysqli_query($db,$sql);
            //parti requette editeur:
        	$sql_2="select nom,id_e from Editeur";// sert pour la partie requette de l'éditeur 
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
                echo "<div class = 'case'>".$ligne["id"].'<br>'.$ligne["nom_jeux"].'<br>'.$editeur.'<br><p>'.$ligne["age_max"].' ans</p>'.$ligne["ann_publi"].'<br>'.$ligne["type_jeux"].'<br>'.$ligne["IMG"]."</td></div>";// on crée la case avec toute les info de la base de données
            }}
        else if($_POST["name_requete"]==2){
            $sql="Select * from Jeux_video 
            JOIN Editeur ON Jeux_video.id_editeur=Editeur.id_e 
            WHERE Editeur.id_e =1 
            AND ann_publi >= '".$_POST['date']."'
            AND age_max <= '".$_POST['age']."'";
            //les deux AND sont les precondition qu'on voit dans le form (date et age)
            $result = mysqli_query($db,$sql);
            //parti requette editeur:
        	$sql_2="select nom,id_e from Editeur";// sert pour la partie requette de l'éditeur 
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
                echo "<div class = 'case'>".$ligne["id"].'<br>'.$ligne["nom_jeux"].'<br>'.$editeur.'<br><p>'.$ligne["age_max"].' ans</p>'.$ligne["ann_publi"].'<br>'.$ligne["type_jeux"].'<br>'.$ligne["IMG"]."</td></div>";// on crée la case avec toute les info de la base de données
            }}

        else if($_POST["name_requete"]==3){
            $sql="Select * from Jeux_video JOIN Editeur ON Jeux_video.id_editeur
            =Editeur.id_e WHERE Editeur.id_e =3
            AND ann_publi >= '".$_POST['date']."'
            AND age_max <= '".$_POST['age']."'";
            //les deux AND sont les precondition qu'on voit dans le form (date et age)
            $result = mysqli_query($db,$sql);
            //parti requette editeur:
        	$sql_2="select nom,id_e from Editeur";// sert pour la partie requette de l'éditeur 
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
                echo "<div class = 'case'>".$ligne["id"].'<br>'.$ligne["nom_jeux"].'<br>'.$editeur.'<br><p>'.$ligne["age_max"].' ans</p>'.$ligne["ann_publi"].'<br>'.$ligne["type_jeux"].'<br>'.$ligne["IMG"]."</td></div>";// on crée la case avec toute les info de la base de données
            }}
        else if($_POST["name_requete"]==4){
            $sql="Select * from Jeux_video JOIN Editeur ON Jeux_video.id_editeur
            =Editeur.id_e WHERE Editeur.nationalité ='Americain'
            AND ann_publi >= '".$_POST['date']."'
            AND age_max <= '".$_POST['age']."'";
            //on cherche une jeux ou l'editeur est americain grace a la clef etrangère
            $result = mysqli_query($db,$sql);
            //parti requette editeur:
        	$sql_2="select nom,id_e from Editeur";// sert pour la partie requette de l'éditeur 
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
                echo "<div class = 'case'>".$ligne["id"].'<br>'.$ligne["nom_jeux"].'<br>'.$editeur.'<br><p>'.$ligne["age_max"].' ans</p>'.$ligne["ann_publi"].'<br>'.$ligne["type_jeux"].'<br>'.$ligne["IMG"]."</td></div>";// on crée la case avec toute les info de la base de données
            }}
        else if($_POST["name_requete"]==5){
            $sql="Select * from Jeux_video JOIN Editeur ON Jeux_video.id_editeur=Editeur.id_e WHERE Editeur.nationalité ='francais'
            AND ann_publi >= '".$_POST['date']."'
            AND age_max <= '".$_POST['age']."'";
            //on cherche une jeux ou l'editeur est francais grace a la clef etrangère
            $result = mysqli_query($db,$sql);
            //parti requette editeur:
        	$sql_2="select nom,id_e from Editeur";// sert pour la partie requette de l'éditeur 
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
                echo "<div class = 'case'>".$ligne["id"].'<br>'.$ligne["nom_jeux"].'<br>'.$editeur.'<br><p>'.$ligne["age_max"].' ans</p>'.$ligne["ann_publi"].'<br>'.$ligne["type_jeux"].'<br>'.$ligne["IMG"]."</td></div>";// on crée la case avec toute les info de la base de données
            }}
        else if($_POST["name_requete"]==6){
            $sql="SELECT COUNT(*) FROM Jeux_video 
            WHERE ann_publi >= '".$_POST['date']."'
            AND age_max <= '".$_POST['age']."'";
            //on utilise COUNT(*) pour conter le nombre de jeux video dans la bdd
            $result = mysqli_query($db,$sql);
            //parti requette editeur:
        	$sql_2="select nom,id_e from Editeur";// sert pour la partie requette de l'éditeur 
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
                echo "<div class = 'case'>".$ligne["id"].'<br>'.$ligne["nom_jeux"].'<br>'.$editeur.'<br><p>'.$ligne["age_max"].' ans</p>'.$ligne["ann_publi"].'<br>'.$ligne["type_jeux"].'<br>'.$ligne["IMG"]."</td></div>";// on crée la case avec toute les info de la base de données
            }}
        if($_POST["name_requete"]==7){
            $sql="SELECT * FROM Jeux_video 
            WHERE Jeux_video.type_jeux = 'monde_ouvert' 
            AND ann_publi >= '".$_POST['date']."'
            AND age_max <= '".$_POST['age']."'";
            $result = mysqli_query($db,$sql);
            //parti requette editeur:
        	$sql_2="select nom,id_e from Editeur";// sert pour la partie requette de l'éditeur 
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
                echo "<div class = 'case'>".$ligne["id"].'<br>'.$ligne["nom_jeux"].'<br>'.$editeur.'<br><p>'.$ligne["age_max"].' ans</p>'.$ligne["ann_publi"].'<br>'.$ligne["type_jeux"].'<br>'.$ligne["IMG"]."</td></div>";// on crée la case avec toute les info de la base de données
            }}
        else if($_POST["name_requete"]==21){
            $sql="SELECT * FROM Editeur WHERE Editeur.nationalité ='americain'";
            $result = mysqli_query($db,$sql);
            $num = mysqli_num_rows($result);
            if($num == 0){echo $erreur;}
            for ($j = 0; $j < $num; $j++) {
                $ligne = mysqli_fetch_array($result);
                echo "<div class = 'case_e'><br>".$ligne["id_e"].'<br>'.$ligne["nom"].'<br>'.$ligne["anne_creation"].'<br>'.$ligne["nationalité"].'<br>'.$ligne["PDG"].'<br>'.$ligne["IMG_e"]."</td>";
            echo "</div>";
            }}
        else if($_POST["name_requete"]==22){
            $sql="SELECT AVG(age_max) FROM Jeux_video;";
            //j'utilise AVG pour faire la moyenne e l'age max de la bdd jv
            $result = mysqli_query($db,$sql)->fetch_row();
            echo "<h2>La moyenne de l'age de tout les jeux est de : ".round($result[0],2)." ans</h2>";
            //j'utilise .round pour avoir que 2 chiffre après la virgule
            }
        else if($_POST["name_requete"]==23){
            $sql="SELECT AVG(ann_publi) FROM Jeux_video;";
            $result = mysqli_query($db,$sql)->fetch_row();
            echo "<h2>La moyenne des années de création est : ".round($result[0],0)."</h2>";
            }
            
        //c'est la parti qui permet d'afficher les info sur l'editeur avec la requette    
        $sql="SELECT nom,id_e FROM Editeur";
        $result = mysqli_query($db,$sql);
        while ($result2=mysqli_fetch_array($result)) {
            $val = $result2["id_e"];
            if($_GET["editeur"]==$val){
            $sql="SELECT * FROM Editeur WHERE Editeur.id_e = $val";
            $result = mysqli_query($db,$sql);
            $ligne = mysqli_fetch_array($result);
            echo "<div class = 'case_e'><br>".$ligne["id_e"].'<br>'.$ligne["nom"].'<br>'.$ligne["anne_creation"].'<br>'.$ligne["nationalité"].'<br>'.$ligne["PDG"].'<br>'.$ligne["IMG_e"]."</td></div>";
            }}
    ?>
</div>
	
</body>
</html>