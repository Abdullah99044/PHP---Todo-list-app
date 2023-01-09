
<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\plans.model.php';


class PLansControl extends PlansModel {

    public function get_insert_into_tabels($name , $time  ,   $status ,    $id , $tabel){
        
        if($tabel == "tasks"){
        
            if(!empty($name) || !empty($time)    ){
                return $this-> insert_into_tabels( $name , $time ,   $status ,  $id , $tabel);
            }

        }else{

            if(!empty($name) ){
                return $this-> insert_into_tabels( $name , " " ,  " " , $id , $tabel);
            }
        }
        
    }

    public function show_user_data_from($id ,   $tabel  , $filter , $select){

        $data = [];
 
        $user_data = $this->select_group($id , $tabel , $filter , $select);

      
        
        if($user_data == "Nothing"){

            return "Nothing";


        }else{

            foreach($user_data as $value){

                $row = $this->select_from_tabel($value , $tabel);

                if($tabel == "tasks"){

                    array_push($data , $this->plan_information($row['name'] , $row['time'] , $row['status'] , $row['id'] ,   $tabel));
                    
                }else{

                    array_push($data , $this->plan_information($row['name'] , " " , " " ,  $row['id'] , $tabel));

                }
                
            }

            return $data;

        }

        return $user_data;

    }


    


    public function pp($id){

        $html = " ";

        $html .=    " <button onclick=\"showPlanForm('taskInsert$id')\" >add task</button>";

        $html .= " <div  style='display: none;' id='taskInsert$id' > ";

        $html .= "      <form action='' method='POST'> ";
        $html .= "          <input type='text' name='taskName' placeholder='Add a task'> ";
        $html .= "          <input type='number' name='taskTime' placeholder='Add time'> ";

         
        $html .= "          <input type='hidden' name='id' value='$id'> ";
        $html .= "          <input type='hidden' name='SubmitType' value='makeNewTask'> ";
        $html .= "           <br> ";
        $html .= "          <label> Status </label> ";
        $html .= "          <select name='status' id='status'>";
        $html .= "              <option value='important'>important</option>";
        $html .= "              <option value='normal'>normal</option>";
        $html .= "          </select> ";
        $html .= "           <br> ";
        $html .= "          <input type='submit' name='submit' value='submit'> ";
        $html .= "      </form> ";
        $html .= "      <button onclick=\"hidePlanForm('taskInsert$id')\" >forget</button> ";
        $html .= " </div> ";
        $html .= "           <br> ";

        // Door dit form kunnen we de lijst naam aanpassen

        $html .=    " <button onclick=\"showPlanForm('listEdit$id')\" >edit</button>";
                
        $html .=    " <div style='display: none;' id='listEdit$id' > ";


        $html .=    '     <form  action="" method="POST"> ';
        $html .=    "         <input type='text' name='editedListName' placeholder='edit the list'> ";
        $html .=    "         <input type='hidden' name='listId' value='$id'> ";
        $html .=    "         <input type='hidden' name='SubmitType' value='editList'> ";
        $html .=    "           <br> ";
        $html .=    "         <input type='submit' name='submit' value='submit'> ";

                
        $html .=    "     </form>  ";
        $html .=    " <button onclick=\"hidePlanForm('listEdit$id')\" >forget</button>";
        $html .=    "     </div>     ";  
        $html .= "           <br> ";

        

        $html .= "           <br> ";

        
        
        #################################################



        if($_POST['SubmitType'] == "filterTime"){

            $selectTask = $_POST['filterTimeTasks'];
            $task = $this->show_user_data_from($id ,  "tasks" ,  "filterOn" ,  $selectTask);
            
            if($task == "Nothing"){

                $html .= "no tasks";

            }else{

                foreach($task as $value){

                    $html .= $value  ;

                }

            }

       
            return $html;

        }
        
        if($_POST['SubmitType'] == "filterStatus"){

            $filter_tasks = $_POST['filterStatusTasks'];
            $task = $this->show_user_data_from($id ,  "tasks" ,  "filterStatus" ,   $filter_tasks);
            
            if($task == "Nothing"){

                $html .= "no tasks";

            }else{

                foreach($task as $value){

                    $html .= $value  ;

                }

            }

       
            return $html;
        
        
        
        
        
        
        } 
        

        $task = $this->show_user_data_from($id ,  "tasks" , " " , " ");

        if($task == "Nothing"){

            $html .= "no tasks";

        }else{

            foreach($task as $value){

                $html .= $value  ;

            }

        }

        return $html;
    

        
             


        
           
    }
    public function plan_information($name , $time , $status ,  $id , $tabel){

        $html = " ";
        $html .= "           <br> ";
        
        if($tabel == "plans"){

            $html .= " <div> ";
            $html .= "      <form action='' method='POST'> ";
            $html .= "          <label> $name  $id </label> ";
            $html .= "           <br> ";
            $html .= "          <input type='hidden' name='id' value='$id'> ";


            $html .= "          <input type='hidden' name='SubmitType' value='delete'> ";
            $html .= "          <input type='hidden' name='deleteType' value='plans'> ";
            $html .= "          <input type='submit' name='delete' value='delete'> ";
            $html .= "      </form> ";
            $html .= " <a href='/../../backendChallenge/toDoList/view/planning.view.php?plan=$id'> link </a> ";

            return $html;

        }elseif($tabel == "lists"){

            $html .= "           <br> ";
            $html .= " <div> ";
            $html .= "      <form action='' method='POST'> ";
            $html .= "          <label> $name  $id </label> ";
            $html .= "           <br> ";
            $html .= "          <input type='hidden' name='id' value='$id'> ";

            $html .= "          <input type='hidden' name='SubmitType' value='delete'> ";
            $html .= "          <input type='hidden' name='deleteType' value='lists'> ";
            $html .= "          <input type='submit' name='delete' value='delete'> ";
            $html .= "      </form> ";
            $html .= " </div> ";
          
        
            $html .=  $this-> pp($id);

            return $html;
            


        }else{ 

            $html .= " <div> ";
            $html .= "      <form action='' method='POST'> ";
            $html .= "          <label> $name   $time  $status  </label> ";
            $html .= "           <br> ";
            $html .= "          <input type='hidden' name='id' value='$id'> ";

            $html .= "          <input type='hidden' name='SubmitType' value='delete'> ";
            $html .= "          <input type='hidden' name='deleteType' value='tasks'> ";
            $html .= "          <input type='submit' name='delete' value='delete'> ";
            $html .= "      </form> ";
            $html .= " </div> ";

            $html .=    " <button onclick=\"showPlanForm('taskEdit$id')\" >edit</button>";

            $html .= " <div style='display: none;' id='taskEdit$id' > ";
            $html .= "      <form action='' method='POST'> ";
            $html .= "          <input type='text' name='editTaskName' placeholder='Add a task'> ";
            $html .= "          <input type='hidden' name='editTaskid' value='$id'> ";
            $html .= "          <input type='number' name='editTaskTime' placeholder='Add time'> ";
            $html .= "          <select name='editStatus' id='editStatus'>";
            $html .= "              <option value='important'>important</option>";
            $html .= "              <option value='normal'>normal</option>";
            $html .= "          </select> ";
            $html .= "          <input type='hidden' name='SubmitType' value='editTask'> ";
            $html .= "           <br> ";
            $html .= "          <input type='submit' name='submit' value='submit'> ";
            $html .= "      </form> ";
            $html .=    " <button onclick=\"hidePlanForm('taskEdit$id')\" >forget</button>";
            $html .= " </div> ";
            

            
        
            return $html;

        }
        
    }

    public function get_delete_info($id , $tabel){
        
        return $this->delete_info($id , $tabel);
        
        
    }

    

  
    public function control_get_plan_name($plan_id){

        return $this->get_plan_name($plan_id);

    }

    public function control_edit($tabel , $name , $id , $time , $status){

             
        return $this->edit($tabel ,  $name  , $id , $time ,  $status);
            
            
        
    }

}

 







?>