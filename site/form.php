<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="style-fo.css">
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
				<li ><a href="#">Formulaire</a></li>				
			</ul>
		</ul>
	</nav>
	<script>
    function affiche(){//on fait des fonctions simple pour afficher les valeurs des curseurs
        print=document.getElementById("date").value;
        document.getElementById("id").innerHTML = "<p>"+print+"</p>";
    }
    function affiche2(){
        print2=document.getElementById("age").value;
        document.getElementById("id2").innerHTML = "<p>"+print2+"</p>";
    }
    function affiche3(){
        print2=document.getElementById("age2").value;
        document.getElementById("id3").innerHTML = "<p>"+print2+"</p>";
    }
	</script>
	<h1>
		Formulaire 
	</h1>
	<div class = tableau>
    <div class = case>
    <h2>
        <u>
	    Formulaire avec plusieur conditions
	    </u>
	</h2><br>

	
    <form class = form action="result.php" method = "post">
            <select class = boutton name="name_requete" size="1">
            	<option class = boutton value="1">Jeux de type FPS</option>
            	<option class = boutton value="7">Jeux de type monde ouvert</option>
            	<option class = boutton value="2">Jeux editer par UBISOFT</option>
            	<option class = boutton value="3">Jeux editer par Activision</option>
            	<option class = boutton value="4">Jeux avec un editeur Americain</option>
            	<option class = boutton value="5">Jeux avec un editeur Francais</option>
            	<option class = boutton value="6">Nombre de jeux dans la base de donnés</option>
            </select>
        <br><br><p>Année de sortie minimum :</p>
        <br><input type="range" id="date" name="date" min="1972" max="2021" value = "1972" list="Tickmarks" onchange="affiche()">
        <br><span id="id"><p>1972</p></span>
        <br><br><p>Age Maximum :</p>
        <br><input type="range" id="age" name="age" min="0" max="18" value = "18" list="Tickmarks" onchange="affiche2()">
        <br><span id="id2"><p>18</p></span>
        <br><input class = boutton type="submit" value="Valider">
    </form>
    
    </div>

    <div class = case>
    <h2>
        <u>
	    Autre formulaire 
	    </u>
	</h2><br>
    <form class = form action="result.php" method = "post">
        <select class = boutton  name="name_requete" size="1">
        	<option class = boutton value="20">Editeur francais</option>
        	<option class = boutton value="21">Editeur americain</option>
        	<option class = boutton value="22">Moyenne de l'age max de tout les jeux</option>
        	<option class = boutton value="23">Moyenne de l'années de publication de tout les jeux</option>
        </select>
        <br><br><input class = boutton type="submit" value="Valider">
    </form>
    </div>
        <div class = case>
    <h2>
        <u>
	    Ajouter un Jeux Vidéo 
	    </u>
	</h2>
    <form class = form action="" method = "POST">
        <p>Age Maximum :</p>
        <input type="range" id="age2" name="age2" min="0" max="18" value = "18" list="Tickmarks" onchange="affiche3()">
        <br><span id="id3"><p>18</p></span>
        <br><p>Editeur:</p>
        <select class = boutton  name="name_requete" size="1">
        <?php 
        //on fait du php pour que quand on ajoute un editeur la liste des editeurs dans le menu deroulant grandisse
        $db= mysqli_connect("mysql-mmm.alwaysdata.net","mmm","Rk&&ND@oC4dBMXkf", "mmm_mmm");
        $sql="SELECT nom,id_e FROM Editeur";
        $result = mysqli_query($db,$sql);
        while ($result2=mysqli_fetch_array($result)){echo'<option class = boutton value='.$result2["id_e"].'>'.$result2["nom"].'</option>';}//on fait simplement une boucle qui vas mettre tout les noms des editeurs
        ?>
        </select><br/>
        <br><input class = boutton type = search name = "ann_publi" placeholder="Année de publication (Entier)"/><br/>
        <br><input class = boutton type = search name = "nom" placeholder="Nom (str)"/><br/>
        <br><input class = boutton type = search name = "type_jeux" placeholder="Type de jeux (str)"/><br/>
        <br><input class = boutton type = search name = "img" placeholder="Lien Image (str)"/><br>
        <br><input class = boutton type="submit" value="Ajouter"><br/>
    </form>
    </div>

    <div class = case>
    <h2>
        <u>
	    Ajouter un Editeur 
	    </u>
	</h2>
    <form class = form action="" method = "POST">
        <br><input class = boutton type = search name = "nom_e" placeholder="Nom (str)"/><br/>
        <br><input class = boutton type = search name = "anne_creation_e" placeholder="Année de création (Entier)"/><br/>
        <br><input class = boutton type = search name = "nationalité_e" placeholder="nationalité (str)"/><br/>
        <br><input class = boutton type = search name = "img_e" placeholder="Lien Image (str)"/><br>
        <br><input class = boutton type = search name = "PDG_e" placeholder="Nom du PDG (str)"/><br>
        <br><input class = boutton type="submit" value="Ajouter"><br/>
    </form>
    </div></div></div>
    <?
    // ajouter un jeux
    $db= mysqli_connect("mysql-mmm.alwaysdata.net","mmm","Rk&&ND@oC4dBMXkf", "mmm_mmm");
    //on prépare deja des variable pour être mieux organisé
    $nom = $_POST["nom"];
    $age_max = $_POST["age2"];
    $ann = $_POST["ann_publi"];
    $id_e = $_POST['name_requete'];
    $type_jeux = $_POST["type_jeux"];
    $img = $_POST["img"];
    $sql="INSERT INTO Jeux_video 
    (nom_jeux,id_editeur ,ann_publi,type_jeux, age_max, IMG) 
    VALUES 
    ('".$nom."','".$id_e."','".$ann."','".$type_jeux."','".$age_max."','<img style=width:150px class= imagejeux src=".$img.">')";
    //on fait simplement notre requete avec les variable
    if(isset($nom) and isset($age_max) and isset($type_jeux) and isset($img) ){
    // on met une condition : qu'il faut forcement cliquer sur le bouton envoyer pour que le if d'après fonction
        if(strlen($nom)==0 or strlen(strval($ann))==0 or strlen($type_jeux)==0 or strlen($img)==0 ){
            echo '<br><h2>Une ou plusieur(s) case(s) de la partie jeux vidéo ne sont pas complète</h2><br>';
            //on afficher une erreur si les zones d'écritures sont vident
        }
        else{mysqli_query($db,$sql);}}// et sinon on envoie la requette sql
    ?>
    <?
    //pour cette partie c'est la même que celle d'avant mais adapter aux editeurs
    $db= mysqli_connect("mysql-mmm.alwaysdata.net","mmm","Rk&&ND@oC4dBMXkf", "mmm_mmm");
    $nom_e = $_POST["nom_e"];
    $anne_creation_e = $_POST["anne_creation_e"];
    $nationalite_e = $_POST["nationalité_e"];
    $PDG_e = $_POST['PDG_e'];
    $img_e = $_POST["img_e"];
    echo $PDG_e;
    $sql="INSERT INTO Editeur (nom,anne_creation,nationalité,PDG, img_e) VALUES ('".$nom_e."','".$anne_creation_e."','".$nationalite_e."','".$PDG_e."','<img style=width:100px class= imagejeux src=".$img_e.">')";
    if(isset($nom_e) and isset($anne_creation_e) and isset($nationalite_e) and isset($PDG_e) and isset($img_e) ){
    if(strlen($nom_e)==0 or strlen(strval($anne_creation_e))==0 or strlen($nationalite_e)==0 or strlen($PDG_e)==0 or strlen($img_e)==0 ){echo '<br><h2>Une ou plusieur(s) case(s) de la partie editeur ne sont pas complète</h2><br>';}
    else{mysqli_query($db,$sql);}}
    ?>






















<br>	
</body>


</html>