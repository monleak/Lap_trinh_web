<?php
$email = $_POST["email"];
$url = $_POST["url"];
$phone = $_POST["phone"];

$patternEmail = "/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/";
$patternUrl = "/^https?:\\/\\/(?:www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b(?:[-a-zA-Z0-9()@:%_\\+.~#?&\\/=]*)$/";
$patternPhone = "/^0[[:digit:]]{9}$/";

if(preg_match($patternEmail,$email)){
    print "valid email: $email<br>";
}else{
    print "Invalid email: $email<br>";
}
if(preg_match($patternUrl,$url)){
    print "valid url: $url<br>";
}else{
    print "Invalid url: $url<br>";
}
if(preg_match($patternPhone,$phone)){
    print "valid phone number: $phone<br>";
}else{
    print "Invalid phone number: $phone<br>";
}
?>