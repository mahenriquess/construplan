<?php

namespace Template\Controller;

use League\Plates\Engine;

class Web 
{

    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . '/../../views/site/');
    }

    public function index()
    {
        echo $this->view->render('index', []);
    }

    public function quemSomos()
    {
        echo $this->view->render('quem-somos', []);
    }
}
