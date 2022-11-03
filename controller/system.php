<?php

for ($i = 0; $i < $_POST['quantity']; $i++) {

    if ($_POST['numAlg'] == 2) {
        $random = rand(0, 100);
    } else if ($_POST['numAlg'] == 3) {
        $random = rand(100, 1000);
    } else if ($_POST['numAlg'] == 4) {
        $random = rand(1000, 10000);
    } else if ($_POST['numAlg'] == 5) {
        $random = rand(10000, 100000);
    } else{
        echo "Quantidade de algarismos indisponivel";
    }


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
