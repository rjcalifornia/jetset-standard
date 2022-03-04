<?php

namespace App\Controllers;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController{

    public function home(Request $request){
        
       
        $response = new Response();

        $status = "I'm Alive!";
        $response->setContent(json_encode([
        'status' => $status

        ]));

        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        return $response;

    }
    
}