<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SubscriptionsController extends AbstractController
{
    public function list():Response
    {        
        // return new Response();   
  
        $this->container;       // aus AbstractController

        // $response = new Response();
        // $response->setContent("<p>Subscriptions</p>");
        // return $response;
 
        $dataArray = [
            'success' => true,
            'subscriptions' => [
                
            ]
        ];
        return $this->json($dataArray);
    }
}