<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="/css/styles.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Exo+2:500italic,900' rel='stylesheet' type='text/css'>
<title>sTÖFeL - Välkommen!</title>
</head>
<body>
<div class="header">
<div class="logo"><a href="/">sTÖFeL</a></div>
<div class="right">Stora Teknologiska Ölföreningens Exklusiva Liga</div>
</div>
<div class="content">

<?php

$namn = htmlspecialchars($_POST["namn"]);
$epost = htmlspecialchars($_POST["epost"]);
$pris = htmlspecialchars($_POST["pris"]);

if ($namn == "" || $epost == "" || $pris == "") {
  echo "<h1>Fel</h1>
  <p>Du har inte fyllt i alla obligatoriska fält, vänligen <a href='index.php'>försök igen</a>.</p>";
} else {
  $message = "En ny anmälan har kommit.<br/>Namn: ".$namn."<br/>Pris: ".$pris."<br/>E-postadress: ".$epost."<br/>/stofel.teknolog.fi";

  $headers = "Content-Type: text/html; charset=utf-8";

  mail('oleg.stikhin@aalto.fi', 'Phuxöltasting - Ny deltagare', $message, $headers);

  echo('<h1>Välkommen!</h1>
  <p>Din anmälan är mottagen. Vi ses på tastingen!</p>
  <p><a href="/">Tillbaka till startsidan</a></p>');
}


?>
</div>
<div class="footer">
<div class="footer-text">
sTÖFeL är en fri förening vid <a href="https://www.teknologforeningen.fi/">Teknologföreningen</a>
</div>
</div>
</body>
</html>
