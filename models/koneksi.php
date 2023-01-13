<?php

$dbname = "CPI";
$user = "root";
$password = "";

$conn= mysqli_connect("localhost", $user, $password, $dbname);
try{
    $dbh = new PDO('mysql:host=localhost;dbname=' . $dbname, $user, $password);
} catch (PDOException $ex) {
    echo $ex->getMessage();
    echo "Gagal Koneksi";
}   
?>
