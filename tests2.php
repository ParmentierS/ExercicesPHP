<!--
Exo 1
    Créer trois variables nom, prenom et age et les initialiser avec les valeurs de votre choix.
    Attention age est de type entier.
    Afficher leur contenu de sorte qu'on puisse lire sur le navigateur "Bonjour prenom, enfant de la famille nom ayant atteint de level age !".
-->
<?php
$nom = "toi";
$prenom = "moi";
$age = 5;
$age = (integer)$age;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
     <p><?php echo "Bonjour $prenom, enfant de la famille $nom ayant atteint le level $age !"?></p> 
    </section>
    <section>
    <?php for($i=0;$i<10;$i++)
    {
        echo $i;
    }  
        ?>
    </section>
</body>
</html>

