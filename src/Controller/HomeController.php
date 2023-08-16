<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index(Request $request):Response
    {
        // var_dump($request);
        // return new Response();   

        $response = new Response();

        $response->setContent( content: "<p>Hallo Welt!</p>");
        return $response;
    }
}