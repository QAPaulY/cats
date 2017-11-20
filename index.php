<?php

class Cat
{
    static $canFly = false;
    public $name;
    public $age;
    public $hairColor = array();
    public $isAlive;
    const paws = 4;


    function __construct($name, $age, $hairColor)

    {
        $this->name = $name;
        $this->age = $age;
        $this->hairColor = $hairColor;
        $this->isAlive = true;
    }

    function __destruct()
    {
        $this->isAlive = false;
        echo '<br>Cat #' . $this->name . ' was killed by dicructor';
    }


    public function error()
    {
        Try
        {throw new Exception("<br>That's my error");}


    }


}


$cats = array();
for ($i = 1; $i < 11; $i++) {
    $cats[$i] = new Cat ($i, $i, array('red', 'black', 'white'));
    echo '<br>Cat #' . $i . ' was created';
}


$summ = 0;
$mult = 1;
for ($i = 1; $i <= count($cats); $i++) {
    $summ = $summ + $cats[$i]->age;
    $mult = $mult * $cats[$i]->age;
}
echo "<br> Summ of age is \n" . $summ . ' and mult of age is ' . $mult;


for ($i = 1; $i <= count($cats); $i++) {
    if ($cats[$i]->age > 3) {
        $meny = $meny + 1;
    }
}

if ($meny > 0)
    echo "<br> There is cat over 3 years old";

$old = 0;
if ($meny > 1) {
    for ($i = 1; $i <= count($cats); $i++) {
        if ($cats[$i]->age > 3) {
            echo "<br>  Cat #" . $i . 'is over 3 years old';
            $old = $old + sqrt($cats[$i]->age);
        }
    }

}
echo '<br> Old is ' . $old;


$cats[rand(1, 5)]->error();


for ($i = 1; $i < 100; $i++) {
    for ($j = 1; $j < 100; $j++) {
        if ($i * $j % 29)
            goto label;
    }
}

label:


if ($canFly == false) {
    echo '<br> Cats cannot fly';
} else {
    echo '<br>Cats can fly after kick';
}

