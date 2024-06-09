<?php
/*
Crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole: 

-le classi non devono avere attributi;

- ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;

- non puoi realizzare metodi definiti public per stampare il risultato;

- l’unico metodo public ammesso e' il costrutture. Il risultato atteso sara':



$magikarp = new Fish();
//Nel terminale visaulizzerete:
Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Splash!

*/

class Animal{
    public function __construct(){
        $this->presentation();
    }

    protected function presentation(){
        echo "";
    }
}

class Vertebrates extends Animal{

    protected function presentation(){
        parent::presentation();
        echo "Sono un vertebrato, ";
    }

};

class Cold_blooded extends Vertebrates{

    protected function presentation(){
        parent::presentation();
        echo "sono un sangue freddo, ";
    }

};

class Fish extends Cold_blooded{

    protected function presentation(){
        parent::presentation();
        echo "Splash!";
    }

};

$Magikarp = new Fish();
