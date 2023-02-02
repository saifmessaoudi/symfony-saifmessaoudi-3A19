<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TeacherController extends AbstractController
{
    
    public function showTeacher($name)
    {
    return $this->render('teacher/index.html.twig', [
    'name' => $name
    ]);
    }

    public function goToIndex()
{
return $this->redirectToRoute('index');
}
}
