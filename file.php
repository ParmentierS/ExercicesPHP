<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP Date</title>
    <link rel="stylesheet" type="text/css" href="calendar.css"> 
</head>
<body>


<?php $fp = fopen("file.php","r");
//doesn't work correctly with current file
rewind($fp);
while(!feof($fp)) 
{ 
    $fichier_texte=fgets($fp,1024);
    echo "$fichier_texte"; 
    echo "<br>";
} 
rewind($fp);
while(!feof($fp)) 
{ 
    $fichier_texte=fgets($fp,1024);
    echo "$fichier_texte"; 
    echo "<br>";
} 
fclose($fp);
$fp = fopen("tpDATE.php","r");
while(!feof($fp)) 
{ 
    $fichier_texte=fgets($fp,1024);
    echo "$fichier_texte"; 
    echo "<br>";
} 

?>
</body>
