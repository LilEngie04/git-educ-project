<?php
    session_start();
    $name=($_POST['name']);
    $pass=($_POST['pass']);
    if(array_key_exists("submit_in",$_POST)){
        if(   !isset($_COOKIE['name']) or !isset($_COOKIE['pass']) or  $name!=($_COOKIE['name']) or $pass!=($_COOKIE['pass']) or $name==""){
            echo '<p>Не вірні дані</p><br><a href="start.php">Назад</a>';
        }
        else{
            $_SESSION['name']=$name;
            $_SESSION['pass']=$pass;
            header('Location: math.php');
        }
    }
    else if(array_key_exists("submit_reg",$_POST)) {
        if(  $pass=="" or $name==""){
            echo '<p>Не вірні дані</p><br><a href="start.php">Назад</a>';
        }
        else {
            setcookie('name', $name);
            setcookie('pass', $pass);
            echo '<p>Акаунт створено, зайдіть</p><br><a href="start.php">Назад</a>';
        }
    }
?>
