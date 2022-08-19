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
    $a = 17.78;
    $b = 2.71;
    $p = 1;
    $t = 2;
    $f = 3;
    $x0 = 0.15;
    $xk = 2.8;
    $dx = 0.275;
    $first = log($b + $x0) + exp($x0);
    $second = $p + $x0 + ($x0 * $x0 / $t) + $x0 * $x0 * $x0 / $f;
    $third = $x0 * $x0 / sqrt($a * $a + $x0 * $x0);
    for (; $x0 < $xk; $x0 += $dx) {
        if ($x0 <= 0 && $x0 < sqrt(2)) echo "<span class='text-green-700'>" . $first . "</span><br>";
        else if ($x0 >= sqrt(2) && $x0 < sqrt(5)) echo "<span class='text-green-700'>" . $second . "</span><br>";
        else echo "<span class='text-green-700'>" . $third . "</span><br>";
    }

}
