<?php
require_once "./classes/controllers/PersonController.php";
$person_controller = new PersonController();
$person = $person_controller->getPerson($_GET['id']);

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
    <script src="https://kit.fontawesome.com/e73d803768.js  " crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body style="align-items: inherit">
<h1 id="title">ZADANIE 2. - DATABASE <i class="fas fa-database" style="text-shadow: 6px 6px 15px 9px rgba(0,0,0,0.18)"></i></h1>
<div id="wrapper" style="height: 100vh">

    <img src="og.png" id="img" alt="background">

    <div id="table_wrapper" class="bg-gray-100 bg-opacity-90" style="border-radius: 30px;  width: 700px; min-width: -webkit-fill-available">

        <div class="title text-xl font-medium" style="display: flex; justify-content: center; align-items: center;">
             <span clas="text-green-500">
                 <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="height: 2.25rem">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                 </svg>
             </span>
             <h1 style="font-family: Barlow; padding: 15px">Detail osoby</h1>
        </div>


        <div class="w-full md:w-9/12 mx-2 h-64" style="width: 600px; margin-bottom: 15px;">
            <div class="bg-white p-3 shadow-sm rounded-sm">
                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">


                </div>
                <div class="text-gray-700">
                    <div class="grid md:grid-cols-2 text-sm">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Meno</div>
                            <div class="px-4 py-2"><?= $person->getName(); ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Priezvisko</div>
                            <div class="px-4 py-2"><?= $person->getSurname(); ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Deň narodenia</div>
                            <div class="px-4 py-2"><?= $person->getBirthDay(); ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Miesto narodenia</div>
                            <div class="px-4 py-2"><?= $person->getBirthPlace(); ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Krajina narodenia</div>
                            <div class="px-4 py-2"><?= $person->getBirthCountry(); ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Deň úmrtia</div>
                            <div class="px-4 py-2"><?= $person->getDeathDay(); ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Miesto úmrtia</div>
                            <div class="px-4 py-2"><?= $person->getDeathPlace(); ?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Krajina úmrtia</div>
                            <div class="px-4 py-2"><?= $person->getDeathCountry(); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="title text-xl font-medium" style="display: flex; justify-content: center; align-items: center;">
            <span clas="text-green-500">
                 <i class="fas fa-medal fa-lg" style='margin-right: 5px; color: #FFD700; text-shadow: 0 0 4px black;' ></i>
            </span>
            <h1 style="font-family: Barlow; padding: 15px">Umiestnenia</h1>
        </div>



        <div class="w-full md:w-9/12 mx-2 h-64" style="width: 745px; margin-bottom: 15px;">
            <div class="bg-white p-3 shadow-sm rounded-sm"><table class="min-w-max w-full table-auto bg-gray-100 bg-opacity-90">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <td class="py-3 px-6 text-left">Umiestnenie</td>
                        <td class="py-3 px-6 text-left">Disciplína</td>
                        <td class="py-3 px-6 text-left">Mesto</td>
                        <td class="py-3 px-6 text-center">Rok</td>
                        <td class="py-3 px-6 text-center">Typ</td>
                    </tr>
                    </thead>

                    <tbody class="text-gray-600 text-sm font-light">
                    <?php
                    foreach($person->getPlacements() as $placement) {
                        echo ($placement->getRow());
                    }
                    ?>
                    </tbody>
                </table>
                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">

                </div>
                <div class="text-gray-700">


                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" style="margin-top: 45px">
        <a href="index.php" style="text-align: center; color: white">
            <i class="fas fa-home fa-3x" aria-hidden="true"></i>
        </a>
    </button>
</div>
    <footer>
        <div id="ftr">
            Adam Trebichalský, 98014<br>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>