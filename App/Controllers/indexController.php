<?php

namespace App\Controllers;

use DRIK\Controller\Action;
use DRIK\DI\Container;

class IndexController extends Action
{
    public function index()
    {
        $client = Container::getModel("Clients");
        $this->views->clients = $client->fetchAll();

        $this->render("index");
    }
    
    public function contact()
    {
        $client = Container::getModel("Clients");
        $this->views->clients = $client->find(5);

        $this->render("contact"); // False para não utilizar o layout padrão!
    }
}