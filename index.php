<?php 

/** ----------------------------------------------------- */
/** ------------------ AUTOLOADS ------------------------ */
/** ----------------------------------------------------- */

	session_start();
	
	require(__DIR__.'/vendor/autoload.php');

	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();

	require_once('./config/parameters.php');
	require_once('./config/db.php');
	require_once('./helpers/utilities.php');
	require_once('./autoload.php');



/** ----------------------------------------------------- */
/** ------------------- ROUTES -------------------------- */
/** ----------------------------------------------------- */

	$router = new \Bramus\Router\Router();


	// Custom 404 Handler
    $router->set404(function () {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        ErrorController::index();
    });


	/** --- Middlewares --- */
	$router->before('GET', '/home', function() {
		if (!isset($_SESSION['identity'])) {
			header('location: '.base_url);
			exit();
		}
	});

	$router->before('GET', '/', function() {
		if (isset($_SESSION['identity'])) {
			header('location: '.base_url.'home');
			exit();
		}
	});
	$router->before('GET', '/entrar', function() {
		if (isset($_SESSION['identity'])) {
			header('location: '.base_url.'home');
			exit();
		}
	});
	$router->before('GET', '/registro', function() {
		if (isset($_SESSION['identity'])) {
			header('location: '.base_url.'home');
			exit();
		}
	});

	/** --- GET --- */

		// Login
		$router->get('/', function(){
			header('location: '.base_url.'entrar');
		});
		// Login*
		$router->get('/entrar', function(){
			UserController::loginView();
		});

		// Register
		$router->get('/registro', function(){
			UserController::signupView();
		});


		// Home
		$router->get('/home', function(){
			HomeController::index();
		});
	


	/** --- POST --- */
		$router->post('/registro/saveuser', function(){
			UserController::saveUser();
		});

		$router->post('/login/validate', function(){
			UserController::loginUser();
		});


	$router->run();


