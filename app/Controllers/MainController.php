<?pHP 

namespace App\Controllers;

use App\Models\Pokemon;

class MainController extends CoreController
{
    
public function home() 
    {   $pokemonModel = new Pokemon();
        $randomPokemon = $pokemonModel->random();

        // Appel de la méthode show héritée de CoreController
        $this->show('home', [
            'randomPokemon' => $randomPokemon
            ]
    );
    }

   
    public function pokemon($params)
    {
        $pokemonObject = new Pokemon();
        $pokemon = $pokemonObject->find($params);
       
        $this->show('pokemon', [
            'title' => 'Accueil',
            'pokemon' => $pokemon    
        ]);
    }

public function list(){
    $pokemonModels = new Pokemon();
    $pokemons = $pokemonModels->findAll();
    $this->show('list', [
        'pokemons' => $pokemons
    ]);

}












    //  // Affichage des types
    //  public function types()
    //  {
    //      $typeObject = new Type();
    //      $types =  $typeObject->findAll();
    //      $this->show('types', [
    //          'title' => 'Liste des types',
    //          'types' => $types
    //      ]);
    //  }
 
    //  // Affichage de la liste filtrée par type
    //  public function type($params)
    //  {
    //      $pokemonObject = new Pokemon();
    //      $pokemons = $pokemonObject->findByType($params['type']);
    //      $this->show('list', [
    //          'title' => 'Filtré par type',
    //          'pokemons' => $pokemons
    //      ]);
    //  }
 
 
    //  public function notFound()
    //  {
    //      header('HTTP/1.1 404 Not Found');
    //      $this->show('error404', [
    //          'title' => 'Page inexistante - 404'
    //      ]);
    //  }
}