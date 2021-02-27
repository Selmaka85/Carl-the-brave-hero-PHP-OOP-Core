<?php

require_once('Carl.php');
require_once('Dragon.php');

class Main{
    
//initializarea duelului dintre dragon si carl eroul
public function duel(){
    
    $dragon = new Dragon();
    $carl= new Carl();
    
    echo "<div class='row'><div class='col-6'>".$dragon."</div><div class='col-6'>".$carl."</div></div>";

    // stabileste cine ataca primul in functie de viteza
    $cineAtaca=1;
    if($carl->getViteza()>$dragon->getViteza()){
        $cineAtaca=1;
    }elseif($carl->getViteza()<$dragon->getViteza()){
        $cineAtaca=2;
    }else{

        // stabileste cine ataca primul in functie de noroc daca au aceeasi viteza

        if($carl->getNoroc()>$dragon->getNoroc()){
            $cineAtaca=1;
        }else{
            $cineAtaca=2;
        }
    }

    //stabileste numarul de runde
    $runde=20;
// cat timp dragonul si carl is in viata se bat timp de 20 de runde
while($runde !=0 && $carl->isAlive() && $dragon->isAlive()){
    if($cineAtaca==1){
        $carl->ataca($dragon);
    }else{
        $dragon->ataca($carl);
    }
    $cineAtaca=$cineAtaca == 1?2:1;
    //decrementeaza rundele 
    $runde--;
}   
 if($carl->isAlive()&&$dragon->isAlive()){
     // daca la sfarsitul celor 20 runde is amandoi in viata se declara batalia remiza
     echo "Remiza";
 }elseif($carl->isAlive()){

    echo $carl->getNume()." a castigat!";

 }else{
     
     echo $dragon->getNume()." a castigat!";
 }
    
}

}

$engine = new Main();


?>

