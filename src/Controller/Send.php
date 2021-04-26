<?php

namespace Template\Controller;

use League\Plates\Engine;
use CoffeeCode\Router\Router;
use Template\Helper\FlashMessageTrait;

class Send 
{

    use FlashMessageTrait;

    private $view;
    private $router;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . '/../../views/site/');
        $this->router = new Router(URL_BASE);
    }

    public function contact($data)
    {
        
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= "From: Trem Maria Fumaça <reservas@tremmariafumacagramado.com.br>" . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $mensagem = $this->view->render('email', [
            'data' => $data,
        ]);
        
        try {
            mail('reservas@tremmariafumacagramado.com.br', "Contato do cliente", $mensagem, $headers);
            mail("marketing@mazukim.com.br", "Contato do cliente - Trem Maria Fumaça ", $mensagem, $headers);
            $this->defineMensagem('success', "Sua mensagem foi enviada com sucesso para um dos nossos moderadores, assim que possível, estaremos entrando em contato para mais detalhes.");
            echo "<script>history.go(-1);</script>";
        } catch (\Throwable $th) {
            $this->defineMensagem('error', "{$th->getMessage()}");
            echo "<script>history.go(-1);</script>";
        }
    }
    
}
