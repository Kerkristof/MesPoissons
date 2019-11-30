<?php

$servername = "lancoovhltlanco.mysql.db";
$username = "lancoovhltlanco";
$password = "SoleSole56";
$dbname = "lancoovhltlanco";

$log = $_POST['Login'];
$pwd = md5($_POST['MDP']);

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($log!="" && $pwd!=""){

  $sql = "SELECT id,pwd FROM login WHERE log=\"".$log."\"";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)) {
    if($row["pwd"] == $pwd){
      $nowFormat = date('Y-m-d H:i:s');
      echo "INSERT INTO log (idc,time) VALUES (".$row["id"].",\"".$nowFormat."\")";
      $sql = "INSERT INTO log (idc,time) VALUES (\"".$row["id"]."\",\"".$nowFormat."\")";
      mysqli_query($conn, $sql);
    }
  }
}

mysqli_close($conn);
?>
