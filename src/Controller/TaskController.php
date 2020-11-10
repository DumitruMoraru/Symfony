<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\Type\TaskType;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    /**
     * @return Response
     *
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('number.html.twig', [
            'number' => random_int(0, 100)
        ]);
    }

    /**
     * @return Response
     *
     * @Route("/form")
     */
    public function form(): Response
    {
        $task = new Task();
        $task->setTitle('Shopping');
        $task->setContent('Go to the store');

        $form = $this->createForm(TaskType::class, $task);

        return $this->render('form.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @param $name
     *
     * @return Response
     *
     * @Route("/names/{name}")
     */
    public function name($name, LoggerInterface $logger): Response
    {
        $logger->info('User name: ' . $name);

        return $this->render('name.html.twig', [
            'name' => $name,
        ]);
    }
}