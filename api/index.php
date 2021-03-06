<?php
use App\Controller\FrontendController;

define('ROOT', dirname(__DIR__)); // On définit une variable ROOT pour naviguer dans les dossiers plus facilement.
require  ROOT . '/app/App.php';
App::load(); // Load() Initialise la session et les AutoLoaders des namespaces CORE et APP.

if(isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
$p = 'home';
}

switch ($p) {
    case 'home' : 
        $controller = new FrontendController();
        $controller->home();
        break;
    case 'project' : 
        $controller = new FrontendController();
        $controller->project();
        break;
    case 'about' : 
        $controller = new FrontendController();
        $controller->about();
        break;
    default : 
        $controller = new FrontendController();
        $controller->http404();
        break;
}