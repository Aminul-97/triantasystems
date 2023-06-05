<?php
   if ( ! empty( $_GET['q'] ) ) {
    	$data = $_GET['q'];
    } 
    $servername = "localhost";
    $username = "redoakpr_admin";
    $dbname = "redoakpr_sell";
    $password = "afroza753";

    $conn = new mysqli($servername, $username, $password, $dbname);

   //$sql =  "INSERT INTO dat VALUES('ABC');";
    $sql =  "INSERT INTO dat VALUES('".$data."');"; //.$data.
    $conn->query($sql);
   // $stmt = $conn->prepare($sql);
   // $stmt->execute();
   mysqli_close($conn);
?>
