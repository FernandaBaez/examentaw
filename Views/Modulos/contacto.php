<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
              
  <table id="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Clave proveedor</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $vista = new MvcController();
      $vista -> vistaContactoController();
      ?>

    </tbody>
  </table>
</body>
</html>