<?php
   error_reporting(0);
   header('Access-Control-Allow-Origin: *');

   include('smtp/PHPMailerAutoload.php');

   if ( ! empty( $_GET['q'] ) ) {
    	$data = $_GET['q'];
    } 
    $servername = "localhost";
    $username = "triantas_admin";
    $dbname = "triantas_client";
    $password = "alhamdulillah2020";

    $conn = new mysqli($servername, $username, $password, $dbname);

   //$sql =  "INSERT INTO dat VALUES('ABC');";
    $sql =  "INSERT INTO data VALUES('".$data."');"; //.$data.
    $conn->query($sql);
   // $stmt = $conn->prepare($sql);
   // $stmt->execute();
   mysqli_close($conn);

   // SEND EMAIL
   sendmail('aminul@triantasystems.com','New message..', str_replace("<br>"," || ", $data));
   function sendmail($to,$subject, $msg){
      $mail = new PHPMailer(); 
      //$mail->SMTPDebug=3;
      $mail->IsSMTP(); 
      $mail->SMTPAuth = true; 
      $mail->SMTPSecure = 'ssl'; 
      $mail->Host = "triantasystems.com";
      $mail->Port = "465"; 
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      $mail->Username = "email_bot@triantasystems.com";
      $mail->Password = 'x[(~FqqwIst*';
      $mail->SetFrom("email_bot@triantasystems.com");
      $mail->Subject = $subject;
      $mail->Body =$msg;
      $mail->AddAddress($to);
      $mail->SMTPOptions=array('ssl'=>array(
         'verify_peer'=>false,
         'verify_peer_name'=>false,
         'allow_self_signed'=>false
      ));
      if(!$mail->Send()){
         echo $mail->ErrorInfo;
      }else{
         echo 'success';
      }
   }
   
?>
