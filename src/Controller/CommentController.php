<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /** @Route("/comments/{id}/vote/{direction<up|down>}" ) */
    public function commentVote($id, $direction, LoggerInterface $logger){
        // todo use id to query databse

        // use real logic here to save this to the databse
        if ($direction === 'up'){
            $logger->info('Voting Up!');
            $currentVoteCount = rand(7,100); 
        } else {
            $logger->info('Voting Up!');
            $currentVoteCount = rand(0,5); 
        }

        return $this->json(['votes' => $currentVoteCount]);
        // return new JsonResponse(['votes' => 'test']);
    }
}
