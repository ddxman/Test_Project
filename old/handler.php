<?php
    include('includes/db.php');

    $login = $_GET['login'];
    $password = $_GET['password'];
    
    $count = mysqli_query($connection,"SELECT * FROM test_database.users WHERE `login` = '$login' AND `password`= '$password'");
    if(mysqli_num_rows($count) == 0){
        echo 'Вы не зарегистрированы';
    }
    else{
        echo 'Привет '. $login;
    }
?>