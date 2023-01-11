

<?php


require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\dataBase.model.php';


class LoginModel extends DataBase {


   // Dit functie controleert de user input data wanneer hij logged in en insert de data als hij nieuwe is

    protected function check_login($user_name , $password ){
        
        $mysqli     =  $this->make_connection();

        $user_name  =  $mysqli->real_escape_string($user_name); 
        $password   =  $mysqli->real_escape_string($password); 

        $query      =  $mysqli->prepare("SELECT COUNT(*) FROM users WHERE userName = ? AND password = ? ");

        $query->bind_param("ss" , $user_name , $password );
        $query->execute();

        $result     =  $query->get_result();

        if($result){

            $row    =  $result->fetch_assoc();
            $count  =  $row["COUNT(*)"];

            
            if($count > 0){

                $this->is_logged($user_name);

                return header('Location: /../../backendChallenge/toDoList/view/personalPage.view.php');

            }else{

                return false;
            }


        }else{

            die("Query failed! login " . mysqli_error($this->make_connection()));

        }

    }

}










?>