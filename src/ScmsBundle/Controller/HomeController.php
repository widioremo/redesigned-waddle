<?php
/**
 * Created by PhpStorm.
 * User: widdzz
 * Date: 5/21/17
 * Time: 11:50 AM
 */

namespace ScmsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends  Controller
{

    /**
     * @Route("/", name="dashboard_home")
     */
    public function indexAction(){


//        return $this->render('dashboard/dashboard.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
//        ]);


        return $this->render('dashboard/dashboard.html.twig');
    }




}