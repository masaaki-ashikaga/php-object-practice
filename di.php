<?php


class Staff{

    public $name;
    public $age;

    public function __construct($name){
        $this->name = $name;
    }

    public function Hello(){
        echo "hi, i am $this->name!";
    }

    public function work(){
        echo "$this->name is cleaning table";
    }

}

$tanaka = new Staff("tanaka");

//$tanaka->name = "tanaka";
echo $tanaka->name;
echo '<br>';
$tanaka->Hello();
echo '<br>';

$tanaka->work();