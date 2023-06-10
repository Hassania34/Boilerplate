<?php

class Maman {
    //Block
    public function getNom(){
        return "je suis la maman" . PHP_EOL;
    }
}

class Enfant extends Maman {
    //block
    public function getNom (){
        return parent::getNOM() . "Je suis l'enfant" . PHP_EOL;
    }
}

$enfant = new Enfant ();
echo $enfant->getNom();

