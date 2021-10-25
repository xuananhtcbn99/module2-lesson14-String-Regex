<?php

function isFirstLetterUpperCase($str) {
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo "String's first character is uppercase";
    } else {
        echo "String's first character is not uppercase";
    }
}

isFirstLetterUpperCase('Codegym');
echo "<br/>";
isFirstLetterUpperCase('cdegym');
echo "<br/>";
isFirstLetterUpperCase('nguyen thi xuan Anh');
echo "<br/>";
isFirstLetterUpperCase('NGUYEN THI XUAN ANH');