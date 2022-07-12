<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="Salimata.css" type="text/css">
    <script type="text/javascript" src="javascript.js"></script>
    <title>voyage++.com</title>
    <meta charset="utf-8">
</head>


<body id="principal">
<section class="block1">
    <center>
      <h1 class="div" id="Titre">LE SITE VOYAGE<sup>++</sup></h1> 
    </center>
</section>

<section class="block2">
    <center>
      <h2 class="Ligne1">
       ~~~**Bienvennue sur notre site voyage<sup>++</sup>**~~~
      </h2>
    </center>
    <h3 class="TitreN">
 Ce site qui vous permet de faire un choix en toute 
 efficacité pour tous vos voyages dans la belle cité de Sya et dans la capitale 
 du Burkina Faso</h3>
 <div>
    <div><img class="photo" src="Photos\Screenshot_20220531-130502_1654085100131.jpg">
       <img class="photo" src="Photos\Screenshot_20220531-130535_1654085119328.jpg"></div>
    <div><img class="photo" src="Photos\Screenshot_20220531-130602_1654085057412.jpg">
    <img class="photo" src="Photos\Screenshot_20220531-130415_1654085000866.jpg"></div>
</div>
 
 
 
</p>

<p class="TitreN" id="espace">
  Nous disposons pour vous de differentes compagnies de transport motivées à vous 
  amener à votre destination en toute sécurité et dans le confort absolu.
</p>

<p>
<figure>
   <marquee behavior="scroll" direction="left">
    <img class="fil"src="Photos\Screenshot_20220601-142133_1654249459049.jpg" width="auto" height="300px">
    <img class="fil" src="Photos\Screenshot_20220601-142219_1654249371818.jpg" width="auto" height="300px">
    <img class="fil" src="Photos\Screenshot_20220604-232543.png" width="auto" height="300px">
    <img class="fil" src="Photos\download (8).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\download (12).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\download (13).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\download (14).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\download (15).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\download (16).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\download (9).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\images (24).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\images (23).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\images (27).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\images (25).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\images (31).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\images (29).jpeg" width="auto" height="300px">
    <img class="fil" src="Photos\images (20).jpeg" width="auto" height="300px">
   </marquee>
</figure>
</p>


<p>
  <center>
    <h2 id="TitreN">**Vous pouvez vous inscrire ici pour ne rien rater sur les promos des compagnies**</h2>
  </center>
</p>

<form action="<?php echo $_SERVER['PHP_SELF'];?>"
    method="post">
<fieldset class="Ligne1">
<legend>Fiche d'inscription</legend>
<table border=1 >
  <tr>
    <td>Nom</td>
    <td><input type="text" name="Nom"
         placeholder="Entrez votre Nom"></td>
  </tr>
  <tr>
     <td>Prenom</td>
     <td><input type="text" name="Prenom"
         placeholder="Entrez votre Prenom"></td>
  </tr>
</table>
<p>
  <tr>
     <td>Adresse</td>
     <td><input type="email" name="Adresse" 
         placeholder="Entrez votre adresse"></td>
  </tr>
 </p>

<p>
  <tr>
     <td>Sexe</td>
     <td>
        <select name="Sexe">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Ne rien specifier">Ne rien specifier</option>
        </select>
      </td>
  </tr>
</p>

<p>
   <tr>
     <td>Metier</td>
     <td><input type="text" name="Metier"
         placeholder="Entrez votre metier"></td>
  </tr> 
</p>

<p>    
   <tr>
     <td>Date de Naissance</td>
     <td><input type="date" name="Date_de_naissance" 
         placeholder="Entrez votre Date de naissance"></td>
  </tr>
</p>
<tr>
  <progress min="0" max="100" value="10"></progress>
  <h3>NB:Nous allons vous envoyer un code d'enregistrement!!!!</h3>  
</tr>
<tr>
    <td><input class="Bouton" type="submit" value="Envoyer" size="40" maxlength="40"/></td>
    <td><input class="Bouton" type="reset" value="Effacer" size="40" maxlength="40"/></td>
</tr>
</fieldset>
 </form>
 <?php
include("connexpdo.inc.php");$idcom=connexpdo('Voyage','myparam');
if(!empty($_POST['Nom']) && !empty($_POST['Adresse']))
{
    $identifiant=rand(1,2022);
    $Nom=$idcom->quote($_POST['Nom']);
    $Prenom=$idcom->quote($_POST['Prenom']);
    $Sexe=$idcom->quote($_POST['Sexe']);
    $Adresse=$idcom->quote($_POST['Adresse']);
    $Metier=$idcom->quote($_POST['Metier']);
    $Date_de_naissance=$idcom->quote($_POST['Date_de_naissance']);
    $requete="INSERT INTO Inscription values($identifiant,$Nom,$Prenom,$Sexe,$Adresse,$Metier,$Date_de_naissance)";
    $nblignes=$idcom->exec($requete);
    if($nblignes!=1)
    {
        $mess_erreur=$idcom->errorInfo();
        echo"Insertion impossible,code",
        $idcom->errorCode(),$mess_erreur[2];
        echo"<script type=\"text/javascript\">
        alert('Erreur:".$idcom->errorCode()."')</script>";
    }
    else
    {
        echo"<script type=\"text/javascript\">
        alert('Vous êtes enregistré Votre numéro de client est:".$identifiant."')</script>";
        $idcom=null;
    }
}
else
{
    echo "Formulaire à completer!!";

}
?>

<p>
<p class="TitreN">Pour plus d'informations sur les autres localites du Burkina vous pouvez vous rendre sur les sites suivants</p>
<div class="header" id="Ligne2">
 <nav>
  <ul class="Liste">
    <li><a href="">htpp://www.NOURA VOYAGE.com</a></li>
    <li><a href="">htpp://www.TOURISME++.com</a></li>
    <li><a href="">htpp://www.TST.com</a></li>
    <li><a href="">htpp://www.DECOUVERT++.com</a></li>
    <li><a href="">htpp://www.BURKINA VOYAGE.com</a></li>
    <li><a href="">htpp://www.FASO TOURS.com</a></li>
   </ul>
  </nav>
</div>
</p>
</section>
  


<section class="block3">
    <p>
<center><h3 class="TitreN">Où voulez vous allez??</h3>
<label class="TitreN" >Cliquez sur une ville pour allez sur la page de cette ville</label><br>

<p><a href="Page_2.php"</a> <button class="Bouton">Bobo Diaulasso</button></p>
<p><a href="Page_3.php"</a> <button class="Bouton">Ouagadougou</button></p>
</center>
</p>
</section>


<footer>
  <adress>
   <h5>Salimata Traore
   Email:SalimTrao123@gmail.com</h5>
  </adress>
</footer>



  </body>
</html>