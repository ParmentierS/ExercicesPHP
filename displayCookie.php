<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Cookie</title>
</head>
<body>
<a href="createCookie.php">Create Cookie</a>
<a href="displayCookie.php">Display Cookie</a>
<a href="changeCookie.php">Change Cookie</a>
<a href="changeCookie.php?login=Morse">Change Cookie</a>
<a href="changeCookie.php?login=Mouche&password=secret">Change Cookie</a>
<p><?php echo "LOGIN : ".$_COOKIE["login"] ; ?></p>
<p><?php echo "PASSWORD : ".$_COOKIE["password"] ; ?></p>
</body>