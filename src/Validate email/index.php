<?php
function checkEmail($str)
{
    $regex = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regex, $str)) {
        return "La Email hop le!";
    } else {
        return "Khong phai la Email hop le!!";
    }

}