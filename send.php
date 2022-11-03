<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="/css/styles.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Exo+2:500italic,900' rel='stylesheet' type='text/css'>
<title>sTÖFeL - Tack för din ansökan!</title>
</head>
<body>
<div class="header">
<div class="logo"><a href="/">sTÖFeL</a></div>
<div class="right">Stora Teknologiska Ölföreningens Exklusiva Liga</div>
</div>
<div class="content">

<?php

$fornamn = htmlspecialchars($_POST["fornamn"]);
$efternamn = htmlspecialchars($_POST["efternamn"]);
$smeknamn = htmlspecialchars($_POST["smeknamn"]);
$epost = htmlspecialchars($_POST["epost"]);

if ($_POST["tf"] == "on") {
  $tf = "Ja";
} else {
  $tf = "Nej";
}
$favoritol = htmlspecialchars($_POST["favoritol"]);

if ($fornamn == "" || $efternamn == "" || $epost == "" || $favoritol == "") {
  echo "<h1>Fel</h1>
  <p>Du har inte fyllt i alla obligatoriska fält, vänligen <a href='medlem.php'>försök igen</a>.</p>";
} else {
  $message = "En ny medlemsansökan har kommit.<br/>Förnamn: ".$fornamn."<br/>Efternamn: ".$efternamn.
  "<br/>Smeknamn: ".$smeknamn."<br/>E-postadress: ".$epost."<br/>TF-medlem: ".$tf."<br/>Favoritöl: ".$favoritol."<br/>/stofel.teknolog.fi";

  $headers = "Content-Type: text/html; charset=utf-8";

  mail('laderstofel@teknolog.fi', 'Ny medlemsansökan', $message, $headers);

  echo('<h1>Tack för din ansökan!</h1>
  <p>Din ansökan är mottagen. Du får ett bekräftelsemeddelande när styrelsen har behandlat den färdigt.</p>
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
