<?php

namespace App\Controllers;

use DRIK\Controller\Action;

class indexController extends Action
{
    public function index()
    {
        $this->view->cars = array("Palio", "Peugeot");
        $this->render('index');

    }

    public function contact()
    {
        $this->view->cars = array("Palio", "Peugeot");
        $this->render('contact');
    }



}