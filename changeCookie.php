<?php
if(isset($_GET["login"]))
{
    setcookie('login', $_GET["login"], time() + 8*3600, null, null, false, true); 
}
else
{
    setcookie('login', "RASCARKAPAK", time() + 8*3600, null, null, false, true); 
}
if(isset($_GET["password"]))
{
    setcookie('password', $_GET["password"], time() + 8*3600, null, null, false, true); 
}
else
{
    setcookie('password', "tutrouverasJamaisMOnm0tdepaSSSE!", time() + 8*3600, null, null, false, true); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Cookie</title>
</head>
<body>
<a href="createCookie.php">Create Cookie</a>
<a href="displayCookie.php">Display Cookie</a>
<a href="changeCookie.php">Change Cookie</a>
<a href="changeCookie.php?login=Morse">Change Cookie</a>
<a href="changeCookie.php?login=Mouche&password=secret">Change Cookie</a>
</body>