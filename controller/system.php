<?php

for ($i = 0; $i < $_POST['quantity']; $i++) {

    $random = rand(0, 100);
    $mult = false;

    // Sistema de operações, verificando se funciona
    $div = false;
    switch ($_POST['operation']) {
        case '+':
            $result = $_POST['result'] - $random;
            break;

        case '-':
            $result = $_POST['result'] + $random;
            break;

        case '*':
            if ($_POST['result'] <= 200) {
                $random = rand(0, 20);
            }
            $result = ($_POST['result'] / $random);
            break;

        case '/':
            $result = $_POST['result'] * $random;
            $div = true;
            break;
        default:
            echo ("invalido");
            break;
    }

    if ($result < 0) {
        if ($div != true) {
            echo ($random . " " . $_POST['operation'] . " (" . $result . ") = " . $_POST['result'] . "<br>");
        } else {
            echo ($result . " " . $_POST['operation'] . " (" . $random . ") = " . $_POST['result'] . "<br>");
        }
    } else {
        if ($div != true) {
            echo ($random . " " . $_POST['operation'] . " " . $result . " = " . $_POST['result'] . "<br>");
        } else {
            echo ($result . " " . $_POST['operation'] . " " . $random . " = " . $_POST['result'] . "<br>");
        }
    }
}
