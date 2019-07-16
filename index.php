<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>récupération des paramètres de l'url</title>
</head>
<body>
    <p><?php 
    if (isset($_GET["nom"]))
    {
        echo $_GET["nom"];
    }
     ?></p>
    <p><?php 
    if (isset($_GET["prenom"]))
    {
        echo $_GET["prenom"];
    }
     ?></p>
    <p><?php 
    if (isset($_GET["age"]))
    {
        echo $_GET["age"];
    }
    else
    {
        echo "variable age non définie";
    }
     ?></p>
    <p><?php 
    if (isset($_GET["dateDebut"]))
    {
        echo $_GET["dateDebut"];
    }
     ?></p>
    <p><?php 
    if (isset($_GET["dateFin"]))
    {
        echo $_GET["dateFin"];
    }
     ?></p>
    <p><?php foreach($_GET as $key => $value)
        {
            if(isset($_GET[$key]))
            {
                echo "clé : $key, valeur : $value \n";
            }
        }
    ?></p>
    <p><?php echo "Hello" + " World"; ?></p>
    <p><?php  ?></p>
</body>
</html>