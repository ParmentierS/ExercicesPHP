<?php 
if(isset($_POST))
{
    setcookie('login', $_POST["login"], time() + 8*3600, null, null, false, true); 
    setcookie('password', $_POST["password"], time() + 8*3600, null, null, false, true); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Cookie</title>
</head>
<body>
<a href="createCookie.php">Create Cookie</a>
<a href="displayCookie.php">Display Cookie</a>
<a href="changeCookie.php">Change Cookie</a>
<a href="changeCookie.php?login=Morse">Change Cookie</a>
<a href="changeCookie.php?login=Mouche&password=secret">Change Cookie</a>
<form method="post" action="createCookie.php">
Login : <input type="text" name="login">
  <br><br>
Password : <input type="password" name="password">
  <br><br>
  <button type=submit>CREER COOKIE</button>
</form>
<p><?php if(isset($_POST))
{
    echo $_POST["login"];
    echo $_POST["password"];
    echo $_COOKIE["login"];
    echo $_COOKIE["password"];
}?></p>
</body>
<?php
/*
name 	Required. Specifies the name of the cookie
value 	Optional. Specifies the value of the cookie
expire 	Optional. Specifies when the cookie expires. The value: time()+86400*30, will set the cookie to expire in 30 days. If this parameter is omitted or set to 0, the cookie will expire at the end of the session (when the browser closes). Default is 0
path 	Optional. Specifies the server path of the cookie. If set to "/", the cookie will be available within the entire domain. If set to "/php/", the cookie will only be available within the php directory and all sub-directories of php. The default value is the current directory that the cookie is being set in
domain 	Optional. Specifies the domain name of the cookie. To make the cookie available on all subdomains of example.com, set domain to "example.com". Setting it to www.example.com will make the cookie only available in the www subdomain
secure 	Optional. Specifies whether or not the cookie should only be transmitted over a secure HTTPS connection. TRUE indicates that the cookie will only be set if a secure connection exists. Default is FALSE
httponly 	Optional. If set to TRUE the cookie will be accessible only through the HTTP protocol (the cookie will not be accessible by scripting languages). This setting can help to reduce identity theft through XSS attacks. Default is FALSE
*/
?>