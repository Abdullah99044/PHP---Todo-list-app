<?php


require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\control\plans.control.php';

$app->user_authentication();

$plans_control = new PLansControl;

$plan_id = $_GET['plan'];
$plan_name = $plans_control->control_get_plan_name($plan_id );

if($_SERVER["REQUEST_METHOD"] == "POST"  ){

    if($_POST['SubmitType'] == "makeNewlist"){


        

        $list_name = $_POST['listName'];
        
        $plans_control->control_insert_into_lists($list_name , $plan_id , $plan_name);
        

    }

    if($_POST['SubmitType'] == "makeNewTask"){


        
        $plans_control->control_insert_into_Plans($_POST['planName']);

    }

    if($_POST['SubmitType'] == "deleteList"){
        
        echo "yes delete";
        $plans_control->control_delete_plan($_POST["id"]);
         
    }

    if($_POST['SubmitType'] == "deleteTask"){
        
        echo "yes delete";
        $plans_control->control_delete_plan($_POST["id"]);
         
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


        // $plans = $plans_control->show_user_plans();

        // if($plans == "No plans"){

        //     echo $plans;

        // }else{

        //     foreach($plans as $value){

        //         echo $value;
    
        //     }

        // }



    ?>
    
        
    
</body>
</html>