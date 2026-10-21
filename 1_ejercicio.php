<?php

$v1 = "fizz";
$v2 = "buzz";

for ($numero = 1; $numero <= 100; $numero++) {

    if ($numero % 3 === 0 && $numero % 5 === 0) {
        echo "<h1 style='font-size: 20px; color: green;'>$v1-$v2</h1>";
    } else if ($numero % 3 === 0) {
        echo "<h1 style='font-size: 20px; color: red;'>$v1</h1>";
    } else if ($numero % 5 === 0) {
        echo "<h1 style='font-size: 20px; color: blue;'>$v2</h1>";
    } else {
        echo "<h1 style='font-size: 20px;'>$numero</h1>";
    }
}
