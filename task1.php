<?php
class Prototype extends ArrayObject
{    
    public function __get($key)
    {
        return $this[$key];
    }

    public function __set($key, $value)
    {
        $this[$key] =  $value;
    }

    public function importObj($array = []){

        if(count($array) > 0){
            $this->import($array);
        }
        return $this;
    }

    public function import($input)
    {
        $this->exchangeArray($input);
        return $this;
    }

    

    public function displayAsTable () {
        $sOutput = '<table border="2"><tbody>';
          foreach ($this as $key => $value) {
            $sOutput .= sprintf('<tr><td>%s</td><td>%s</td></tr>',
                $key,
                $value
        );
    }
    $sOutput .= print '</tbody></table>';
    return $sOutput;
    }
}


$add = ['age' => '27', 'country' => 'BD']; //sample data
$Prototype = new Prototype; //object creation
$Prototype->importObj($add); //input data
$Prototype->name='azad'; //pass key -> value data
$Prototype->favorit='online game dota 2';
print_r($Prototype->displayAsTable()); //print table as html

