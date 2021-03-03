<?php
require_once "OlympicGames.php";

$servername = "localhost";
$username = "xtrebichalsky";
$password = "a1912006";
$dbname = "olympic_winners";

try {
    $conection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conection->prepare("SELECT * from oh");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS, 'OlympicGames');
    $results = $stmt->fetchAll();

} catch (PDOException $exception) {
    echo "Error is: " . $exception->getMessage();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>WEBTE2 - ZADANIE 2.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>ZADANIE 2. - DATABASE</h1>

<table>
    <thead>

    </thead>

    <tbody>
        <?php foreach ($results as $olympicGame) {
            echo $olympicGame->getRow();
        } ?>
    </tbody>
</table>

<footer>
    <div id="ftr">
        Adam Trebichalský, 98014<br>
    </div>
</footer>
</body>
</html>