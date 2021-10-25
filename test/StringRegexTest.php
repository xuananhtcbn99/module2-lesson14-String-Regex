<?php
use PHPUnit\Framework\TestCase;
include_once "../src/Validate email/index.php";
include_once "../src/Validate account/index.php";
include_once "../src/Validate ten cua lop hoc/index.php";
include_once "../src/Validate so dien thoai/index.php";

class StringRegexTest extends TestCase
{
    function test_check_email_true_1()
    {
        $str= "a@gmail.com";
        $result = checkEmail($str);
        $expected = "La Email hop le!";
        $this->assertEquals($expected, $result);
    }
    function test_check_email_true_2()
    {
        $str= "abc@hotgmail.com";
        $result = checkEmail($str);
        $expected = "La Email hop le!";
        $this->assertEquals($expected, $result);
    }
    function test_check_email_false()
    {
        $str= "@#abc@gmail.com";
        $result = checkEmail($str);
        $expected = "Khong phai la Email hop le!!";
        $this->assertEquals($expected, $result);
    }
    function test_check_account_true_1()
    {
        $str= "123abc_";
        $result = checkAccount($str);
        $expected = "Account hợp lệ";
        $this->assertEquals($expected, $result);
    }
    function test_check_account_true_2()
    {
        $str= "______";
        $result = checkAccount($str);
        $expected = "Account hợp lệ";
        $this->assertEquals($expected, $result);
    }
    function test_check_account_false_1()
    {
        $str= "abcde";
        $result = checkAccount($str);
        $expected = "Account không hợp lệ";
        $this->assertEquals($expected, $result);
    }
    function test_check_account_false_2()
    {
        $str= "1234_";
        $result = checkAccount($str);
        $expected = "Account không hợp lệ";
        $this->assertEquals($expected, $result);
    }
    function test_check_class_name_true_1()
    {
        $str= "C0318G";
        $result = checkClassName($str);
        $expected = "Name hợp lệ";
        $this->assertEquals($expected, $result);
    }
    function test_check_class_name_false_1()
    {
        $str= "M0318G";
        $result = checkClassName($str);
        $expected = "Name không hợp lệ";
        $this->assertEquals($expected, $result);
    }
    function test_check_class_name_false_2()
    {
        $str= "P0323A";
        $result = checkClassName($str);
        $expected = "Name không hợp lệ";
        $this->assertEquals($expected, $result);
    }
    function test_check_phone_number_true_1()
    {
        $str= "(84)-(0978489648)";
        $result = checkPhoneNumber($str);
        $expected = "Phone number hợp lệ";
        $this->assertEquals($expected, $result);
    }
    function test_check_phone_number_false_1()
    {
        $str= "(a8)-(22222222)";
        $result = checkPhoneNumber($str);
        $expected = "Phone number không hợp lệ";
        $this->assertEquals($expected, $result);
    }

}