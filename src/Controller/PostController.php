<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Classes\Post;

class PostController extends AbstractController
{

    public array $myPosts;

    public function __construct()
    {
        $this->myPosts = [
            new Post(1, 1 , "Hello PHP", "On fait du Symfony"),
            new Post(2, 1 , "Hello C#", "On fait du C#"),
            new Post(3, 1 , "Hello JS", "On fait du JS"),
            new Post(4, 1 , "Hello", "On fait du CodeCombat")
        ];
    }

    /**
     * @Route("/post", name="post")
     * @Route("/post/{id}")
     */
    public function index(): Response
    {
        $array =
        [
            "Raphael",
            "Robin",
            "Antoine",
            "Nicolas",
            "Tom"
        ];

        return $this->render('post/index.html.twig',
        [
            'controller_name' => 'PostController',
            'personnes' => $array,
            'mesPosts' => $this->myPosts
        ]);
    }
}
