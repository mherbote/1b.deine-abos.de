<?php

namespace App\Controller;

use App\Model\Subscription;
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
            'subscriptions' => $this->generateSubscriptions()
        ];
        return $this->json($dataArray);
    }

    protected function generateSubscriptions(): array
    {
        $returnArray[] = (new Subscription)
            ->setName("Netflix")
            ->setStartDate(new \DateTime)
            ->toArray();

            $returnArray[] = (new Subscription)
            ->setName("Amazon Prime")
            ->setStartDate(new \DateTime)
            ->toArray();

        return $returnArray;
    }
}