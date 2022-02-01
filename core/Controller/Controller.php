<?php
namespace Core\Controller;

class Controller {

    public function __construct() {
        
    }

    protected function loadTwig() {
        $loader = new \Twig\Loader\FilesystemLoader(ROOT . '/app/templates');
        $twig = new \Twig\Environment($loader, [
            'cache' => false, ROOT. '/api/templates/tmp'
        ]);
        return $twig;
    }
}
?>