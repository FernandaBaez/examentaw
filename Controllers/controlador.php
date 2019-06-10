<?php

class MvcController{
  
  public function pagina(){
    include "Views/inicio.php";
  }
  public function enlacesPaginasController(){
		if(isset( $_GET['action']))		
			$enlaces = $_GET['action'];
		else
		$enlaces = "index";
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}

   public function vistaProveedorController(){

		$respuesta = Datos::vistaProveedorModel("proveedores");

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["clave"].'</td>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["rfc"].'</td>
				<td>'.$item["direccion"].'</td>
				<td>'.$item["email"].'</td>
				
			</tr>';
		}
	}

	public function vistaContactoController(){

		$respuesta = Datos::vistaContactoModel("contacto");

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["apellidos"].'</td>
				<td>'.$item["email"].'</td>
				<td>'.$item["tel"].'</td>
				<td>'.$item["clave"].'</td>
				
			</tr>';
		}
	}
}


/**
editar y eliminar
<td><a href="index.php?action=editar_alumnos&matricula='.$item["matricula"].'"><button class="btn btn-warning">Editar</button></a>
				<a href="index.php?action=alumnos&idBorrar='.$item["matricula"].'"><button class="btn btn-danger">Borrar</button></a></td>


*/
?>


