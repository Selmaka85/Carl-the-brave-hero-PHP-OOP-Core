<?php
require_once('InterfaceGeneralCharacter.php');

class Abilities implements GeneralAbilities{
    
    private $viata;
    private $putere;
    private $aparare;
    private $viteza;
    private $noroc;
    private $nume;
    
    public function __construct($viata,$putere,$aparare,$viteza,$noroc,$nume){
        
        $this->viata=$viata;
        $this->putere=$putere;
        $this->aparare=$aparare;
        $this->viteza=$viteza;
        $this->noroc=$noroc;
        $this->nume=$nume;
    }
    
  
    public function setViata($viata){
        $this->viata=$viata;
    }
    
    public function getViata(){
    
        return $this->viata;  
    }

    // get si set putere

    public function setPutere($putere){
        $this->putere=$putere;
    }

    public function getPutere(){
        return $this->putere;
    }

    //get si set aparare

    public function setAparare($aparare){
        $this->aparare=$aparare;
    }

    public function getAparare(){
        return $this->aparare;
    }

    //get si set viteza

    public function setViteza($viteza){
        $this->viteza=$viteza;
    }

    public function getViteza(){
        return $this->viteza;
    }

    // get si set noroc

    public function setNoroc($nume){
        $this->noroc=$noroc;
    }

    public function getNoroc(){
        return $this->noroc;
    }
        // get si set nume pentru fiecare caracter
    public function setNume($nume){
        $this->nume=$nume;
    }

    public function getNume(){
        return $this->nume;
    }

    
    public function ataca(Abilities $oponent){
        $oponent->apara($this->putere);
    }
    public function areNoroc(){

        $sansa=rand(1,100);
        if($sansa<=$this->getNoroc()){
            return true;
        }else{
            return false;
        }

    }
    public function apara($putere){

        $atac=$putere-$this->aparare;

        if($atac<0){
            $atac=0;
        }

        if($atac>100){
            $atac=100;
        }

        if(!$this->areNoroc()){
            $this->setViata($this->getViata()-$atac);
            echo $this->getNume()." nu are noroc si incaseaza un atac ". $atac." si a mai ramas cu: ".$this->getViata()." viata!<br>";
        }else{
            echo $this->getNume()." are noroc si nu incaseaza atacul primit<br>";
        }
    }
    // functie care verifica daca caracterele is inca in viata
    public function isAlive(){

        return $this->viata>0;

    }
      public function __toString(){
        return 
        "<table class='table'>".
            "<tr><th>Nume: ".$this->nume."</th></tr>".
            "<tr><td>Viata: ".$this->viata."</td></tr>".
            "<tr><td>Putere: ".$this->putere."</td></tr>".
            "<tr><td>Aparare:".$this->aparare."</td></tr>".
            "<tr><td>Viteza: ".$this->viteza."</td></tr>".
            "<tr><td>Noroc: ".$this->noroc."</td></tr>".
            "</table>";
    }
}
?>