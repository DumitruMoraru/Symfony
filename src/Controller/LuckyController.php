<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class LuckyController extends AbstractController
{     /**
      * @Route("/my_project_name")
      */
 public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('my_project_name.html.twig', [
            'number' => $number,
        ]);
    }
}