<?php

namespace App\Controller;

use App\Entity\AlmibarenWormsHats;
use App\Entity\AlmibarenWormsHatsAlmibarenWormsImagesRel;
use App\Entity\AlmibarenWormsHatsAlmibarenWormsUserRel;
use App\Entity\AlmibarenWormsImages;
use App\Entity\AlmibarenWormsUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Routing\Annotation\Route;

class OdoogedonController extends AbstractController
{
    /**
     * @Route("/", name="odoogedon")
     */
    public function index()
    {
        return $this->render('odoogedon/tienda.html.twig', [
            'controller_name' => 'OdoogedonController',
        ]);
    }
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['name']!=null && $_POST['passwd']!=null && $_POST['name']!="" && $_POST['passwd']!=""){
                $idUsuario=$this->getDoctrine()->getRepository(AlmibarenWormsUser::class)->findUsuarioByCredentials($_POST['name'],$_POST['passwd']);
                if($idUsuario>0){
                    session_start();
                    $_SESSION['idUsuario']=$idUsuario;
                    return $this->redirectToRoute('tienda');
                }
            }
        }
        $parametros=array('titulo'=> 'Login', "mensaje" =>null);
        return $this->render('odoogedon/login.html.twig',$parametros);
    }
    /**
     * @Route("/registrar", name="registrar")
     */
    public function registrar()
    {
        $error ="";
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['user']!=null && $_POST['name']!=null && $_POST['ap1']!=null && $_POST['ap2']!=null && $_POST['passwd']!=null && $_POST['passwd2']!=null && $_POST['user']!="" && $_POST['name']!="" && $_POST['ap1']!="" && $_POST['ap2']!="" && $_POST['passwd']!="" && $_POST['passwd2']!=""){
                $idUsuario=$this->getDoctrine()->getRepository(AlmibarenWormsUser::class)->findBy(array('name'=>$_POST['user']));
                if($idUsuario>0){
                    $error="Ya existe ese usuario";
                }if($_POST['passwd']!=$_POST['passwd2']){
                    $error="Las contraseñas deben coincidir";
                }
            }else{
                $error="Debe rellenar todos los campos";
            }
        }
        $parametros=array('titulo'=> 'registrar', "mensaje" =>null);
        $parametros['error']=$error;
        return $this->render('odoogedon/registrarse.html.twig',$parametros);
    }
    /**
     * @Route("/tienda", name="tienda")
     */
    public function tienda()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['user']) && isset($_POST['passwd'])){
                $idUsuario=$this->getDoctrine()->getRepository(AlmibarenWormsUser::class)->findUsuarioByCredentials($_POST['user'],$_POST['passwd']);
                if($idUsuario>0){
                    session_start();
                    $_SESSION['idUsuario']=$idUsuario;
                    return $this->redirectToRoute('tienda');
                }
            }

        }
        if(session_status()==PHP_SESSION_NONE){
            return $this->redirectToRoute('login');
        }

        $datos = $this->getDoctrine()->getRepository(AlmibarenWormsHats::class)->findAll();
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
        $parametros['titulo']="Inventario";
        $parametros['gorros']=$lista;
        return $this->render('odoogedon/tienda.html.twig',$parametros);
    }
    /**
     * @Route("/producto/{id}", name="producto")
     */
    public function producto($id){
        $imagen="";
        $lista=array();
        $datos=$this->getDoctrine()->getRepository(AlmibarenWormsHats::class)->findBy(array('id' => $id),array('id'=>'ASC'),'1');
        foreach ($datos as $gorro){
            foreach ($this->getDoctrine()->getRepository(AlmibarenWormsHatsAlmibarenWormsImagesRel::class)->findAllByIdGorro($gorro->getId()) as $imagen2){
                $imagen=$imagen2["path"];
                $imagen="images/".$imagen;
            }
            $des =preg_split("<p>",$gorro->getDescription());



            $lista[]=array(
                'id' => $gorro->getId(),
                'alias' => $gorro->getShortName(),
                'nombre' => $gorro->getName(),
                'descripcion' => substr(preg_split("<br>",$des[1])[0],1,-1),
                'precio' => $gorro->getPrize(),
                'imagen' => $imagen,
                'valoracion' => $gorro->getRating()
            );
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $entityManager=$this->getDoctrine()->getManager();
            $gorro=$entityManager->getRepository(AlmibarenWormsHats::class)->find($id);
            $gorro->setRating($_POST['estrellas']);
            $entityManager->flush();
            return $this->redirectToRoute('tienda');
        }
        $parametros['gorro']=$lista;
        return $this->render('odoogedon/producto.twig',$parametros);
    }
    /**
     * @Route("/comprado/{id}", name="comprado")
     */
    public function comprado($id){
        $gorroUsuario = new AlmibarenWormsHatsAlmibarenWormsUserRel();
        $gorroUsuario->setAlmibarenWormsHats($this->getDoctrine()->getRepository(AlmibarenWormsHats::class)->findOneBy(array('id' => $id)));
        $gorroUsuario->setAlmibarenWormsUser($this->getDoctrine()->getRepository(AlmibarenWormsUser::class)->findOneBy(array('username'=>'mikel')));


        $entityManager = $this->getDoctrine()->getManager();
        try{
            $entityManager->persist($gorroUsuario);
            $entityManager->flush();
        }catch (Exception $a){

        }


        return $this->redirectToRoute('tienda');
    }
    /**
     * @Route("/inventario", name="inventario")
     */
    public function inventario()
        {

            if(session_status()==PHP_SESSION_NONE){
                return $this->redirectToRoute('login');
            }
            $idUsuario=$_SESSION['idUsuario'];
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
            $parametros['titulo']="Inventario";
            $parametros['gorros']=$lista;
            return $this->render('odoogedon/tienda.html.twig',$parametros);
        }
    /**
     * @Route("/cerrarSesion", name="cerrarSesion")
     */
    public function cerrarSesion(){
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        if (session_status()==PHP_SESSION_ACTIVE) {
            session_destroy();
            session_abort();
        }


        return $this->redirectToRoute('login');
    }
}
