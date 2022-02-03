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
    public function About() {
        $twig = $this->loadTwig();
        echo $twig -> render('about.twig');
    }
    public function contact() {
        $twig = $this->loadTwig();
        $confirms = [];
        if(isset($_GET['sent'])) {
            if($_GET['sent'] == 'true') {
                array_push($confirms, 'Votre message est envoyé');
            }
        }
        if(isset($_POST['submit'])) {
            if(!empty($_POST['message']) && !empty($_POST['email']) && !empty($_POST['name'])) {
                $mail = "MyWebsite@gmail.com";
                $headers = 'Content-Type: text/html; charset=UTF-8';
                $message = 'Nom: ' . $_POST['name'] . '<br/>Mail: ' . $_POST['email'] . '<br/>Message: ' . $_POST['message'];
                $sendMail = mail('raphaelstacino@gmail.com', 'New message from Website', $message, $headers, '-f '.$mail);
                if($sendMail) {
                    header('Location:index.php?p=contact&sent=true');
                } else {
                    array_push($confirms, 'Une erreur est survenue, merci de réessayer plus tard');
                }
            } else {
                array_push($confirms, 'Merci de renseigner tout les champs');
            }
        }
        echo $twig -> render('contact.twig', ['confirms' => $confirms]);
    }

}