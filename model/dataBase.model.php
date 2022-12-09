<?php

session_start();

class DataBase {

    private $user_name      = "root";
    private $pass_word      = "mysql";
    private $server_name    = "localhost";
    private $data_base      = "todo";
     

    protected function make_connection(){

        return new mysqli($this->server_name , $this->user_name , $this->pass_word , $this->data_base);

        
    }

    public function check_connection(){

        if($this->make_connection()){

            return true;

        }else{
            die("Bad connection!");
            return false;
        }
    }


    protected function is_logged($user_name){

        $_SESSION["user_name"] = $user_name;  
        return $_SESSION["isLogged"] = TRUE;
    }


    public function user_authentication(){

        if(empty($_SESSION["user_name"]) &&  $_SESSION["isLogged"] != TRUE){

            return header('Location: /../../backendChallenge/toDoList/index.php'); 
            
        }
    }

}


$app = new DataBase;










?>