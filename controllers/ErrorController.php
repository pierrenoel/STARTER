<?php

namespace app\controllers;

class ErrorController extends Controller
{
    public function index()
    {
        http_response_code(404);
        return $this->view("errors/404");
    }
}