<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/movies", name="app_movies")
     */
    public function index(): Response
    {   
        /*  findAll() - SELECT * FROM movies;
            $repo = $this->em->getRepository(Movie::class);
            $movies = $repo->findAll();*/

        /*  find() - SELECT * FROM movies WHERE id=1;
            $repo = $this->em->getRepository(Movie::class);
            $movies = $repo->find(1);*/
                    
        /*  findBy() - SELECT * FROM movies ORDER BY id DESC;
            $repo = $this->em->getRepository(Movie::class);
            $movies = $repo->findBy([],['id' => 'DESC']);*/

        /*  findBy() - SELECT * FROM movies WHERE id = 6 AND title = 'The Dark Knight' 
                        ORDER BY id DESC;
            $repo = $this->em->getRepository(Movie::class);
            $movies = $repo->findBy(['id' => '6', 'title' => 'The Dark Knight'], 
                                    ['id' => 'DESC']);*/


        $repo = $this->em->getRepository(Movie::class);
        $movies = $repo->findBy(['id' => 35, 'title' => 'Lahoriye'],['id' => 'DESC']);
        //dd($movies);
        return $this->render('index.html.twig', ['movies' => $movies]);
    }

}
