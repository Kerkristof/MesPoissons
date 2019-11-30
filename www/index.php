<?php
session_start();
if(!isset($_SESSION["session_connection_lanco"]) || (isset($_SESSION["session_connection_lanco"]) && $_SESSION["session_connection_lanco"] != "Je_Suis_Connecter" )){
  header("Location: /Login.php"); /* Redirect browser */
  exit();
  //echo $_SESSION["session_connection_lanco"];
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lanco Site</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>

  <body>
    <header>
      <h1>Site de la Famille Lanco</h1>
    </header>
    <nav>
      <ul>
        <li><a href="/index.php">Accueil</a></li>
        <li><a href="/ProjetPeptide/">Peptide calculator</a></li>
        <li><a href="/ProjetPeptide/ProjetTest.php">Projet Test</li>
        <li><a href="/ProjetPeptide/aminoAcidProperties.php">Amino acids</a></li>
        <li><a href="/Test/mainPage.html">Formulaire</a></li>
        <li><a href="/Laby/index.php">Laby</a></li>
        <li><a href="/Chat/index.php">Chat</a></li>
        <li><a href="/Kiki/index.php">Kiki</a></li>
        <li><a href="/ChristopheLab/Lab.html">ChristopheLab</a></li>
        <li><a href="/K-Means">K-Means</a></li>
        <li><a href="/QuantumJS">QuantumJS</a></li>
        <li><a href="/Power4">Power4</a></li>
      </ul>
    </nav>
      <section>
        <p><h1>Voici le different projet que nous avons réalisé</h1></p>
        <ul>

         <li><p><b>Peptide calculator</b> permet de convertir des sequences 1 lettre en
          sequence 3 lettres. Permet egalement de calculer la masse moleculaire
          d'un peptide lineaire simple en tenant compte des CTer (NH2, Ac ou H2T (head to tail))
          et Nter (OH, NH2 ou H2T), de calculer le Gravy Index et le nombre d'amino acid
          correspondant a la sequence.</p></li>
         <li><p><b>Laby</b> est un jeu de labyrinthe</p> </li>
         <li><p><b>Chat</b> est un lieu de discussion</p> </li>
         <li><p><b>Kiki</b> est un crawler qui permer de scorer un GitHub (trop lent)</p> </li>
         <li><p><b>K-Means</b> est une animation de l'algorithme des K-means (press space) </p> </li>
        </ul>

      <p>Il se peut que certaines sections soient en construction =D</p>
      </section>

      <footer>
        <p><a href="http://www.lanco.ovh">http://www.lanco.ovh</a></p>
      </footer>
  </body>
  <!--Ne pas ecrire de code html sous cette ligne-->
  <style>

body{
  background-color:   #EED5DB
}
header {
    width:100%;
    text-align: center;
    background-color: rgb(130, 130, 130);
    color:#fff;
  }
nav {
  float:left;
  line-height: auto;
  color:blue;
}
section {
  font-family:monospace;
  box-sizing: border-box;
  padding:10px;
  font-size: 1.2em;
  line-height:30px;
  max-width:45%;
  background-color:rgb(200, 200, 200);
  border-left: solid rgb(130,130,130) 1px;
  margin-left:15% ;
}
footer {
  text-align: center;
  background-color: rgb(130,130,130);
  color:#fff;
}
  </style>
</html>
