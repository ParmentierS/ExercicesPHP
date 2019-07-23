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

function renvoieTrue()
{
    return true;
}
function renvoieLui($chaine)
{
    return $chaine;
}
function concat($chaine1, $chaine2)
{
    return $chaine1 . $chaine2;
}
function concatAny($truc1, $truc2)
{
    return strval($truc1) . strval($truc2);
}
function compare($number1,$number2)
{
    if($number1 < $number2)
    {
        return "Le premier nombre est plus petit"; 
    }
    else if ($number2 < $number1)
    {
        return "Le premier nombre est plus grand ";
    }
    else
    {
        return "Les deux nombres sont identiques";
    }
}
function display($nom,$prenom,$age)
{
    return "Bonjour $nom $prenom, tu as $age ans.";
}
function testGenre($age,$genre)
{
    if($genre === "Homme")
    {
        if($age >= 18)
        {
            return "Vous êtes un homme et vous êtes majeur";
        }
        else
        {
            return "Vous êtes un homme et vous êtes mineur";
        }
    }
    else if($genre === "Femme")
    {
        if($age >= 18)
        {
            return "Vous êtes une femme et vous êtes majeure";
        }
        else
        {
            return "Vous êtes une femme et vous êtes mineure";
        }
    }
}
function somme($n1=0,$n2=1,$n3=-1)
{
    return $n1 + $n2 + $n3;
}

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
    <section>
    <?php echo renvoieTrue();?>
    <br>
    <?php echo renvoieLui("Qui?");?>
    <br>
    <?php echo concat("in"," hell");?>
    <br>
    <?php echo concatAny("52", 2);
        echo concat("52", 2);?>
    <br>
    <?php echo compare(56,2);?>
    <?php echo compare("56",2);?>
    <?php echo compare("56","2");?>
    <?php echo compare("100000","99");?>
    <?php echo compare("A","D");?>
    <br>
    <?php echo display("Nazareth ","Jésus",33);
    echo testGenre(26,"Homme");?>
    <br>
    <?php  $mois = ["janvier", "février", "mars", "avril",
    "mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
    $testTableau=[01=>"Ain",03=>"Allier",07=>"Ardèche",15=>"Cantal",
    26=>"Drôme",38=>"Isère",42=>"Loire",43=>"Haute-Loire",63=>"Puy de Dome"
    ,69=>"Rhône",73=>"Savoie",74=>"Haute-Savoie"];
    
    echo $mois[2];echo $mois[5];
    echo $testTableau[69]; 
    echo $testTableau[01];
    echo $testTableau["74"];
    $testTableau[57]="Metz";
    foreach($testTableau as $key => $value) 
    {
        echo "Le departement $value a le numéro $key\n";
    }?>
    </section>
</body>
</html>

