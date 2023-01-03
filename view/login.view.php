<?php

require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\control\login.control.php';

$warning = " ";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $login = new LoginControl;

    if($login->login_control() == "inValid"){

        $warning = " This account does not exist!";

    }elseif($login->login_control() == "empty"){

        $warning = " Please write something";

    }else{

        $login->login_control();

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
        
        <h2 class="loginPageWarning"><?=$warning ?></h2>

        <div class="loginBox">

            <div>

                <form action="" method="POST">
                    <input class="loginForm" type="text" placeholder="Username"  name="userName">
                    <input class="loginForm" type="password" placeholder="Password" name="passWord">
                    <input class="loginSubmmit" type="submit" value="Login">
                </form>

            </div>

        </div>

    </article>

    <?php  require   'pageParts/footer.view.php';   ?>
</body>
</html>