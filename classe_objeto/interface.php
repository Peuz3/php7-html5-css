<div class="titulo">Interface</div>

<?php

interface Animal{
    function respirar();
}

interface Mamifero{
    function mamar();
}

interface Felino{
    function correr();
}

interface Canino extends Animal, Mamifero{
    function latir() : string;
}

class Cachorro implements Canino{
    function respirar(){
        return "Cachorro respira";
    }  

    function mamar(){
        return "Cachorro mama";
    }

    function latir() : string{
        return "Cachorro late";
    }

}

$cao = new Cachorro();
echo $cao->respirar() , "<br>";
echo $cao->mamar() , "<br>";
echo $cao->latir() , "<br>";

echo "<br>";
var_dump($cao instanceof Cachorro); 

echo "<br>";
var_dump($cao instanceof Animal);
var_dump($cao instanceof Mamifero);
var_dump($cao instanceof Canino);
var_dump($cao instanceof Felino);
