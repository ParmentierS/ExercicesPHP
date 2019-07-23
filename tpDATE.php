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

<?php
$today = getdate();
$monthTable = ["","Janvier","Février","Mars","Avril","Mai","Juin"
,"Juillet","Aout","Septembre","Octobre","Novembre","Décembre"];

if(isset($_POST["mois"]))
{
    $mois=$_POST["mois"];
}
else
{
    $mois = $today["mon"];
}
if(isset($_POST["annee"]))
{
    $annee=$_POST["annee"];
}
else
{
    $annee=$today["year"];
}
?>
<form method="post" action="tpDATE.php">
<select name="mois">
    <option value="1"><?php echo $monthTable[1]?></option>
    <option value="2"><?php echo $monthTable[2]?></option>
    <option value="3"><?php echo $monthTable[3]?></option>
    <option value="4"><?php echo $monthTable[4]?></option>
    <option value="5"><?php echo $monthTable[5]?></option>
    <option value="6"><?php echo $monthTable[6]?></option>
    <option value="7"><?php echo $monthTable[7]?></option>
    <option value="8"><?php echo $monthTable[8]?></option>
    <option value="9"><?php echo $monthTable[9]?></option>
    <option value="10"><?php echo $monthTable[10]?></option>
    <option value="11"><?php echo $monthTable[11]?></option>
    <option value="12"><?php echo $monthTable[12]?></option>
</select> 
<select name="annee">
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
</select> 
<br><br>
  <button type=submit>REMPLIR CALENDRIER</button>
</form>

<div class="month">
  <ul>
    <li><?php echo $monthTable[$mois]; ?><br><span style="font-size:18px"><?php echo $annee ?></span></li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>
<?php 
$firstDay=date("w", mktime(0, 0, 0, $mois, 1, $annee));
$numberOfDays = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);

/*echo "mois : " . $mois;
echo "annee : " . $annee;
echo "premier jour : " . $firstDay;
echo "nombre de jours : " . $numberOfDays;
foreach ($today as $key => $value) 
{
    echo "$key => $value";
    echo "<br>";

}*/
$cases=[["","","","","","","",""],["","","","","","","",""],["","","","","","","",""],
["","","","","","","",""],["","","","","","","",""],["","","","","","","",""],["","","","","","","",""]];

for($case = $firstDay-1,$jour=1 ; $jour <= $numberOfDays ; $case++, $jour++)
{
    $column = $case % 7 + 1;
    $row = $case / 7 + 1;
    $cases[$row][$column] = $jour;
}

?>
<ul class="days">
  <li><?php echo $cases[1][1] ?></li>
  <li><?php echo $cases[1][2] ?></li>
  <li><?php echo $cases[1][3] ?></li>
  <li><?php echo $cases[1][4] ?></li>
  <li><?php echo $cases[1][5] ?></li>
  <li><?php echo $cases[1][6] ?></li>
  <li><?php echo $cases[1][7] ?></li>
  <li><?php echo $cases[2][1] ?></li>
  <li><?php echo $cases[2][2] ?></li>
  <li><?php echo $cases[2][3] ?></li>
  <li><?php echo $cases[2][4] ?></li>
  <li><?php echo $cases[2][5] ?></li>
  <li><?php echo $cases[2][6] ?></li>
  <li><?php echo $cases[2][7] ?></li>
  <li><?php echo $cases[3][1] ?></li>
  <li><?php echo $cases[3][2] ?></li>
  <li><?php echo $cases[3][3] ?></li>
  <li><?php echo $cases[3][4] ?></li>
  <li><?php echo $cases[3][5] ?></li>
  <li><?php echo $cases[3][6] ?></li>
  <li><?php echo $cases[3][7] ?></li>
  <li><?php echo $cases[4][1] ?></li>
  <li><?php echo $cases[4][2] ?></li>
  <li><?php echo $cases[4][3] ?></li>
  <li><?php echo $cases[4][4] ?></li>
  <li><?php echo $cases[4][5] ?></li>
  <li><?php echo $cases[4][6] ?></li>
  <li><?php echo $cases[4][7] ?></li>
  <li><?php echo $cases[5][1] ?></li>
  <li><?php echo $cases[5][2] ?></li>
  <li><?php echo $cases[5][3] ?></li>
  <li><?php echo $cases[5][4] ?></li>
  <li><?php echo $cases[5][5] ?></li>
  <li><?php echo $cases[5][6] ?></li>
  <li><?php echo $cases[5][7] ?></li>
  <li><?php echo $cases[6][1] ?></li>
  <li><?php echo $cases[6][2] ?></li>
  <li><?php echo $cases[6][3] ?></li>
  <li><?php echo $cases[6][4] ?></li>
  <li><?php echo $cases[6][5] ?></li>
  <li><?php echo $cases[6][6] ?></li>
  <li><?php echo $cases[6][7] ?></li>
</ul> 

</body>