<?php

namespace App\Controllers;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\SampleRepository;
use App\Config\Database;
//require_once  (__DIR__."/../Entity/Info.php");
use App\Entity\Info;

class HomeController{
    

    protected $em;
    public function __construct(Database $em){
    $this->doctrine = $em;
    }

    public function status(Request $request){
       
        $response = new Response();

        $status = "I'm Alive!";
        $response->setContent(json_encode([
        'status' => $status

        ]));

        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        return $response;

    }

    public function frontPage(Request $request){

        $info = $this->doctrine->em()->getRepository(Info::class)->findOneBy(['id' => 1]);
        $response = new Response();

       
        $response->setContent(json_encode([
        'name' => $info->getName()

        ]));

        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        return $response;

    }
    
}