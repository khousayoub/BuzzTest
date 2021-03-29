<?php
 function getScores() {
    $servername = "localhost";
    $username = "username";
    $password = "password";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $sql  = 'select * from Score LIMIT 10';
    $result = $conn->query($sql);
    return $result;
 }
?>