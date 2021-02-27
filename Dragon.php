<?php
require_once('GeneralCharacter.php');

class Dragon extends Abilities{
    
    public function __construct(){
        parent::__construct(rand(65,90),rand(60,70),rand(40,50),rand(40,50),rand(10,30),"Dragon");
    } 
    
}
?>