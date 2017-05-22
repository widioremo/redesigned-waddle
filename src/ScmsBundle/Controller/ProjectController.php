<?php
/**
 * Created by PhpStorm.
 * User: widdzz
 * Date: 5/21/17
 * Time: 12:15 AM
 */

//sec/ScmsBundle/Controller/Project/ProjectController.php

namespace ScmsBundle\Controller;

use ScmsBundle\Entity\SmProjects;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProjectController extends Controller
{
    /*
     * TODO
     * CREATE NEW PROJECT
     * *load the form
     * *accept details(title, descp text, gallery, image, category,state)
     * *save details
     */



    //list project
    //update/edit project
    //delete project

    /**
     * @Route("/project/create", name="create_project")
     */
    public function createAction(){


    }

    /**
     * @Route("/project/list", name="show_projects")
     */
    public function showAction(){


    }

    /**
     * @Route("/project/edit", name="update_project")
     */
    public function updateAction(){


    }

    /**
     * @Route("/project-category/delete", name="delete_project")
     */
    public function deleteAction(){


    }




}