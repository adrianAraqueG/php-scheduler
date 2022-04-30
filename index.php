<?php 

/** Autoload */
// require_once('./autoload.php');
require_once('./config/parameters.php');
require_once('./controllers/LoginController.php');
require_once('./controllers/ErrorController.php');
require_once('./controllers/HomeController.php');





// 	Función para mostrar errores
function show_error(){
	$error = new ErrorController;
	return $error->index();
}




//Comprobar si llegan los parámetros correctos por GET y definir el controlador
if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
}else{
	show_error();
}



//Comprobar si el controlador existe, crear un nuevo objeto controlador 
//y ejecutar la acción que llega por GET
if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();

	}elseif(!isset($_GET['controller']) & !isset($_GET['action'])){
		$action = action_default;
		$controlador->$action();
	}else{
		show_error();
	}
}else{
	show_error();
}