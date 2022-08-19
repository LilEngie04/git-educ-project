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
<form action="mat2.php" method="post">
    <input type="text" name="N">
    <input type="submit" name="submit_in" id="signup" value="Рахувати" >
</form>
<?php
    if(isset($_POST['N'])){
        $N=$_POST['N'];
        $a=1;
        $b=4;
        $h=($b-$a)/$N;

        $miny=1;
        $maxy=1;

        for($x=$a;$x<$b;$x+=$h){
            $y=pow((2-$x),4)/$x*$x;
            if($y>$maxy)
            {
                $maxy=$y;
            }
            if($y<$miny)
            {
                $miny=$y;
            }
            echo "<p>x={$x} y={$y}</p>";
        }

        echo"<br>ymin = {$miny} ymax = {$maxy} S= ".$miny*$maxy;

    }
?>

