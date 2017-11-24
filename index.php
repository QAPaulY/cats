<?php

class Cat//initiation class cat
{//variable initiation
    static $canFly = false;
    public $name;
    public $age;
    public $hairColor = array();
    public $isAlive;
    const paws = 4;


    function __construct($name, $age, $hairColor)//constructor function

    {//assignment of values to variables
        $this->name = $name;
        $this->age = $age;
        $this->hairColor = $hairColor;
        $this->isAlive = true;
    }

    function __destruct()//delete all created items
    {
        $this->isAlive = false;
        echo "\n Cat #" . $this->name . ' was killed by dicructor';
    }


    public function error($err)
    {
        if ($err != true) {
            throw new Exception("\n That's my error");
        }

    }


}


$cats = array(); //initiation array cats
for ($i = 1; $i < 11; $i++) { //creation items of 'cats' class
    $cats[$i] = new Cat ($i, $i + 1, array('red', 'black', 'white'));
    echo "\n Cat #" . $i . ' was created';
}


$summ = 0;
$mult = 1;
for ($i = 1; $i <= count($cats); $i++) {//counting the amount and the product of the growths of all cats
    $summ = $summ + $cats[$i]->age;
    $mult = $mult * $cats[$i]->age;
}
echo "\n  Summ of age is " . $summ . ' and mult of age is ' . $mult;


for ($i = 1; $i <= count($cats); $i++) {
    if ($cats[$i]->age > 3) {//checking for cats over 3 years old
        $meny = $meny + 1;
    }
}

if ($meny > 0)
    echo "\n  There is cat over 3 years old";

$old = 0;
if ($meny > 1) {//the addition of the square roots of the cat's sprouts older than 3 years
    for ($i = 1; $i <= count($cats); $i++) {
        if ($cats[$i]->age > 3) {
            echo "\n   Cat #" . $i . 'is over 3 years old';
            $old = $old + sqrt($cats[$i]->age);
        }
    }

}
echo "\n  Old is " . $old;

Try {
    $cats[rand(1, 5)]->error(false);//calling error function for random item of cats
} catch (Exception $e) {//catch extention of function error
    echo $e->getMessage();
}


for ($i = 1; $i < 100; $i++) {//The nested loop checks the division of the value by 29 without residue
    for ($j = 1; $j < 100; $j++) {
        if ($i * $j % 29)
            goto label;
    }
}

label:


if ($canFly == false) {//check the ability of cats to fly
    echo "\n  Cats cannot fly";
} else {
    echo "\n Cats can fly after kick ";
}

