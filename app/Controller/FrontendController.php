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
    public function contact() {
        $confirms = [];
        if(isset($_GET['sent'])) {
            if($_GET['sent'] == 'true') {
                if($_SESSION['lang'] == 'fr') {
                    array_push($confirms, 'Votre message à été envoyé.');
                } else {
                    array_push($confirms, 'Your message has been sent.');
                }
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
                    if($_SESSION['lang'] == 'fr') {
                        array_push($confirms, 'Une erreur est survenue, merci de réessayer plus tard');
                    } else {
                        array_push($confirms, 'Please try again');
                    }
                }
            } else {
                if($_SESSION['lang'] == 'fr') {
                    array_push($confirms, 'Merci de renseigner tout les champs');
                } else {
                    array_push($confirms, 'Please fill empty inputs');
                }
            }
        }
        echo $this->twig -> render('contact.twig', ['confirms' => $confirms]);
    }

}