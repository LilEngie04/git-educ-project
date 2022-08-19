<?php
session_start();
if ( !isset($_SESSION['pass'])or !isset($_SESSION['name'])or ($_SESSION['name'])=="" or ($_SESSION['pass'])=="" ){
    header('Location: start.php');
}

else{
    echo '<header class="head">
<link rel="stylesheet" href="style.css">
    <div class="header-section">
        <div class="header-item header-logo">
            VM
        </div>
        <div class="header-item header-button"><a href="start.php">Авторизація</a></div>
        <div class="header-item header-button"><a href="math.php">Завдання</a></div>
    </div>
</header>';


}
?>
<form action="mat1.php" method="post">
    <input type="text" name="data">
    <input type="submit" name="submit_in" id="signup" value="Рахувати" >
</form>
<?php
if(isset($_POST['data'])){
    $data=$_POST['data'];
    $kl=0;
    $ar=array();
    foreach(str_split($data) as $char){
//        echo $char;
        if(!in_array($char, $ar) ){
            $co=substr_count($data, $char) - 1;
//            echo $co;
            $kl+=$co;
            array_push($ar, $char);
        }
    }
    echo '<br>'.$kl;

}
?>

