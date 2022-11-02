<?php

for ($i=0; $i < $_POST['select']; $i++) {

    $random = rand(0, 100);
    $number = $_POST['result'] - $random;

    echo ($random ."+". $number ."=". $_POST['result']."<br>");
}

?>