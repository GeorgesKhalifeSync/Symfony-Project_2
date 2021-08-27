<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class indexController extends AbstractController
{
    /** @Route("/home", name="app_homepage")*/
    public function homepage(Environment $twigEnvirement)
    {
        //another way
        // $html = $twigEnvirement->render('questions/homepage.html.twig');
        // return new Response($html);
        return $this->render('questions/homepage.html.twig');
    }
    
    /** @Route("/questions", name="app_question_show")*/
    public function show($slug = "ey"){
        $t = [
            'eyeyey',
            'yeyeye',
            'eeeeee',
            'yyyyyy'
        ];

        dump($this);

        return $this->render('questions/show.html.twig',[
            'question' => $slug,
            'answers' => $t,
        ]);
    }

}
