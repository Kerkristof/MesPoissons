<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Log</title>
    <link rel="stylesheet" href="css/stylelog.css">
  </head>
  <body>
    <?php
    session_start();
    if(!isset($_SESSION["session_connection_lanco"]) || (isset($_SESSION["session_connection_lanco"]) && $_SESSION["session_connection_lanco"] != "Je_Suis_Connecter" )){
      header("Location: /Login.php"); /* Redirect browser */
      exit();
      //echo $_SESSION["session_connection_lanco"];
    }

    $servername = "lancoovhltlanco.mysql.db";
    $username = "lancoovhltlanco";
    $password = "SoleSole56";
    $dbname = "lancoovhltlanco";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM log";
    $result = mysqli_query($conn, $sql);

    echo "<table>";
    echo "<tr>
           <td>ID</td>
           <td>Time</td>
           <td>IDC</td>
          </tr>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>".$row["id"]. "</td><td>" . $row["time"]. "</td><td>" . $row["idc"]. "</td></tr>";
    }
    echo "</table>";

    mysqli_close($conn);
    ?>
  </body>
</html>
