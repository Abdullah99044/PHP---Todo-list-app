
<?php

require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\plans.model.php';


class PLansControl extends PlansModel {

    public function get_insert_into_tabels($name , $id , $tabel){
        
     
        
        if(!empty($name)){
            return $this-> insert_into_tabels( $name , $id , $tabel);
        }
        
    }

    public function show_user_data_from($id , $tabel){

        $data = [];
        $user_data = $this->select_group($id , $tabel);

        if($user_data == "Nothing"){

            return "Nothing";


        }else{

            foreach($user_data as $value){

                $row = $this->select_from_tabel($value , $tabel);
                array_push($data , $this->plan_information($row['name'] , $row['id'] , $tabel));
            }

            return $data;

        }

        return $user_data;

    }

    public function plan_information($name , $id , $tabel){

        $html = " ";
        $html .= "           <br> ";
        $html .= " <div> ";
        $html .= "      <form action='' method='POST'> ";
        $html .= "          <label> $name  $id </label> ";
        $html .= "          <input type='hidden' name='id' value='$id'> ";

        if($tabel == "plans"){

            $html .= "          <input type='hidden' name='SubmitType' value='delete'> ";
            $html .= "          <input type='hidden' name='deleteType' value='plans'> ";


        }elseif($tabel == "lists"){

            $html .= "          <input type='hidden' name='SubmitType' value='delete'> ";
            $html .= "          <input type='hidden' name='deleteType' value='lists'> ";


        }else{

            $html .= "          <input type='hidden' name='SubmitType' value='delete'> ";
            $html .= "          <input type='hidden' name='deleteType' value='tasks'> ";


        }
        
        $html .= "           <br> ";
        $html .= "          <input type='submit' name='delete' value='delete'> ";
        $html .= "      </form> ";

        if($tabel == "plans"){

            $html .= " <a href='/../../backendChallenge/toDoList/view/planning.view.php?plan=$id'> link </a> ";

        }elseif($tabel == "lists"){

 
            $html .= " <div    id='taskInsert' > ";

            $html .= "      <form action='' method='POST'> ";
            $html .= "          <input type='text' name='taskName' placeholder='Add a task'> ";
            $html .= "          <input type='hidden' name='id' value='$id'> ";
            $html .= "          <input type='hidden' name='SubmitType' value='makeNewTask'> ";
            $html .= "           <br> ";
            $html .= "          <input type='submit' name='submit' value='submit'> ";
            $html .= "      </form> ";

            $task = $this->show_user_data_from($id , "tasks");

            if($task == "Nothing"){

                $html .= "no tasks";

            }else{

                foreach($task as $value){

                    $html .= $value  ;
        
                }

            }

            $html .= " </div> ";

        }

       
        $html .= " </div> ";
        

        return $html;
    }

    public function get_delete_info($id , $tabel){
        
        return $this->delete_info($id , $tabel);
        
        
    }

    

  
    public function control_get_plan_name($plan_id){

        return $this->get_plan_name($plan_id);

    }

}

 







?>