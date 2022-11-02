<?php

for ($i=0; $i < $_POST['quantity']; $i++) {

    $random = rand(0, 100);

    // Sistema de operações, verificando se funciona

    switch ($_POST['operation']) {
        case '+':
            $result = $_POST['result'] - $random;
            break;
        
        case '-':
            $result = $_POST['result'] + $random;
            break;

        case '*':
            $result = $random / $_POST['result'];
            break;

        case '/':
            $result = $_POST['result'] * $random;
            break;
        default:
            echo ("invalido");
            break;
    }

    echo ($random. $_POST['operation'] . $result ."=". $_POST['result']."<br>");
}

?>