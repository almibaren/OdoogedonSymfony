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
        $parametros=array('titulo'=> 'Login', "mensaje" =>null);
        return $this->render('odoogedon/login.html.twig',$parametros);
    }
    /**
     * @Route("/registrar", name="registrar")
     */
    public function registrar()
    {
        $parametros=array('titulo'=> 'registrar', "mensaje" =>null);
        return $this->render('odoogedon/registrarse.html.twig',$parametros);
    }
    /**
     * @Route("/tienda", name="tienda")
     */
    public function tienda()
    {
        $parametros=array('titulo'=> 'tienda', "mensaje" =>null);
        return $this->render('odoogedon/tienda.html.twig',$parametros);
    }
}
