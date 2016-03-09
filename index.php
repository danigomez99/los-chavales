
<?php 

// ------------------------------------------------------------------------------------------------
// SLIM

// [http://goo.gl/7KR4vx] Documentación oficial 
// [http://goo.gl/E2hriJ] Uso avanzado de Slim 
// [http://goo.gl/KMglou] Añadir Middleware a determinada ruta (o cómo comprobar está logado)
// [http://goo.gl/n2Q2Zk] Métodos (get, post, delete, ...) válidos en el enrutamiento
// [http://goo.gl/DYkgGd] Cómo mostrar flash() y error() en la Vista
// [http://goo.gl/UzoaCi] Slim MVC framework

// VISTA

// [http://goo.gl/hU1AVD] BootStrap
// [http://goo.gl/ikw3Cv] Herencia en las Vistas con Twing

// VARIOS

// [http://goo.gl/wxnSy]  PDO
// [http://goo.gl/pAsYSf] swiftmailer/swiftmailer con composer y "composer update"
// [http://goo.gl/Ld7VXw] Servidor NGINX

// GESTION DE USUARIOS

// [http://goo.gl/8GIxET] Gestión de sesión de usuario con Slim
// [http://goo.gl/sSJYcd] Control clásico de sesión de usuario en PHP
// [http://goo.gl/meF6p8] Autenticación y XSS con SlimExtra
// [http://goo.gl/PylJvT] Basic HTTP Authentication
// [http://goo.gl/ZZSBk8] PROBLEMA con usuario/clave sin SSL
// [http://goo.gl/9Wa71B] Librería uLogin para autenticación PHP

// [http://goo.gl/sShWmQ] Proteger API con oAuth2.0 (incluye ejemplo)
// [http://goo.gl/uhVAf]  Estudio sobre cómo proteger API sin oAuth
// [http://goo.gl/53iEcN] oAuth con Slim
// [http://goo.gl/PXt2YG] Otra implementación de oAuth
// ------------------------------------------------------------------------------------------------

// DUDA funcionará flash() y error() tras poner session_start() antes de header()

session_cache_limiter(false);	
session_start();
header('Content-type: text/html; charset=utf-8');

/*require_once 'controller/Dictado.php';
require_once 'controller/Email.php';
require_once 'controller/Login.php';
*/
//require_once 'controller/Utils.php';

require 	 'vendor/autoload.php';

Twig_Autoloader::register();  

$app = new \Slim\Slim(
		array(
			//'debug' => true,
			'templates.path' => './view'
		)
	);
	
$loader = new Twig_Loader_Filesystem('./view');  
$twig = new Twig_Environment($loader, array(  
//'cache' => 'cache',  
));  
 
$app->container->singleton('db', function () {
    return new \PDO('sqlite:model/dictados.db');
});

$app->get('/',function() use ($app){
    global $twig;
    
    // Esto es lo nuevo 
    
    $pdo=$app->db;

    $r = $pdo->query("select * from apuestas")->fetchAll(PDO::FETCH_ASSOC);		
	$valores=array('datos'=>$r);
	
	// Aquí acaba lo nuevo
	
    echo $twig->render('inicio.php',$valores);  
    
}); 

$app->get('/borrar', function() use ($app){
	
    global $twig;
    
    $valores=array(
		"id"=>$app->request()->get('id')
	);
	
	$sql = "delete from apuestas WHERE ID=:id";
	$pdo = $app->db;
	$q   = $pdo->prepare($sql);
	$q->execute($valores);
	
    $app->redirect('/');
}); 

$app->get('/contacto', function() use ($app){
    global $twig;
    echo $twig->render('apuestas.php');  
}); 

$app->post('/guardaContacto', function() use ($app){
	global $twig;
	$valores=array(
		'nombre'=>$app->request()->post('nombre'),
		'email'=>$app->request()->post('email'),
        'fecha_de_nacimiento'=>$app->request()->post('fecha_de_nacimiento'),
        'tarjeta_de_credito'=>$app->request()->post('tarjeta_de_credito'),
        'partido_1'=>$app->request()->post('partido_1'),
        'partido_2'=>$app->request()->post('partido_2'), 
        'partido_3'=>$app->request()->post('partido_3'));
	
	
	
	// Guardamos en la BD
	
    $sql = "INSERT INTO apuestas (nombre, email, fecha_de_nacimiento, tarjeta_de_credito, partido_1, partido_2, partido_3) VALUES (:nombre, :email, :fecha_de_nacimiento, :tarjeta_de_credito, :partido_1, :partido_2, :partido_3)";
    $pdo=$app->db;
	$q = $pdo->prepare($sql);
	$q->execute($valores);
	
    echo $twig->render('agradecer.php', $valores);  
});

// Ponemos en marcha el router
$app->run();

?>

