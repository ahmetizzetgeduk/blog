<?php
session_start();
ob_start();
try{
    $host = "localhost";
    $dbname = "blog";  // veritabanı adı
    $username = "root"; // veritabanı kullanıcıadı
    $password = ""; // veritabanı kullanıcı şifresi
    $db = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8","$username","$password");

    $sql= $db->prepare("select * from ayarlar where 1");
    $sql->execute();
    $ayarlar=$sql->fetch(PDO::FETCH_ASSOC);

}
catch(PDOException $message){
    echo $message->getMessage();
}
?>