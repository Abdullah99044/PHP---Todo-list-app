
<?php

require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\dataBase.model.php';



echo $app->check_connection();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'style.php' ?>

    <title>Document</title>
</head>
<body>

    <?php  include   'view/pageParts/header.view.php'; ?>
    
    <article>


        <div class="indexButtonsBox">

            <div class="indexButton"  >

                <div class="button">
                    <a  href="/../../backendChallenge/toDoList/view/login.view.php">Login</a>
                </div>
            </div>

            <div class="indexButton">


                <div class="button">
                    <a class="button" href="/../../backendChallenge/toDoList/view/signUp.view.php">Signup</a>
                </div>
            </div>

        </div>

    </article>

    <?php  require   'view/pageParts/footer.view.php';  ?>

</body>
</html>