<?php /** @noinspection ALL */

class PersonTable1 {

    private $id;
    private $name;
    private $surname;
    private $year;
    private $city;
    private $type;
    private $discipline;

    private $birth_day;
    private $birth_place;
    private $birth_country;
    private $death_day;
    private $death_place;
    private $death_country;


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
                    <td class=\"py-3 px-6 text-center\" style='justify-content: space-evenly'>
                         <div style='display: flex; flex-direction: row; justify-content: space-evenly'>
                             <form action=\"\" method=\"post\">
                                <button><i class=\"fa fa-user-edit fa-lg\"></i></button>
                             </form>  
                             <form method=\"post\" action=\"deletePerson.php\">
                                <button type='submit'  name='id' value=\"$this->id\"><i class=\"fa fa-trash-alt fa-lg\"></i></button>
                             </form>
                         </div>                                                                                                       
                    </td>      
                         
                </tr>";
    }
}

//<div class=\"flex items-center\" style='justify-content: space-evenly'>   </div>