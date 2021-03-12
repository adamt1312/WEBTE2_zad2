<?php

require_once ("./classes/controllers/PersonController.php");

$person_controller = new PersonController();
$id = $_POST["id"];
$person_controller->deletePerson($id);

header('Location: index.php');

?>

<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>WEBTE2 - ZADANIE 2.</title>-->
<!--    <link rel="stylesheet" href="style.css">-->
<!--    <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>-->
<!--    <script src="https://kit.fontawesome.com/e73d803768.js" crossorigin="anonymous"></script>-->
<!--</head>-->
<!--<body>-->
<!--    <div style="display: flex; justify-content: center; align-content: center; width: 100%; height: 100%; flex-direction: column; align-items: center">-->
<!--        <p style="text-align: center; margin: 50px; font-family: Barlow; font-size: 27px">Používateľ s identifikačným číslom --><?//= $id ?><!-- bol úspešne vymazaný z databázy.</p>-->
<!--        <button type="button" class="btn btn-primary">-->
<!--            <a href="index.php" style="text-align: center; color: white">-->
<!--                <i class="fas fa-home fa-3x" aria-hidden="true"></i>-->
<!--            </a>-->
<!--        </button>-->
<!--    </div>-->
<!--</body>-->
<!--</html>-->


