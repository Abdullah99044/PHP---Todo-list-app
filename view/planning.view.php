<?php


require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\control\plans.control.php';

$app->user_authentication();

$plans_control = new PLansControl;

$plan_id = $_GET['plan'];



$plan_name = $plans_control->control_get_plan_name($plan_id );

if($_SERVER["REQUEST_METHOD"] == "POST"  ){

    if($_POST['SubmitType'] == "makeNewlist"){

        $list_name = $_POST['listName'];
        
        $plans_control->get_insert_into_tabels($list_name , " " ,  " " , $plan_id , "lists");
        

    }

    if($_POST['SubmitType'] == "makeNewTask"){


        $task_name = $_POST['taskName'];
        $task_time = $_POST['taskTime'];
         
        $list_id = $_POST['id'];
        $task_status = $_POST['status'];

        $plans_control->get_insert_into_tabels($task_name , $task_time ,   $task_status ,  $list_id  , "tasks");

    }

    if($_POST['SubmitType'] == "delete"){
        
        

        if($_POST['deleteType'] == "lists"){

            $list_id = $_POST['id'];
            $plans_control->get_delete_info($list_id , "lists" );

        }
        
        if($_POST['deleteType'] == "tasks"){
            

            $task_id = $_POST['id'];

            $plans_control->get_delete_info($task_id , "tasks");

        }

        
     
       
         
    }

    if($_POST['SubmitType'] == "editList"){

            
        $list_name = $_POST['editedListName'];
        $list_id   = $_POST['listId'];
        
       
        $plans_control->control_edit("lists" , $list_name , $list_id , " " , " " );
        

    }

    if($_POST['SubmitType'] == "editTask"){

            
        $task_name = $_POST['editTaskName'];
        $task_id   = $_POST['editTaskid'];
        $task_time   = $_POST['editTaskTime'];
        $task_status   = $_POST['editStatus'];
        
       
        $plans_control->control_edit("tasks" , $task_name , $task_id , $task_time , $task_status );
        

    }

    
    
}

 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\style.php'; ?>  

    <title>Document</title>

    

     

    

</head>
<body>
     

    <?php  require   'pageParts/header.view.php'; ?>


    <article>
    
        <button onclick="showPlanForm('planInsert')" >Make a plan</button>


        <div    id="planInsert" >

            <form  action="" method="POST">

                <input type="text" name="listName">
                <input type="hidden" name="SubmitType" value="makeNewlist">
                <input type="submit" value="Submit">

            </form>

            <button onclick="hidePlanForm('planInsert')" >Forget</button>

        </div>


        <form  action="" method="POST"> 

            <select name='filterStatusTasks' id='filterStatusTasks'>
                    <option value='importantTasks'>Show important tasks</option>
                    <option value='normalTasks'>Show normal tasks</option>
            </select> 
            <input type='hidden' name='SubmitType' value='filterStatus'> 
            <input type='submit' name='submit' value='filter tasks time'> 
        </form>  

        <form  action="" method="POST"> 
                  <select name='filterTimeTasks' id='filterTimeTasks'>
                      <option value='From high to low'>From high to low</option>
                      <option value='From low to high'>From low to hig</option>
                  </select> 
                <input type='hidden' name='SubmitType' value='filterTime'> 
                 <input type='submit' name='submit' value='filter tasks time'>
             </form> 
      

          <?php 


           
            
 
            $list = $plans_control->show_user_data_from($plan_id ,  "lists" , " " , " ");

            if($list == "Nothing"){

                echo $list;

            }else{

                foreach($list as $value){

                    echo $value;
        
                }

            }

            

        ?>  
        
                



        <script src="/../../backendChallenge/toDoList/ss.js" >

        </script>

    </article>

    <?php  require   'pageParts/footer.view.php';   ?>


    
</body>
</html>