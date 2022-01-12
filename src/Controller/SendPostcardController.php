<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mime\Email;

class SendPostcardController extends AbstractController
{
    #[Route('/sendPostcard', name: 'send_postcard', methods: ['GET'])]
    public function index(){
        return $this->render('send_postcard/index.html.twig');
    }

    private function validateAllInputPost($fields,$request){
        foreach ($fields as $field){
            if(!$request->has($field)){
                return false;
            }
            else{
                $fieldsR[$field]=$request->get($field);
            }
        }
        return $fieldsR;
    }

    private function exactGreeting($event){
        switch($event){
            case "A":
                return "Buon Anno Nuovo!";
                break;
            case "B":
                return "Auguri di felice battesimo!";
                break;
            case "C":
                return "Buon Compleanno!";
                break;
            default:
                return "Buon niente ?";
        }
    }

    private function generateEventKeyword($event){
        switch($event){
            case "A":
                return "NewYear";
                break;
            case "B":
                return "Baptism";
                break;
            case "C":
                return "Birthday";
                break;
            default:
                return "Nothing";
        }
    }

    private function generateBody($fields){
        return '<h2>'.$this->exactGreeting($fields['event']).' '.$fields['name'].'</h2>
                <p>'.$fields['message'].'</p>
                <img src="https://loremflickr.com/1000/1000/'.$this->generateEventKeyword($fields['event']).'" alt="image">';
    }

    private function generateMailContent($body){
        return '<html>
                    <head>
                    </head>
                    <body>'.$body.'
                    </body>
                </html>';
    }

    private function sendEmail($fields){
        $email = new Email();
        $email->from("webmaster@example.com");
        $email->to($fields['email']);
        $email->subject($this->exactGreeting($fields['event']));
        $email->html($this->generateMailContent($this->generateBody($fields)));
        $transport = new EsmtpTransport('localhost');
        $mailer = new Mailer($transport);
        $mailer->send($email);
    }

    #[Route('/sendPostcard', name: 'submit_postcard', methods: ['POST'])]
    public function submitData(Request $request) {
        $fields = ["name","email","message","event"];
        if(!($fields=$this->validateAllInputPost($fields,$request->request))){
            throw new \Exception('Errore nella validazione dei dati!');
        }
        $response = new Response();
        $response->setContent($this->generateBody($fields));
        $this->sendEmail($fields);
        return $response;
    }
}
