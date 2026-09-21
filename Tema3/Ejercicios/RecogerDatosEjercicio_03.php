<?php

$num = $_GET["numero"];

if (is_numeric($num)) {
    if (filter_var($num, FILTER_VALIDATE_INT) !== false) {
        echo "Es un número entero";
    } else {
        echo "Es un número decimal";
    }
} else {
    echo "No es un número";
}
?>