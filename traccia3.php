<?php
/*
Dato il seguente codice di partenza:

class Car { 
  private $num_telaio; 
}

class MyCar extends Car { 
  protected $license; 
  protected $name; 
} 


Completa la classe MyCar con le strutture mancanti e, utilizzando il livello di severita' che ritieni piu' opportuno,
estendi i metodi per stampare a terminale la seguente frase: 
“La mia macchina e' Opel, con targa ND 123 OJ e nmero di Telaio 1234“. 
*/

class Car { 
    private $num_telaio;

    public function __construct($num_telaio){
        $this->num_telaio = $num_telaio;
    }

}
  
class MyCar extends Car {
    protected $license; 
    protected $name;

    public function __construct($num_telaio, $license, $name){
        parent::__construct($num_telaio);
        $this->license = $license;
        $this->name = $name;
    }

    public function print(){
        echo "La mia macchina e $this->name, con targa $this->license e numero di Telaio $this->num_telaio.";
    }
} 

$car = new MyCar ("1234", "ND 123 OJ", "Opel");
$car->print();