<?php
function checkPhoneNumber($str) {
    $regex = '/^\([0-9]{2}\)-\(0[0-9]{9}\)$/';
    if (preg_match($regex, $str)) {
        return "Phone number hợp lệ";
    }
    else {
        return "Phone number không hợp lệ";
    }
}