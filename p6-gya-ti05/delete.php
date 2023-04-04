<?php 
require_once("dbkoneksi.php");

$sql = "DELETE FROM pelanggan WHERE id=?;";
$st = $conn->prepare($sql);
$st->execute([$_GET['id']]);

header('location:list.php');


?>