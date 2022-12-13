<?php


require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\control\plans.control.php';

$app->user_authentication();

$plans_control = new PLansControl;


if($_SERVER["REQUEST_METHOD"] == "POST"  ){

    if($_POST['SubmitType'] == "makeNewPlan"){

        $plans_control->get_insert_into_tabels($_POST['planName'] , " " , "plans");

        // Hoef niet te invul de tweede argument want we hebben het niet nodig
 
    }

    if($_POST['SubmitType'] == "delete"){
        
        echo "yes delete";
        $plans_control->get_delete_info($_POST["id"] , "plans");
         
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

    <script src="/../../backendChallenge/toDoList/script.js" ></script>

</head>
<body>
    <h2>Welcom : <?= $_SESSION["user_name"] ?></h2>

    <button onclick="showPlanForm('planInsert')" >Make a plan</button>


    <div  style="display: none;"  id="planInsert" >

        <form  action="" method="POST">

            <input type="text" name="planName">
            <input type="hidden" name="SubmitType" value="makeNewPlan">
            <input type="submit" value="Submit">

        </form>

        <button onclick="hidePlanForm('planInsert')" >Forget</button>

    </div>


    <?php


        $plans = $plans_control->show_user_data_from(" " , "plans"); 

        // Hoef niet te invul de eerste argument want we hebben het niet nodig
        // We selecteren plans door user id en voor dit hebben we een functie binnen select_group() function

        if($plans == "Nothing"){

            echo "No plans";

        }else{

            foreach($plans as $value){

                echo $value;
    
            }

        }



    ?>
    
        
    
</body>
</html>