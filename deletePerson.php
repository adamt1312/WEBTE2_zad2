<?php

$person_controller = new PersonController();
$id = $_POST["id"];
$person_controller->deletePerson($id);

