<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>WEBTE2 - ZADANIE 2.</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e73d803768.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="wrapper">
    <h1 id="title">ZADANIE 2. - DATABASE <i class="fas fa-database" style="text-shadow: 6px 6px 15px 9px rgba(0,0,0,0.18)"></i></h1>

    <div id="table_wrapper" class="bg-gray-100 bg-opacity-90" style="border-radius: 30px">
        <div class="title text-xl font-medium"><h1 style="font-family: Barlow; padding: 15px">Úprava/vytvorenie osoby</h1></div>


        <img src="og.png" id="img" alt="background">
        <?php
            include ("partials/personForm.php");
        ?>
    </div>


<footer>
    <div id="ftr">
        Adam Trebichalský, 98014<br>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>