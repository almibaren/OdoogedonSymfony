<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OdoogedonController extends AbstractController
{
    /**
     * @Route("/odoogedon", name="odoogedon")
     */
    public function index()
    {
        return $this->render('odoogedon/index.html.twig', [
            'controller_name' => 'OdoogedonController',
        ]);
    }
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        $parametros=array('titulo'=> 'Curso añadir DAM2 symfony', "mensaje" =>null);
        return $this->render('odoogedon/login.html.twig',$parametros);
    }
}
