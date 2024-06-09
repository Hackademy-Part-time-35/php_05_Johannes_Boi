<?php

/*
Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente: 

+-|Continent  
+-----------|Country 
+--------------------|Region 
+---------------------------|Province 
+------------------------------------|City 
+------------------------------------------|Street


Ogni classe avra' un attributo public del tipo: 

$nameContinent: 
$nameCountry; 
$nameRegion; 
$nameProvince; 
$nameCity; 
$nameStreet; 


La prima classe genitore avra' la seguente struttura: 


class Continent { 
  public $nameContinent; 
  public function __construct($continent) { 
    $this->nameContinent = $continent; 
  }
}


Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase:
“Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“ 


*/

class Continent{

    public $nameContinent; 

    public function __construct($continent) { 
        $this->nameContinent = $continent; 
    }

    public function getMyCurrentLocation(){
        return $this->nameContinent;
    }

};

class Country extends Continent{

    public $nameCountry;

    public function __construct($continent, $country){
        parent::__construct($continent);
        $this->nameCountry = $country;
    }

    public function getMyCurrentLocation(){
        return parent::getMyCurrentLocation() . ", " . $this->nameCountry;
    }

};

class Region extends Country{

    public $nameRegion;

    public function __construct($continent, $country, $region){
        parent::__construct($continent, $country, $region);
        $this->nameRegion = $region;
    }

    public function getMyCurrentLocation(){
        return parent::getMyCurrentLocation() . ", " . $this->nameRegion;
    }

};

class Province extends Region{

    public $nameProvince;

    public function __construct($continent, $country, $region, $province){
        parent::__construct($continent, $country, $region, $province);
        $this->nameProvince = $province;
    }

    public function getMyCurrentLocation(){
        return parent::getMyCurrentLocation() . ", " . $this->nameProvince;
    }

};

class City extends Province{

    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city){
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameCity = $city;
    }

    public function getMyCurrentLocation(){
        return parent::getMyCurrentLocation() . ", " . $this->nameCity;
    }

};

class Street extends City{

    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street){
        parent::__construct($continent, $country, $region, $province, $city, $street);
        $this->nameStreet = $street;
    }

    public function getMyCurrentLocation(){
        return parent::getMyCurrentLocation() . ", " . $this->nameStreet;
    }

};

$myLocation = new Street ("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");

echo "Mi trovo in " .$myLocation->getMyCurrentLocation();
