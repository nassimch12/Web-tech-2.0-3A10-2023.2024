<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('/authorList', name: 'author_list')]
    public function list(): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => ' Victor
            Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => '
            William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' =>
            200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => ' Taha
            Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);

        return $this->render('author/list.html.twig',['authors' => $authors]);
    }

    #[Route('/authorDetails/{id}', name: 'author_details')]
    public function authorDetails(int $id): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor_Hugo.jpg','username' => ' Victor
            Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => '
            William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' =>
            200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => ' Taha
            Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);
        
        $author = null;
        
        for ($i = 0; $i < count($authors); $i++)
        {
            if ($authors[$i]['id'] == $id)
            {
                $author = $authors[$i];
            }
        }


      return $this->render('author/showAuthor.html.twig',['author' => $author]);  
    }
}
