<?php


require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\control\plans.control.php';

$app->user_authentication();

$plans_control = new PLansControl;


if($_SERVER["REQUEST_METHOD"] == "POST"  ){

    if($_POST['SubmitType'] == "makeNewPlan"){

        $plans_control->get_insert_into_tabels($_POST['planName'] , $_POST['planDiscription'], " " , " " ,  " " , "plans");

        // Hoef niet te invul de tweede argument want we hebben het niet nodig
 
    }

    if($_POST['SubmitType'] == "delete"){
        
        
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

    <script src="/../../backendChallenge/toDoList/ss.js" ></script>
    <?php require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\style.php'; ?>  

</head>
<body>

    <?php  require   'pageParts/header.view.php'; ?>


     

    <article>



        <div class="headerBox">

            <h2 class="welcoming" >Welcom : <?= $_SESSION["user_name"] ?></h2>

            <button class="makingPlanButton" onclick="showPlanForm('planInsert')" >Make a plan</button>


            

        </div>

            <div  class="makingPlanForm" style="display: block;"  id="planInsert" >

                <form  action="" method="POST">

                    <input class="makingPlanInput" type="text" name="planName" placeholder="plans name">
                    <textarea class="makingPlanTextArea" name="planDiscription" placeholder="About your plan..." ></textarea>
                    <input  type="hidden" name="SubmitType" value="makeNewPlan">
                    <input class="makingPlanButton" type="submit" value="Submit">

                </form>

                <button class="makingPlanButton" onclick="hidePlanForm('planInsert')" >Forget</button>


            </div>

        


    <?php


        $plans = $plans_control->show_user_data_from(" " ,  "plans" ,  " " , " " ,); 

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
    
    </article>

    
    <?php  require   'pageParts/footer.view.php';  ?>
    
        
    
</body>
</html>