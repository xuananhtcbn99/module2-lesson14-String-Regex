<?php
function checkAccount($str) {
    $regex ='/^[_a-z0-9]{6,}$/';
    if (preg_match($regex, $str)) {
        return "Account hợp lệ";
    }
    else {
        return "Account không hợp lệ";
    }
}