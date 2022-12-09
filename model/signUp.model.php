<?php


require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\dataBase.model.php';


class SignUpModel extends DataBase {


    protected function insert_user($user_name , $password , $email , $name ){
        

        $mysqli = $this->make_connection();

        $name       =  $mysqli->real_escape_string($name); 
        $user_name  =  $mysqli->real_escape_string($user_name); 
        $password   =  $mysqli->real_escape_string($password); 

        $query = $mysqli->prepare('SELECT COUNT(*) FROM users WHERE userName= ? OR email= ?');
        $query->bind_param("ss" ,  $user_name   , $email );
        $query->execute();

        $result = $query->get_result();
 
        $row    =   $result->fetch_assoc();
        $count  =   $row["COUNT(*)"];

        $query->close();

        if($count > 0 ){

            return false;

        }else{

            $query  = $mysqli->prepare("INSERT INTO users(userName , password , email , name) VALUES( ? , ? , ? , ?)");
            $query->bind_param("ssss"  ,  $user_name   , $password , $email , $name);
            $query->execute();

            if($query){
                
                $query->close();
                $mysqli->close();

                $this->is_logged($user_name) ;

                return header('Location: /../../backendChallenge/toDoList/view/personalPage.view.php');

            }else{

                return die("Query faild! signUp  " . mysqli_error($this->make_connection()) );
                
            }
        }
    }        
}



?>