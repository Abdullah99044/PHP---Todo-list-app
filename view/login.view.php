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
        
        <div>

            <h2><?=$warning ?></h2>
            <form action="" method="POST">
                <input type="text" placeholder="Username"  name="userName">
                <input type="password" placeholder="Password" name="passWord">
                <input type="submit" value="Login">
            </form>
        </div>

    </article>

    <?php  require   'pageParts/footer.view.php';   ?>
</body>
</html>