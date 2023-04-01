<?php

    $host = 'localhost' ;
    $dbname = 'dbpos' ;
    $username = 'root' ;
    $password = '' ;

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDDException $e) {
        echo "koneksi gagal : " . $e->getMessage();
    }

?>