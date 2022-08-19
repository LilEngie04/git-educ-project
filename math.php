<?php
session_start();
if ( !isset($_SESSION['pass'])or !isset($_SESSION['name'])or ($_SESSION['name'])=="" or ($_SESSION['pass'])=="" ){
    header('Location: start.php');
}
else{
    echo '
<a href="mat1.php">Завадання 1</a><br>
<a href="mat2.php">Завадання 2</a><br>
<a href="mat3.php">Завадання 3</a><br>
';
}
