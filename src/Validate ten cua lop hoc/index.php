<?php
//Bắt đầu bằng một ký tự chữ hoa C hoặc A hoặc P
//Không chứa các ký tự đặc biệt
//Theo sau ký tự bắt đầu là 4 ký tự số
//Kết thúc phải là 1 trong những ký tự chữ hoa sau: G, H, I, K, L, M

function checkClassName($str) {
    $regex = '/^[A|C|P][0-9]{4}[G|H|I|K|L|M]$/';
    if (preg_match($regex, $str)) {
        return "Name hợp lệ";
    }
    else {
        return "Name không hợp lệ";
    }
}