<?php

$numbers = array(1, 2, 3);
$doubleNumbers = array();

foreach ($numbers as $number) {
    $doubleNumbers[] = $number * 2;
}

print_r($doubleNumbers);
