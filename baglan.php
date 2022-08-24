<?php 
$servername = "localhost";
$username = "root";
$password = "";

try {
    $db = new PDO("mysql:host=$servername;dbname=deneme;charset=utf8", $username, $password);
    //Veri tabanı bağlantısını kontrol ediyor
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Bağlantı Başarılı";
}catch(PDOException $e){
//echo "Bağlantı Başarısız" .$e -> getMessage();
}




?>