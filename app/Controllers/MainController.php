<?pHP 

namespace App\Controllers;

class MainController extends CoreController
{
    
public function home() 
    {
        // Appel de la méthode show héritée de CoreController
        $this->show('home');
    }
    public function pokemon() 
    {
        // Appel de la méthode show héritée de CoreController
        $this->show('pokemon');
    }
    
}