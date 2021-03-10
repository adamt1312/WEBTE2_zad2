<?php /** @noinspection ALL */

class PersonTable1 {

    private $id;
    private $name;
    private $surname;
    private $year;
    private $city;
    private $type;
    private $discipline;

    public function getRow() {
        return "<tr class=\"border-b border-gray-200 hover:bg-blue-200 text-black\">
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
                     <td class=\"py-3 px-6 text-left\">
                        <div class=\"flex items-center\">   
                            <span>$this->year</span>
                        </div>
                    </td>       
                    <td class=\"py-3 px-6 text-left\">
                        <div class=\"flex items-center\">   
                            <span>$this->city</span>
                        </div>
                    </td>  
                    <td class=\"py-3 px-6 text-left\">
                        <div class=\"flex items-center\">   
                            <span>$this->type</span>
                        </div>
                    </td>  
                    <td class=\"py-3 px-6 text-left\">
                        <div class=\"flex items-center\">   
                            <span>$this->discipline</span>
                        </div>
                    </td>  
                         
                </tr>";
    }
}

//<div class=\"flex items-center\" style='justify-content: space-evenly'>   </div>