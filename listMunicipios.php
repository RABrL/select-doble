<?php 
  require_once 'connection.php';
  $obj = new Connection();
  $conn = $obj->connect();

  $id_departamento = $_GET["id"];

  $stmt = $conn->prepare('SELECT m.id_municipio as id, m.municipio as nombre FROM municipios m INNER JOIN departamentos d ON m.departamento_id=d.id_departamento AND d.id_departamento=:id_departamento');
  $stmt->bindParam(':id_departamento',$id_departamento);
  $stmt->execute();
  $municipios = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($municipios,JSON_UNESCAPED_UNICODE);
?>