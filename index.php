<?php 

/** ----------------------------------------------------- */
/** ------------------ AUTOLOADS ------------------------ */
/** ----------------------------------------------------- */

	require_once('./autoload.php');
	require_once('./config/parameters.php');
	require(__DIR__.'/vendor/autoload.php');



/** ----------------------------------------------------- */
/** ------------------- ROUTES -------------------------- */
/** ----------------------------------------------------- */
	$router = new \Bramus\Router\Router();


	// Custom 404 Handler
    $router->set404(function () {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        ErrorController::index();
    });

	/** --- GET --- */

		// Login
		$router->get('/', function(){
			LoginController::index();
		});
		// Login*
		$router->get('/login', function(){
			header('location: '.base_url);
		});

		// Register
		$router->get('/registro', function(){
			SignupController::index();
		});


		// Home
		$router->get('/home', function(){
			HomeController::index();
		});


	$router->run();


