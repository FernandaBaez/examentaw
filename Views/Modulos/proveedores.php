
<!---
<html>
  
<body>
  <label for="">Nombre: </label>
  <input type="text" name="nombre" id="nombre">
  <br> <br>
  <label for="">RFC: </label>
  <input type="text" name="rfc" id="rfc">
  <br> <br>
  <label for="">Direccion: </label>
  <input type="text" name="direccion" id="direccion">
  <br> <br>
  <label for="">Email: </label>
  <input type="text" name="email" id="email">
  <br> <br>
  <button> Guardar</button>
</body>
</html>--->

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
              
  <table id="table">
    <thead>
      <tr>
        <th>Clave</th>
        <th>Nombre</th>
        <th>RFC</th>
        <th>Direccion</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $vista = new MvcController();
      $vista -> vistaProveedorController();
      ?>

    </tbody>
  </table>
</body>
</html>