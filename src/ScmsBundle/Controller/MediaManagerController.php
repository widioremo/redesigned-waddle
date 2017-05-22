<?php
/**
 * Created by PhpStorm.
 * User: widdzz
 * Date: 5/22/17
 * Time: 2:50 PM
 */


//Media Manager handles all media creation, editing, viewing and Deleting
//Encapsulates operations on the SmImages Entity class


namespace Scms\Controller;

use ScmsBundle\Entity\SmImages;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProjectcategoriesController extends Controller
{

    //create media is synonymous to uploading
    //that is this function will handle uploading of images and files

    /**
     * @Route('/media/upload_file', name='upload_file')
     */
    public function createAction(Request $request){

        $file = new SmImages();
        $form = $this->createFormBuilder($file)
            ->add('imgName', FileType::class, array('label' => 'Upload File'))
            ->getForm();

        $form->handleRequest($request);




    }


    /**
     * @Route('/media/view_media/list', name='view_media_all')
     */
    public function showAction(){

        $repository=$this->getDoctrine()->getRepository('ScmsBundle:SmImages');
        $media_list = $repository->findAll();

        return $this->render('dashboard/media_list.html.twig', array('media_list'=>$media_list));



    }





}