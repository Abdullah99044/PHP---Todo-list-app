<?php

require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\dataBase.model.php';



class PlansModel extends DataBase {


    // Dit functie nemt de user id uit de users tabel om het te toevoegen in of te lezen uit de plans tabel 

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

    // Dit functie insert data in tabels plan


    protected function insert_into_plans($plan_name , $userId){


        $mysqli = $this->make_connection();

        $plan_name = $mysqli->real_escape_string($plan_name);

        $query = $mysqli->prepare("INSERT INTO plans(planName , userId ) VALUES(? , ? )  ");
        $query->bind_param("si" , $plan_name , $userId);
        $query->execute();

        $query->close();
        $mysqli->close();

        return header('Location: /../../backendChallenge/toDoList/view/personalPage.view.php');
        
    }

     // Dit functie lezt de user plannen   uit de tabels plan 

    protected function select_user_plans(){

        $user_id = $this->get_userId();

        $mysqli = $this->make_connection();

          
         

        $query = $mysqli->prepare("SELECT  GROUP_CONCAT(id) FROM plans WHERE userId = ? ");
        $query->bind_param("i" , $user_id);
        $query->execute();

        $result = $query->get_result();
        $row = $result->fetch_assoc();

        $result->close();
        $query->close();
        $mysqli->close();

        $user_plans_id = strval($row['GROUP_CONCAT(id)']);

        if(empty($user_plans_id)){

            return "No plans";
            

        }else{
 
            $user_plans_id = explode("," ,   $user_plans_id );

            return $user_plans_id;

        }

        
    }

    protected function select_plan($plan_id){


        $plan_id = intval($plan_id);

        $mysqli = $this->make_connection();


        $query = $mysqli->prepare("SELECT * FROM plans WHERE id = ? ");
        $query->bind_param("i" , $plan_id);
        $query->execute();

        $result = $query->get_result();
        $row = $result->fetch_assoc();


        $result->close();
        $query->close();
        $mysqli->close();

        return $row;


    }

    protected function delete_plan($plan_id){
        
        
        $mysqli = $this->make_connection();
        $plan_id = $mysqli->real_escape_string($plan_id);
        $plan_id = intval($plan_id);

        $query = $mysqli->prepare("DELETE FROM plans WHERE id = ? ");
        $query->bind_param("i" , $plan_id);
        $query->execute();

        
        $query->close();
        $mysqli->close();

        return;


    }


    protected function insert_into_lists($list_name , $planId ){


        $mysqli = $this->make_connection();

        $list_name = $mysqli->real_escape_string($list_name);
        $planId = $mysqli->real_escape_string($planId);
        

        $query = $mysqli->prepare("INSERT INTO lists(name , planId ) VALUES( ? , ? )  ");
        $query->bind_param("si" , $list_name , $planId );
        $query->execute();

        $query->close();
        $mysqli->close();

        return ;
        
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

        return $row['planName'] ;

    }



}









?>