<?php

require_once('GeneralCharacter.php');


class AbilitatiSpeciale extends Abilities{
       //functie pentru abilitatea speciala forta dragonului 
    public function areFortaDragonului(){
        $sansa=rand(1,100);
        return $sansa <= 10;
       
    }

    // functie pentru abilitatea speciala scut fermecat
    public function areScutFermecat(){
        
        $sansa=rand(1,100);
        return $sansa <= 20;
    }
    
    public function ataca(Abilities $oponent){
        if($this->areFortaDragonului()){
            
            echo "<div class='alert alert-primary' role='alert'>".$this->getNume(). " are Forta Dragonului si loveste cu puterea ".($this->getPutere()*2)."</div>";
            echo "<br>";
            $oponent->apara($this->getPutere()*2);
        }else{
            $oponent->apara($this->getPutere());
        }
    }

    public function apara($putereAtac){
        if($this->areScutFermecat()){
            //$putereAtac=$putereAtac/2;
            $putereAtac/=2;
            echo "<div class='alert alert-secondary' role='alert'>".$this->getNume()." are Scutul Fermecat si va reduce puterea loviturii la ".$putereAtac."</div>";
        }

        parent::apara($putereAtac);
    }
}
?>