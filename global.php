<?php

session_start();

$_SESSION["nom"]="TRUMP";
$_SESSION["prenom"]="PISTON";
$_SESSION["age"]=9;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAGE VARIABLE GLOBALE PHP</title>
</head>
<body>
<a href="global2.php">TESTS DE NIVEAU !</a>
<?php
echo "<br>";
echo " SERVER ";
echo "<br>";
foreach ($_SERVER as $key => $value) 
{
    echo " cle $key -> $value ";
    echo "<br>";
}
echo " ENV ";
echo "<br>";
foreach ($_ENV as $key => $value) 
{
    echo " cle $key -> $value ";
    echo "<br>";
}
echo " SESSION ";
echo "<br>";
foreach ($_SESSION as $key => $value) 
{
    echo " cle $key -> $value ";
    echo "<br>";
}
echo " COOKIE ";
echo "<br>";
foreach ($_COOKIE as $key => $value) 
{
    echo " cle $key -> $value ";
    echo "<br>";
}
echo " FILES ";
echo "<br>";
foreach ($_FILES as $key => $value) 
{
    echo " cle $key -> $value ";
    echo "<br>";
}
$USERAGENT=$_SERVER["HTTP_USER_AGENT"];
echo "et donc le user agent c'est $USERAGENT";
echo "<br>";
$IP=$_SERVER["SERVER_ADDR"];
echo "et donc l'ip du client c'est $IP";
echo "<br>";
$HOSTNAME = gethostname();
echo "et donc le nom de l'hote c'est $HOSTNAME";
echo "<br>";
?>
</body>

