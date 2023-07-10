<?pHP 

namespace App\Controllers;

class CoreController 
{
    protected function show($viewName, $viewVars = [])
    {   
         
        global $_ROUTER;
        // Comme $viewVars est déclarée comme paramètre de la méthode show()
        // les vues y ont accès
        // ici une valeur dont on a besoin sur TOUTES les vues
        // donc on la définit dans show()
        $viewVars['currentPage'] = $viewName;

        // définir l'url absolue pour nos assets
        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        // définir l'url absolue pour la racine du site
        // /!\ != racine projet, ici on parle du répertoire public/
        $viewVars['baseUri'] = $_SERVER['BASE_URI'];
        extract($viewVars);
     // => la variable //TODO $currentPage existe désormais, et sa valeur est $viewName
        // => la variable $assetsBaseUri existe désormais, et sa valeur est $_SERVER['BASE_URI'] . '/assets/'
        // => la variable $baseUri existe désormais, et sa valeur est $_SERVER['BASE_URI']

        
        require_once __DIR__.'/../Views/partials/header.tpl.php';
        require_once __DIR__ . '/../Views/' . $viewName . '.tpl.php';
        require_once __DIR__.'/../Views/partials/footer.tpl.php';
    }
}