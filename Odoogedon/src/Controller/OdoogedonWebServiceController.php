<?php

namespace App\Controller;

use App\Entity\AlmibarenWormsUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\AlmibarenWormsHatsAlmibarenWormsImagesRel;
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
     * @Route("/ws/inventario", name="wsinventario", methods={"POST"})
     */
    public function inventario()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $idUsuario=$_POST['idUsuario'];
            $datos = $this->getDoctrine()->getRepository(AlmibarenWormsUser::class)->findGorrosByUsuario($idUsuario);
            $lista = array();
            $imagen="";
            $cont=0;
            foreach ($datos as $gorro){
                foreach ($this->getDoctrine()->getRepository(AlmibarenWormsHatsAlmibarenWormsImagesRel::class)->findAllByIdGorro($gorro->getId()) as $imagen2){
                    $imagen=$imagen2["path"];
                    $imagen="images/".$imagen;
                }
                $cont++;

                $lista[]=array(
                    'id' => $gorro->getId(),
                    'alias' => $gorro->getShortName(),
                    'nombre' => $gorro->getName(),
                    'descripcion' => $gorro->getDescription(),
                    'precio' => $gorro->getPrize(),
                    'imagen' => $imagen,
                    'valoracion' => $gorro->getRating(),
                    'contador'=>$cont
                );
            }
            return $this->jsonAlmibaren($lista);
        }
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
