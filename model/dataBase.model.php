<?php

// Dit class is de hoofd van de applicatie



session_start();
$_SESSION["isLogged"] = FALSE;

class DataBase {


    // Database infromatie

    private $user_name      = "root";
    private $pass_word      = "mysql";
    private $server_name    = "localhost";
    private $data_base      = "todo";
     


    // Maken connectie met de data base

    protected function make_connection(){

        return new mysqli($this->server_name , $this->user_name , $this->pass_word , $this->data_base);

        
    }

    //Het connectie controleren of er een probleem is

    public function check_connection(){

        if($this->make_connection()){

            return;

        }else{
            die("Bad connection!");
            return;
        }
    }



    // Zorgen dat de user data is in een session opgeslagen wanner hij loggin

    protected function is_logged($user_name){

        $_SESSION["user_name"] = $user_name;  
        return $_SESSION["isLogged"] = TRUE;
    }


    // Uitloggen van de applicatie

    public function log_out(){

        session_destroy();

        return header('Location: /../../backendChallenge/toDoList/index.php'); 
    }


    // Controleren of de gebruiker is al in gelogged 

    public function user_authentication(){

        if(empty($_SESSION["user_name"]) &&  $_SESSION["isLogged"] != TRUE){

            return header('Location: /../../backendChallenge/toDoList/index.php'); 
            
        }else {

            return true;
        }
    }

}


$app = new DataBase;










?>