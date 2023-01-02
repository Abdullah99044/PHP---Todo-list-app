<?php

require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\control\signUp.control.php';

$warning_code = " ";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $signUp = new SignUpControl; 

    if($signUp->control_forms() == "inValid"){
        $warning_code = " Your information is all exist ";

    }elseif($signUp->control_forms()  == "empty"){
        $warning_code = " Please write something ";

    }else{
        $signUp->control_forms();
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

        <div>

            <h2><?= $warning_code ?></h2>
            <form action="" method="POST">
                <input type="text" placeholder="Your name" name="name" > 
                <input type="text" placeholder="Username"  name="userName">
                <input type="password" placeholder="Password" name="passWord">
                <input type="text" placeholder="email" name="email" >
                <input type="submit" value="Sign Up">
            </form>
        </div>

    </article>

    <?php  require   'pageParts/footer.view.php';   ?>

</body>
</html>