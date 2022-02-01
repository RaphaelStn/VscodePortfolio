<?php 
namespace App\Controller;
use \Core\Controller\Controller;

Class FrontendController extends Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function home() {
        $twig = $this->loadTwig();
        echo $twig -> render('home.twig');
    }
    public function project() {
        $twig = $this->loadTwig();
        echo $twig -> render('project.twig');
    }
    public function contact() {
        $twig = $this->loadTwig();
        if(isset($_POST["submit"])) {
            $mail = "fake@gmail.com";
            $headers = 'From: '.$mail;
            $message = $_POST['message'];
            mail("raphaelstacino@gmail.com", "New message from Website", $message, $headers, "-f ".$mail);
            header('Location: index.php?p=contact');
        }
        echo $twig -> render('contact.twig');
    }

}