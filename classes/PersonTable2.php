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



    public function getRow() {
        return "<tr class=\"border-b border-gray-200 hover:bg-gray-100\">
                    <td class=\"py-3 px-6 text-left whitespace-nowrap\">
                        <div class=\"flex items-center\">
                            <i class=\"fas fa-medal\" style='margin-right: 5px'></i>     
                            <span class=\"font-medium\">$this->name</span>
                        </div>
                    </td>
                     <td class=\"py-3 px-6 text-left whitespace-nowrap\">
                        <div class=\"flex items-center\">  
                            <span class=\"font-medium\">$this->surname</span>
                        </div>
                    </td>
                     <td class=\"py-3 px-6 text-center\">
                        <div class=\"flex items-center appendH\" style='justify-content: center'>   
                            <span class='gc'>$this->gold_count</span>
                        </div>
                    </td>       
                </tr>";
    }

}