<?php
require_once "classes/controllers/PersonController.php";

$personController = new PersonController();
?>

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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
</head>
<body>


<div id="wrapper">
    <h1 id="title">ZADANIE 2. - DATABASE <i class="fas fa-database" style="text-shadow: 0px 15px 9px rgba(0,0,0,0.18)"></i></h1>
    <div class="card  py-3 px-5 rounded-xl flex flex-col mb-5 bg-gradient-to-r from-gray-200 to-gray-300" style="font-family: Barlow;">
        <div class="title text-xl font-medium">Zvol tabuľku</div>
        <div class="w-full py-3">
            <div class="inline-block mr-2 mt-2">
                <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gradient-to-r from-gray-400 to-gray-600 transform hover:scale-110" id="btn1">Olympijskí víťazi</button>
            </div>
            <div class="inline-block mr-2 mt-2">
                <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gradient-to-r from-yellow-400 to-yellow-600 transform hover:scale-110" id="btn2">Počet zlatých medailí</button>
            </div>
        </div>
    </div>

    <div id="table_wrapper">
        <img src="og.png" id="img" alt="background">
        <table class="min-w-min	 w-full table-auto bg-gray-100 bg-opacity-90" id="t1" >
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <td class="py-3 px-6 text-left">Meno</td>
                <td class="py-3 px-6 text-left">Priezvisko</td>
                <td class="py-3 px-6 text-left">Rok</td>
                <td class="py-3 px-6 text-left">Mesto</td>
                <td class="py-3 px-6 text-left" style="width: 58px!important;">Typ OH</td>
                <td class="py-3 px-6 text-left">Disciplína</td>
            </tr>
            </thead>

            <tbody class="text-gray-600 text-sm font-light">
                <?php
                    $people = $personController->getAllPeople();
                    foreach ($people as $person) {
                        echo $person->getRow();
                    }
                 ?>
            </tbody>
        </table>

        <table class="min-w-max w-full table-auto bg-gray-100 bg-opacity-90 tablesorter" id="t2">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <td class="py-3 px-6 text-left">Meno</td>
                <td class="py-3 px-6 text-left">Priezvisko</td>
                <td class="py-3 px-6 text-left">Počet zlatých medailí</td>
                <td class="py-3 px-6 text-center"></td>
            </tr>
            </thead>

            <tbody class="text-gray-600 text-sm font-light">
                <?php
                    $people = $personController->getGoldMedalists();
                    for ($i = 0; $i < count($people); $i++) {
                        echo $people[$i]->getRow();
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div id="createBtn">
        <a href="createPerson.php">
            <i class="fas fa-user-plus fa-3x"></i>
        </a>
    </div>
</div>



<script src="js/script.js"></script>

    <div id="ftr">
        Adam Trebichalský, 98014<br>
    </div>
</html>
