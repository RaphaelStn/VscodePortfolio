<?php 
namespace App\Controller;
use \Core\Controller\Controller;

Class FrontendController extends Controller {

    public function __construct(){
        parent::__construct();
        $this->twig = $this->loadTwig();
    }
    
    public function home() {
        echo $this->twig -> render('home.twig');
    }
    public function project() {
        echo $this->twig -> render('project.twig');
    }
    public function About() {
        echo $this->twig -> render('about.twig');
    }
    public function http404() {
        header('HTTP/1.0 404 Not Found');
        header('Location: index.php?=home');
    }

}