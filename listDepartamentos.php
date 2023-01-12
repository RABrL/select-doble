<?php 
require_once 'connection.php';

$obj = new Connection();
$conn = $obj->connect();

$stmt = $conn->prepare('SELECT * FROM departamentos');
$stmt->execute();
$departamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>