<?php

findZero('01234'); //Found a Zero

function findZero($numberString) {
    if (strstr($numberString, '0', true)) {
        echo 'encontrado o zero';
    } else {
        echo 'Não encontrado o zero';
    }
}
?>