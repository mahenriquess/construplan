<?php

require __DIR__ . '/config.php';

use Template\Controller\Web;
use CoffeeCode\Router\Router;
use Template\Controller\Send;

$router = new Router(URL_BASE);

// Controladores de Requisição
$web = new Web();
$send = new Send();

$router->namespace('src/Controller');

// Rotas principais do site
$router->group(null);
$router->get('/', function () use ($web){$web->index();});
$router->get('/quem-somos', function () use ($web){$web->quemSomos();});
$router->get('/servicos', function () use ($web){$web->servicos();});
$router->get('/projetos', function () use ($web){$web->projetos();});
$router->get('/clientes', function () use ($web){$web->clientes();});
$router->get('/contato', function () use ($web){$web->contato();});

// Rotas de Envio
$router->group('/send');
$router->post('/contact', function ($data) use ($send){$send->contact($data);});

// Rotas para Tratamento de Erros
$router->group('/error');
$router->get('/{errcode}', function ($data){
    echo "Erro: {$data['errcode']}";
});

$router->dispatch();

// Redirect de todos os erros de rotas
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}