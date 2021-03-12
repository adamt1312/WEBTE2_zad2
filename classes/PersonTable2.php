<?php


class PersonTable2
{
    private int $id;
    private string $name;
    private string $surname;
    private string $birth_day;
    private string $birth_place;
    private string $birth_country;
    private ?string $death_day;
    private ?string $death_place;
    private ?string $death_country;

    private ?int $gold_count;

    private $placements;


    public function setId(int $id): void
    {
        $this->id = intval($id);
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getPlacements()
    {
        return $this->placements;
    }

    /**
     * @param mixed $placements
     */
    public function setPlacements($placements): void
    {
        $this->placements = $placements;
    }

    /**
     * @return string
     */
    public function getBirthDay(): string
    {
        return $this->birth_day;
    }

    /**
     * @param string $birth_day
     */
    public function setBirthDay(string $birth_day): void
    {
        $this->birth_day = $birth_day;
    }

    /**
     * @return string
     */
    public function getBirthPlace(): string
    {
        return $this->birth_place;
    }

    /**
     * @param string $birth_place
     */
    public function setBirthPlace(string $birth_place): void
    {
        $this->birth_place = $birth_place;
    }

    /**
     * @return string
     */
    public function getBirthCountry(): string
    {
        return $this->birth_country;
    }

    /**
     * @param string $birth_country
     */
    public function setBirthCountry(string $birth_country): void
    {
        $this->birth_country = $birth_country;
    }

    /**
     * @return string|null
     */
    public function getDeathDay(): ?string
    {
        return $this->death_day;
    }

    /**
     * @param string|null $death_day
     */
    public function setDeathDay(?string $death_day): void
    {
        $this->death_day = $death_day;
    }

    /**
     * @return string|null
     */
    public function getDeathPlace(): ?string
    {
        return $this->death_place;
    }

    /**
     * @param string|null $death_place
     */
    public function setDeathPlace(?string $death_place): void
    {
        $this->death_place = $death_place;
    }

    /**
     * @return string|null
     */
    public function getDeathCountry(): ?string
    {
        return $this->death_country;
    }

    /**
     * @param string|null $death_country
     */
    public function setDeathCountry(?string $death_country): void
    {
        $this->death_country = $death_country;
    }




    public function getRow() {
        return "<tr class=\"border-b border-gray-200 hover:bg-blue-200 text-black\">
                    <td class=\"py-3 px-6 text-left whitespace-nowrap\">
                        <div class=\"flex items-center\">
                        <a href='personDetail.php?id=$this->id'>
                            <i class=\"fas fa-medal\" style='margin-right: 5px; color: #FFD700; text-shadow: 0 0 4px black;'></i>     
                            <span class=\"font-medium\">$this->name</span>
                        </a>                            
                        </div>
                    </td>
                     <td class=\"py-3 px-6 text-left whitespace-nowrap\">
                        <div class=\"flex items-center\">  
                            <a href='personDetail.php?id=$this->id'> 
                                <span class=\"font-medium\">$this->surname</span>
                            </a>
                        </div>
                    </td>
                     <td class=\"py-3 px-6 text-center\">
                        <div class=\"flex items-center appendH\" style='justify-content: center'>   
                            <span class='gc'>$this->gold_count</span>
                        </div>
                    </td>   
                     <td class=\"py-3 px-6 text-center\" style='justify-content: space-evenly'>
                     <div style='display: flex; flex-direction: row; justify-content: space-evenly; min-width: 70px;'>
                         <form method=\"post\" action=\"editPerson.php\">
                            <button type='submit' name='id' value=\"$this->id\"><i class=\"fa fa-user-edit fa-lg\"></i></button>
                         </form>  
                         <form method=\"post\" action=\"deletePerson.php\">
                            <button type='submit'  name='id' value=\"$this->id\"><i class=\"fa fa-trash-alt fa-lg\"></i></button>
                         </form>
                     </div>
                                                                                                       
                    </td>      
                </tr>";
    }
}