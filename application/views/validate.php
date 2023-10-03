<?php

if(isset($_POST['g-recaptcha-response'])){
    $secreatkey = "6LdNZj0oAAAAAETa5QQXS7k5sEMxJZ0IeLyzz0cb";
    echo $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secreatkey&response=$response&remoteip=$ip";
    $fire = file_get_contents($url);
    echo $fire;
}else
{
    echo "Recaptcha Error";
}
?>