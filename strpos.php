<?php

$text = "O perigo de verdade não é que computadores passem a pensar como humanos, mas que sim humanos passem a pensar como computadores";

$length = strpos($text,"computadores passem");

$result = substr($text, 0, $length);

echo $result;

?>