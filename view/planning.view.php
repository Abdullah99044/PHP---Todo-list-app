<?php


require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\control\plans.control.php';

$app->user_authentication();

$plans_control = new PLansControl;

$plan_id = $_GET['plan'];



$plan_name = $plans_control->control_get_plan_name($plan_id );

if($_SERVER["REQUEST_METHOD"] == "POST"  ){

    if($_POST['SubmitType'] == "makeNewlist"){

        $list_name = $_POST['listName'];
        
        $plans_control->get_insert_into_tabels($list_name , $plan_id , "lists");
        

    }

    if($_POST['SubmitType'] == "makeNewTask"){


        $task_name = $_POST['taskName'];
        $list_id = $_POST['id'];

        $plans_control->get_insert_into_tabels($task_name , $list_id  , "tasks");

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
    
    
}

 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="/../../backendChallenge/toDoList/script.js" >

     

    </script>
    

</head>
<body>
     

    
    <button onclick="showPlanForm('planInsert')" >Make a plan</button>


    <div    id="planInsert" >

        <form  action="" method="POST">

            <input type="text" name="listName">
            <input type="hidden" name="SubmitType" value="makeNewlist">
            <input type="submit" value="Submit">

        </form>

        <button onclick="hidePlanForm('planInsert')" >Forget</button>

    </div>

    <?php


        $list = $plans_control->show_user_data_from($plan_id , "lists");

        if($list == "Nothing"){

            echo $list;

        }else{

            foreach($list as $value){

                echo $value;
    
            }

        }

    ?>
    
        
    
</body>
</html>