<?PHP
// var_dump($_SERVER['BASE_URI']); die;


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Core/Router.php';


// Début du dispatcher: mise en place du matching
// Ici je demande à AltoRouter si il y a une correspondance entre mon url
// et toutes les routes que je lui ai déclarée via ->map




// si la route n'existe pas
if ($match === false) {
    dd('404');
}

// on récupère le nom du controller dans match
$controllerName = $match['target']['controller'];

// on récupère le nom de la méthode dans match
$methodName = $match['target']['method'];

// on instancie le controller à 
$controller = new $controllerName();

// appeler la méthode
$controller->$methodName();
