<?php

require_once "classes/PersonTable1.php";
require_once "classes/Placement.php";
require_once "classes/helper/Database.php";
require_once "classes/PersonTable2.php";

class PersonController
{

    private PDO $conn;

    public function __construct()
    {
        $this->conn = (new Database())->getConnection();
    }

    public function getAllPeople() {
        $stmt = $this->conn->prepare("SELECT osoby.id, osoby.name, osoby.surname, oh.year, oh.city, oh.type, umiestnenia.discipline FROM osoby JOIN umiestnenia ON osoby.id = umiestnenia.person_id JOIN oh ON oh.id = umiestnenia.oh_id");
        $stmt->execute();
        $people = $stmt->fetchAll(PDO::FETCH_CLASS, "PersonTable1");

        return $people;
    }

    public function getGoldMedalists()
    {
        $stmt = $this->conn->prepare("select osoby.*, sum(u.placing = 1) as gold_count from osoby join umiestnenia u on osoby.id = u.person_id WHERE u.placing = 1 group by osoby.id ORDER BY sum(u.placing = 1) DESC LIMIT 10;");
        $stmt->execute();
        $people = $stmt->fetchAll(PDO::FETCH_CLASS, "PersonTable2");

        foreach ($people as $person) {

            $stmt = $this->conn->prepare("select umiestnenia.*, oh.city from umiestnenia join oh on umiestnenia.oh_id = oh.id where person_id = :personId; ");
            $stmt->bindParam(":personId", $person->getId(), PDO::PARAM_INT);
            $stmt->execute();
            $placements = $stmt->fetchAll(PDO::FETCH_CLASS, "Placement");
            $person->setPlacements($placements);
        }

        return $people;
    }

    public function getPerson(int $id)
    {
        $stmt = $this->conn->prepare("select osoby.*, sum(u.placing = 1) as gold_count from osoby left OUTER join umiestnenia u on osoby.id = u.person_id where osoby.id = :personId;");
        $stmt->bindParam(":personId", $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, "PersonTable2");
        $person = $stmt->fetch();

        $stmt = $this->conn->prepare("select umiestnenia.*, oh.city, oh.year, oh.type from umiestnenia join oh on umiestnenia.oh_id = oh.id where person_id = :personId ORDER BY umiestnenia.placing ASC ; ");
        $stmt->bindParam(":personId", $id, PDO::PARAM_INT);
        $stmt->execute();
        $placements = $stmt->fetchAll(PDO::FETCH_CLASS, "Placement");
        $person->setPlacements($placements);

        return $person;
    }

    public function insertPerson(PersonTable2 $person)
    {

        $stmt = $this->conn->prepare("Insert into osoby (name, surname, birth_day, birth_place, birth_country, death_day, death_place, death_country) values (:name, :surname, :birth_day, :birth_place, :birth_country, :death_day, :death_place, :death_country)");
        $name = $person->getName();
        $surname = $person->getSurname();
        $birth_day = $person->getBirthDay();
        $birth_place = $person->getBirthPlace();
        $birth_country = $person->getBirthCountry();
        $death_day = $person->getDeathDay();
        $death_place = $person->getDeathPlace();
        $death_country = $person->getDeathCountry();

        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":surname", $surname, PDO::PARAM_STR);
        $stmt->bindParam(":birth_day", $birth_day, PDO::PARAM_STR);
        $stmt->bindParam(":birth_place", $birth_place, PDO::PARAM_STR);
        $stmt->bindParam(":birth_country", $birth_country, PDO::PARAM_STR);
        $stmt->bindParam(":death_day", $death_day, PDO::PARAM_STR);
        $stmt->bindParam(":death_place", $death_place, PDO::PARAM_STR);
        $stmt->bindParam(":death_country", $death_country, PDO::PARAM_STR);


        $stmt->execute();
        return $this->conn->lastInsertId();
    }

    public function updatePerson(PersonTable2 $person)
    {
        $stmt = $this->conn->prepare("Update osoby set name=:name, surname=:surname, birth_day=:birth_day, birth_place=:birth_place, birth_country=:birth_country, death_day=:death_day, death_place=:death_place, death_country=:death_country  where id = :personId");
        $name = $person->getName();
        $surname = $person->getSurname();
        $birth_day = $person->getBirthDay();
        $birth_place = $person->getBirthPlace();
        $birth_country = $person->getBirthCountry();
        $death_day = $person->getDeathDay();
        $death_place = $person->getDeathPlace();
        $death_country = $person->getDeathCountry();
        $id = $person->getId();
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":surname", $surname, PDO::PARAM_STR);
        $stmt->bindParam(":birth_day", $birth_day, PDO::PARAM_STR);
        $stmt->bindParam(":birth_place", $birth_place, PDO::PARAM_STR);
        $stmt->bindParam(":birth_country", $birth_country, PDO::PARAM_STR);
        $stmt->bindParam(":death_day", $death_day, PDO::PARAM_STR);
        $stmt->bindParam(":death_place", $death_place, PDO::PARAM_STR);
        $stmt->bindParam(":death_country", $death_country, PDO::PARAM_STR);
        $stmt->bindParam(":personId", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function deletePerson($id) {
        $stmt = $this->conn->prepare("DELETE FROM osoby WHERE osoby.id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

}