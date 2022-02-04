<?php
namespace Core\Controller;

class Controller {

    public function __construct() {
        
    }

    protected function loadTwig() {
        if(!isset($_SESSION['lang'])) {
            $_SESSION['lang']='fr';
        }
        if(isset($_POST['switch'])) {
            if($_SESSION['lang'] == 'fr') {
                $_SESSION['lang'] = 'en';
                header("Refresh:0");
            } else {
                $_SESSION['lang'] = 'fr';
                header("Refresh:0"); 
            }
        }

        $lang = $_SESSION['lang'];
        $loader = new \Twig\Loader\FilesystemLoader(ROOT . '/app/templates/'. $lang . '/');
        $twig = new \Twig\Environment($loader, [
            'cache' => false, ROOT. '/api/templates/tmp'
        ]);
        $twig->addGlobal('session', $_SESSION);
        return $twig;
    }
}
?>