<?php

namespace App\Controller;

use App\Entity\AlmibarenWormsUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class OdoogedonWebServiceController extends AbstractController
{
    /**
     * @Route("/ws/login", name="wslogin", methods={"POST"})
     */
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $usuario = new AlmibarenWormsUser();
            $usuario->setName($_POST['user']);
            $usuario->setPassword($_POST['passwd']);
        }
        return $this->jsonAlmibaren($this->getDoctrine()->getRepository(AlmibarenWormsUser::class)->findUsuarioByCredentials($usuario->getName(),$usuario->getPassword()));

    }
    /**
     * @Route("/ws/libros/anadir", name="wsanadir", methods={"POST"})
     */
    public function anadir()
    {
        // RECIBIR JSON
        $datos = file_get_contents('php://input');
        $request = json_decode($datos);

        // CREAR UN NUEVO ALMILIBRO
        $libro = new AlmiLibro();
        $libro->setName($request->titulo);
        $libro->setShortName($request->alias);
        $libro->setPages($request->paginas);
        $libro->setDescription($request->des);
        $date = \DateTime::createFromFormat('Y-m-d', $request->fecha);
        $libro->setDateRelease($date);

        // AÑADIR EL ALMILIBRO A ODOO
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($libro);
        $entityManager->flush();
        $parametros['mensaje'] = 'LIBRO INSERTADO';

        return $this->enviar($parametros);
    }
    public function jsonAlmibaren($data){
        $normalizers = array(new GetSetMethodNormalizer());
        $encoders = array("json" => new JsonEncoder());
        $serializer = new Serializer($normalizers, $encoders);
        $json = $serializer->serialize($data, 'json');

        $response = new Response();
        $response->setContent($json);
        $response->headers->set("Content-Type", "application/json");

        return $response;
    }
}
