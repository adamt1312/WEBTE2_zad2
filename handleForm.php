<?php
require_once "classes/controllers/PersonController.php";
$personController = new PersonController();




if(isset($_POST['name'])) {


    // EDIT
    if(isset($_POST['id'])) {
        $person = $personController->getPerson($_POST['id']);
        $person->setName($_POST['name']);
        $person->setSurname($_POST['surname']);
        $personController->updatePerson($person);

    }
    // CREATE
    else {
        $person = new PersonTable2();
        $person->setName($_POST['name']);
        $person->setSurname($_POST['surname']);
        $person->setBirthDay($_POST['birth_day']);
        $person->setBirthPlace($_POST['birth_place']);
        $person->setBirthCountry($_POST['birth_country']);
        $person->setDeathDay($_POST['death_day']);
        $person->setDeathPlace($_POST['death_place']);
        $person->setDeathCountry($_POST['death_country']);

        $personController->insertPerson($person);
    }

//    header('Location: index.php');
}

