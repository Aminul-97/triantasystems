<?php
   if ( ! empty( $_GET['q'] ) ) {
    	$data = $_GET['q'];
    } 
    $servername = "127.0.0.1";
    $username = "root";
    $dbname = "sell";
    $password = "rabeyabosrishema2019";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql =  "INSERT INTO dat VALUES('".$data."');"; //.$data.
    $conn->query($sql);
    //$stmt = $conn->prepare($sql);
    //$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php echo $data; ?>
</body>
</html>