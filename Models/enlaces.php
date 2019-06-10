<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "proveedores" || $enlaces == "agregarProveedor" || $enlaces == "contacto" ||  
       $enlaces == "agregarContacto"){

			$module =  "Views/Modulos/".$enlaces.".php";
		
		}else if($enlaces == "index"){
			$module =  "Views/Modulos/inicio.php";
		}
		
		return $module;

	}

}

?>
