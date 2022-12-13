<?php

require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\dataBase.model.php';



class PlansModel extends DataBase {


    // Dit functie neemt de user id uit de users tabel om het te toevoegen in of te lezen uit de plans tabel 

    protected function get_userId(){

        $user_name = $_SESSION["user_name"] ;

        $mysqli = $this->make_connection();
        $query = $mysqli->prepare("SELECT id FROM users WHERE userName = ? ");
        $query->bind_param("s" , $user_name );
        $query->execute();

        $result = $query->get_result();

        $row = $result->fetch_assoc();

        $id = $row['id'];

        $result->close();
        $query->close();
        $mysqli->close();

        return $id;


    }

    // Dit functie insert data in tabels  


    protected function insert_into_tabels($name , $id , $tabel){


        $mysqli = $this->make_connection();

        $name = $mysqli->real_escape_string($name);

        if($tabel == "plans"){

            $id = $this->get_userId();
            $query = $mysqli->prepare("INSERT INTO plans(name , userId ) VALUES(? , ? )  ");
            $query->bind_param("si" , $name , $id);

        }elseif($tabel == "lists"){

            $query = $mysqli->prepare("INSERT INTO lists(name , planId ) VALUES(? , ? )  ");
            $query->bind_param("si" , $name , $id);

        }else{

            $query = $mysqli->prepare("INSERT INTO tasks(name , listId ) VALUES(? , ? )  ");
            $query->bind_param("si" , $name , $id);
        }
       
      
        $query->execute();

        $query->close();
        $mysqli->close();

        if($tabel == "plans"){

            return header('Location: /../../backendChallenge/toDoList/view/personalPage.view.php');

        }

        return;
        
        
    }

     // Dit functie leest de data uit de ingevoerd tabel


    protected function select_group($id , $tabel){

        

        $mysqli = $this->make_connection();

          
        if($tabel == "plans"){

            $user_id = $this->get_userId();
            $query = $mysqli->prepare("SELECT  GROUP_CONCAT(id) FROM plans WHERE userId = ? ");
            $query->bind_param("i" , $user_id);

        }elseif($tabel == "lists"){

            $query = $mysqli->prepare("SELECT  GROUP_CONCAT(id) FROM lists WHERE planId = ? ");
            $query->bind_param("i" , $id);
            
        }else{

            $query = $mysqli->prepare("SELECT  GROUP_CONCAT(id) FROM tasks WHERE listId = ? ");
            $query->bind_param("i" , $id);

        }

        
        
        $query->execute();

        $result = $query->get_result();
        $row = $result->fetch_assoc();

        $result->close();
        $query->close();
        $mysqli->close();

        $group_id = strval($row['GROUP_CONCAT(id)']);

        if(empty($group_id)){

            return "Nothing";
            

        }else{
 
            $group_id = explode("," ,   $group_id );

            return $group_id;

        }

        
    }


    // Dit functie selecteert row uit de ingevoerd tabel

    protected function select_from_tabel($id , $tabel){


        $id = intval($id);

        $mysqli = $this->make_connection();

        if($tabel == "plans"){

            $query = $mysqli->prepare("SELECT * FROM plans WHERE id = ? ");

        }elseif($tabel == "lists"){

            $query = $mysqli->prepare("SELECT * FROM lists WHERE id = ? ");

        }else{

            $query = $mysqli->prepare("SELECT * FROM tasks WHERE id = ? ");

        }

       
        $query->bind_param("i" ,  $id);
        $query->execute();

        $result = $query->get_result();
        $row = $result->fetch_assoc();


        $result->close();
        $query->close();
        $mysqli->close();

        return $row;


    }


    // Dit functie verwijdert data uit de ingevoerd tabel


    protected function delete_info($id , $tabel){
        
        
        $mysqli = $this->make_connection();
        $id = $mysqli->real_escape_string($id);
        $id = intval($id);

        if($tabel == "plans"){

            $query = $mysqli->prepare("DELETE FROM plans WHERE id = ? ");

        }elseif($tabel == "lists"){

            $query = $mysqli->prepare("DELETE FROM lists WHERE id = ? ");

        }elseif($tabel == "tasks"){
            
        
            $query = $mysqli->prepare("DELETE FROM tasks WHERE id = ? ");
             
        }
       
        $query->bind_param("i" , $id);
        $query->execute();

        
        $query->close();
        $mysqli->close();

        return;


    }

 

    protected function get_plan_name($plan_id){

        $mysqli = $this->make_connection();

        $plan_id = $mysqli->real_escape_string($plan_id);
        
        

        $query = $mysqli->prepare("SELECT * FROM plans WHERE id = ? ");
        $query->bind_param("i" , $plan_id  );
        $query->execute();

        $result = $query->get_result();
        $row = $result->fetch_assoc();

        $result->close();
        $query->close();
        $mysqli->close();

        return $row['name'] ;

    }



}









?>