<?php

namespace app\controllers;

class Controller 
{
    public function view(string $view)
    {
        require 'views/'.$view.'.php';
    }
}