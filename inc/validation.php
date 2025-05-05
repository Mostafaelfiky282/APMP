<?php
$error = "";
$done = '';

function requiredInput($input){
    $str = trim($input);
    if(strlen($str) > 0){
        return true;
    }
    return false;
}

function santString($input){
    $str = trim($input);
    $str = filter_var($str , FILTER_SANITIZE_STRING);
    return $str;
}
function santEmail($email){
    $email = trim($email);
    $email = filter_var($email , FILTER_SANITIZE_EMAIL);
    return $email;
}

function minInput($input , $min){
    if(strlen($input) < $min){
        return false;
    }
    return true;
}
function maxInput($input , $max){
    if(strlen($input) > $max){
        return false;
    }
    return true;
}

function validateEmail($email){
    if(filter_var($email , FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}