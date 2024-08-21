<?php
$dsn = "mysql:host=localhost;dbname=eripay";
$dbusername="root";
$dbpassword="";

try {
    //code...
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //throw $th;
echo "CONNECTION FAILED" . $e->getMessage();
}