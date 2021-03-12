<?php
class Placement
{

    private int $id;
    private int $person_id;
    private int $oh_id;
    private int $placing;
    private string $discipline;
    private string $city;
    private string $year;
    private string $type;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->person_id;
    }

    /**
     * @param int $person_id
     */
    public function setPersonId(int $person_id): void
    {
        $this->person_id = $person_id;
    }

    /**
     * @return int
     */
    public function getOhId(): int
    {
        return $this->oh_id;
    }

    /**
     * @param int $oh_id
     */
    public function setOhId(int $oh_id): void
    {
        $this->oh_id = $oh_id;
    }

    /**
     * @return int
     */
    public function getPlacing(): int
    {
        return $this->placing;
    }

    /**
     * @param int $placing
     */
    public function setPlacing(int $placing): void
    {
        $this->placing = $placing;
    }

    /**
     * @return string
     */
    public function getDiscipline(): string
    {
        return $this->discipline;
    }

    /**
     * @param string $discipline
     */
    public function setDiscipline(string $discipline): void
    {
        $this->discipline = $discipline;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    public function setYear(string $year): void
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getRow() {
        return "<tr class=\"border-b border-gray-200 hover:bg-blue-200 text-black\">
                    <td class=\"py-3 px-6 text-left whitespace-nowrap\">
                        <div class=\"flex items-center\">
                         $this->placing    
                        </div>
                    </td>
                     <td class=\"py-3 px-6 text-left whitespace-nowrap\">
                        <div class=\"flex items-center\">  
                            $this->discipline
                        </div>
                    </td>
                     <td class=\"py-3 px-6 text-center\">
                        <div class=\"flex items-center\">   
                            $this->city
                        </div>
                    </td>  
                    <td class=\"py-3 px-6 text-center\">
                        <div class=\"flex items-center\">   
                            $this->year
                        </div>
                    </td>
                    <td class=\"py-3 px-6 text-center\">
                        <div class=\"flex items-center\">   
                            $this->type
                        </div>
                    </td>      
                </tr>";
    }



}