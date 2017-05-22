<?php


namespace ScmsBundle\Controller;

use ScmsBundle\Entity\SmProjCategories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProjectcategoriesController extends Controller
{
    //create new categories
    //get new instance of product
    //accept new category name and info(from form input)
    //instantiate entity manager
    //store to db
    //confirm success

    //list existing categories
    //query for all categories from db
    //pass the list to twig template

    //delete category
    //identify category by id
    //remove from db
    //return confirm of delete

    //update category
    //accept changes from form
    //update changes in db
    //return confirmation


    /**
     *
     * @Route("/project-category/create", name="create_project_category")
     *
     */
    public function createAction(Request $request)
    {
    $page_title = 'New Project Category';


        $project_category = new SmProjCategories();
        $form = $this->createFormBuilder($project_category)
            ->add('projCatName', TextType::class,  array('label' => 'Project Category Name'))
            ->add('Save', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $project_category = $form->getData();
            $entity_manager = $this->getDoctrine()->getManager();
            $entity_manager->persist($project_category);
            $entity_manager->flush();

            return $this->redirectToRoute('show_project_categories');
        }

        return $this->render('dashboard/project_category_form.html.twig',
            array('form'=>$form->createView(),'page_title'=>$page_title));

    }

    /**
     * @Route("/project-category/list", name="show_project_categories")
     */
    public function showAction(){

        //retrieve project categories repository
        //pass the categories to the view

        $repository=$this->getDoctrine()->getRepository('ScmsBundle:SmProjCategories');
        $project_category_list=$repository->findAll();


        return $this->render('dashboard/project_category_list.html.twig', array('project_category_list'=>$project_category_list));

    }

    /**
     * @Route("/project-category/edit/{project_category_id}", name="update_project_category")
     */
    public function updateAction($project_category_id, Request $request){

        //get entity manager
        //get repository
        //get item
        //load details on form
        //accept form submission
        //save changes

        $page_title = 'Edit Category';

        $entity_manager=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('ScmsBundle:SmProjCategories');
        $project_category=$repository->find($project_category_id);

        if(!$project_category){
            //item not found exception
            return $this->redirectToRoute('show_project_categories');
        }


        $form = $this->createFormBuilder($project_category)
            ->add('projCatName', TextType::class, array('label' => 'Project Category Name'))
            ->add('save', SubmitType::class, array('label' => 'Save'))

            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $project_category=$form->getData();
            $entity_manager->persist($project_category);
            $entity_manager->flush();

            return $this->redirectToRoute('show_project_categories');

        }

        return $this->render('dashboard/project_category_form.html.twig',
            array('form'=>$form->createView(),'page_title'=>$page_title));

    }

    /**
     * @Route("/project-category/delete/{project_category_id}", name="delete_project_category")
     */
    public function deleteAction($project_category_id){

        //get entity manager
        //get repository
        //remove product
        //flush

        $entity_manager=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('ScmsBundle:SmProjCategories');
        $project_category=$repository->find($project_category_id);

        if(!$project_category){
            // render notice
            //return redirect
            $message="Faild! Item not Found";

            return $this->redirectToRoute('show_project_categories', array('error',$message));

        }

        $entity_manager->remove($project_category);
        $entity_manager->flush();

        $message="Item Deleted Successfully";

        return $this->redirectToRoute('show_project_categories', array('success',$message));
    }




}