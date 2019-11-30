<!DOCTYPE html>
<html>
  <head>
    <title>Lanco Site</title>
  </head>
  <header>
    <h1>Peptide converter / MW & GI calculator.</h1>
  </header>
  <body>
    <?php
    $molWeight=0;
    $gravyIndex=0;
    $charge = 0;
    $NterArray = array("NH2"=>1,"Ac"=>43.05,"H2T"=>0);
    $CterArray = array("OH"=>17,"NH2"=>16,"H2T"=>0);
    $chargeNterArray = array("NH2"=>1,"Ac"=>0,"H2T"=>0);
    $chargeCterArray = array("OH"=>-1,"NH2"=>0,"H2T"=>0);
    // Récupération de la sequence, du Cter et Nter
    $sequence = $_GET["l1seq"];
    $Cter = $_GET["Cter"];
    $Nter = $_GET["Nter"];

    //Connection
    $login = ["lancoovhltlanco.mysql.db","lancoovhltlanco","SoleSole56","lancoovhltlanco"];
    $conn = mysqli_connect ($login[0],$login[1],$login[2],$login[3]);

    // Calcul de la sequence 3 lettres
    for ($i=0; $i < strlen($sequence) ; $i++) {
      $query = "SELECT * FROM peptide WHERE aminoAcid1 = \"$sequence[$i]\"";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($result);
      $l3seq = $l3seq . $row["aminoAcid3"] . "-";
      $molWeight = $molWeight + $row["aminoAcidMW"];
      $gravyIndex = $gravyIndex + $row["aminoAcidGI"];
      $charge = $charge + $row["aminoAcidCharge"];
    }
    mysqli_close($conn);
    // prise en compte des Nter et center ds le calcul du MW et de la charge
    $molWeight = $molWeight + $NterArray[$Nter] + $CterArray[$Cter];
    $charge = $charge + $chargeNterArray[$Nter] + $chargeCterArray[$Cter];

    // Affichage de la sequence des paramètres calculés
    echo "<p>FASTA format: "."<b>".$Nter."</b>-".$sequence."-<b>".$Cter."</b><br>";
    echo "Sequence: <b>".$Nter."</b>-". $l3seq ."<b>". $Cter."</b><br>";
    echo "Sequence length = ".strlen($sequence)."<br>";
    echo "Molecular weight = ".$molWeight." g.mol-1<br>";
    echo "Gravy Index = ".round($gravyIndex/strlen($sequence),2)."<br>";
    echo "Global charge = ".$charge."<br></p>";
     ?>
     <!-- Renvoi au formulaire de saisie-->
<p><a href="/Test/formulaire.php">Initialize</a></p>
<footer>
  <h2><a href="http://www.lanco.ovh/index.php">
    http://www.lanco.ovh</a></h2>
</footer>
<style>
h1 {
  text-align: center;
  background-color:rgb(200,130,50);
  width:80%;
  color:#FFF;
  padding-top: 0.5cm;
  padding-bottom: 0.5cm;
}
p {
  line-height: 30px;
  font-family:monospace;
  font-size: 1.2em;
}
body {
  margin-left: 1cm;
  width: 60%;
}
footer {
  font-size: 0.5em;
  padding-top: 0.2cm;
  padding-bottom: 0.2cm;
  margin-top: 2cm;
  background-color:rgb(200,130,50);
  width: 80%;
  text-align: center;
  color:#fff;
}
</style>
</html>
