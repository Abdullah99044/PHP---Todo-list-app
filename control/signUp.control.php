<?php


require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\signUp.model.php';



// Dit class controleert de input data van de gebruiker wanneer hij siggned up   en zorget dat zijn input is niet leeg


class SignUpControl extends SignUpModel {

    public function control_forms(){

        if(empty($_POST["name"]) || empty($_POST["userName"]) || empty($_POST["passWord"]) || empty($_POST["email"]) ){

            return "empty";
             
        }else{

            $name     = $_POST["name"];
            $userName = $_POST["userName"];
            $passWord = $_POST["passWord"];
            $email    = $_POST["email"];

            if($this->insert_user($userName , $passWord , $email , $name ) == false){

                return "inValid";

            }else{

                return $this->insert_user($userName , $passWord , $email , $name );

            }
            
        }
    }
}










?>