<?php /** @noinspection ALL */

class OlympicGames {

    private $id;
    private $type;
    private $year;
    private $order;
    private $city;
    private $country;

    public function getRow () {
        return "<tr>
                    <td>$this->id</td>
                    <td>$this->type</td>
                    <td>$this->year</td>        
                    <td>$this->order</td>
                    <td>$this->city</td>
                    <td>$this->country</td>
                </tr>";
    }
}