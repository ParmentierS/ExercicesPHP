
<?php
function sanitize($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php
echo "<h2>Your Input GET:</h2>";
echo "<br>";
echo sanitize($_GET["firstname"]);
echo "<br>";
echo sanitize($_GET["name"]);
echo "<br>";
?>

<?php
echo "<h2>Your Input POST:</h2>";
echo "<br>";
echo sanitize($_POST["name"]);
echo "<br>";
echo sanitize($_POST["firstname"]);
echo "<br>";
echo sanitize($_POST["email"]);
echo "<br>";
echo sanitize($_POST["website"]);
echo "<br>";
echo sanitize($_POST["comment"]);
echo "<br>";
echo sanitize($_POST["gender"]);
?>