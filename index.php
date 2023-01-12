<?php 
  require_once 'connection.php';
  require_once 'listDepartamentos.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>doble-select</title>
</head>
<body>
  <main>
    <div>
      <label for="departamento" >Selecciona tu departamento:</label>
      <select name="departamento" id="departamento" onclick="getIdDepartamento()">
        <option value="0">Selecciona una opción...</option>
        <?php foreach($departamentos as $departamento) :?>
          <option value="<?= $departamento['id_departamento']?>" ><?= $departamento['departamento'] ?></option>
        <?php endforeach;?>
      </select>
    </div>
    <div>
      <label for="municipio">Selecciona tu municipio:</label>
      <select name="municipio" id="municipio">
      </select>
    </div>
  </main>
</body>
<script src="index.js"></script>
</html>