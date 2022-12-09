<?php


require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\login.model.php';


Class LoginControl extends LoginModel {

    
    public function login_control(){

        if(empty($_POST["userName"]) || empty($_POST["passWord"])){

            return "empty";
            
        }else{

            
            $user_name = $_POST["userName"];
            $password  = $_POST["passWord"];
            

            if($this->check_login($user_name , $password ) == false){

                return "inValid";

            }else{

                return $this->check_login($user_name , $password );

            }
            
        }

    }
}









?>