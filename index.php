<?php
//1. Создать класс Cat:
class Cat
    {
        static $canFly = false;
        public $name;
        public $age;
        public $hairColor = array();
        public $isAlive;
        const lapki = 4;


        function __construct($name, $age, $hairColor, $isAlive)

        {
            $this->name = $name;
            $this->age = $age;
            $this->hairColor = $hairColor;
            $this->isAlive = $isAlive;
        }

        function __destruct()
        {
           $this->isAlive = false;
           echo '<br>Cat #'.$this->name.' was killed by dicructor';
           }


        public function error($err)
        {
            Try{
                if ($err = true)
                {throw new Exception("<br>That's my error");}
            }catch (Exception $e){
                echo$e->getMessage();
            }


        }



    }



$cats = array();
    for ($i=1; $i<6; $i++)
        {
            $cats[$i] = new Cat ($i,$i,array ('red','black','white'),true);
            echo '<br>Cat #'.$i.' was created';
        }



$summ = 0;
$mult = 1;
    for ($i=1; $i<6; $i++)
        {
            $summ = $summ + $cats[$i]->age;
            $mult = $mult * $cats[$i]->age;
        }
    echo '<br> Summ of age is '.$summ.' and mult of age is '.$mult;



    for ($i=1; $i<6; $i++) {
        if ($cats[$i]->age>3)
        {
            $meny = $meny + 1;
        }
        }

    if ($meny >0)
        echo '<br>  There is cat over 3 years old';

    if ($meny >1)
        {
            for ($j=1; $j<6; $j++) {
                if ($cats[$j]->age>3)
                    {
                        echo '<br>  Cat #'.$j.' is over 3 years old';
                        $old = $old + ($cats[$j]->age * $cats[$j]->age);
            }
        }

    }
    echo '<br> Old is '.$old;



    $cats[rand(1,5)]->error(false);



    for ($i=1; $i<6; $i++)
    {
        for ($j=1; $j<6; $j++)
        {
            if ($i*$j % 29)
                goto label;
        }
    }

    label:



    if ($canFly == false)
    {
        echo '<br> Cats cannot fly';}
        else
        {
            echo '<br>Cats can fly after kick';
        }
