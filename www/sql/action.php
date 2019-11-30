<?php
$servername = "lancoovhltlanco.mysql.db";
$username = "lancoovhltlanco";
$password = "SoleSole56";
$dbname = "lancoovhltlanco";

$log = $_POST['log'];
$pwd = $_POST['pwd'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($log!="" && $pwd!=""){

  $sql = "INSERT INTO login (log,pwd) VALUES (\"".$log."\", \"".$pwd."\")";
  echo mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM login";

$result = mysqli_query($conn, $sql);



while($row = mysqli_fetch_assoc($result)) {
  echo $row["id"]. " " . $row["log"]. " " . $row["pwd"]. "<br>";
}


mysqli_close($conn);
?>
