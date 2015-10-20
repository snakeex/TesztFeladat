<?php

namespace FeladatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FeladatBundle\Entity\NevElotag;
use FeladatBundle\Form\NevElotagType;

/**
 * NevElotag controller.
 *
 */
class NevElotagController extends Controller {

    /**
     * Lists all NevElotag entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT a FROM FeladatBundle:NevElotag a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5);

        $deleteForm = array();

        foreach ($pagination as $entity) {
            $thisId = $entity->getId();
            $deleteForm[$thisId] = $this->createDeleteForm($thisId)->createView();
        }
        
        return $this->render('FeladatBundle:NevElotag:index.html.twig', array(
                    'pagination' => $pagination,
                    'deleteForm' => $deleteForm,
        ));
    }

    /**
     * Creates a new NevElotag entity.
     *
     */
    public function createAction(Request $request) {
        /*if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'megint nem jó valami'), 400);
        }*/

        $entity = new NevElotag();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $curr_user = $this->get('security.token_storage')->getToken()->getUser();
            $curr_user_name = $curr_user->getUsername();
            $entity->setLetrehozo($curr_user_name);

            $em->persist($entity);
            $em->flush();
            
            $nextAction = $form->get('saveAndAdd')->isClicked() ? 'nevelotag_new' : 'nevelotag_show';

            //return new JsonResponse(array('message' => 'Success!'), 200);
             return $this->redirect($this->generateUrl($nextAction, array('id' => $entity->getId())));
        }


        /*$response = new JsonResponse(
                array(
            'message' => 'Error',
            'form' => $this->renderView('FeladatBundle:NevElotag:new.html.twig', array(
                'entity' => $entity,
                'form' => $form->createView(),
            ))), 400);

        return $response;*/
         return $this->render('FeladatBundle:NevElotag:new.html.twig', array(
          'entity' => $entity,
          'form'   => $form->createView(),
          )); 
    }

    /**
     * Creates a form to create a NevElotag entity.
     *
     * @param NevElotag $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(NevElotag $entity) {
        $form = $this->createForm(new NevElotagType(), $entity, array(
            'action' => $this->generateUrl('nevelotag_create'),
            'method' => 'POST',
        ));
        $form->add('save', 'submit', array(
            'label' => 'Mentés',
        ))
        ->add('saveAndAdd', 'submit', array(
            'label' => 'Mentés és új',
        ));
        return $form;
    }

    /**
     * Displays a form to create a new NevElotag entity.
     *
     */
    public function newAction(Request $request) {
        $entity = new NevElotag();
        $form = $this->createCreateForm($entity);

        return $this->render('FeladatBundle:NevElotag:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a NevElotag entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:NevElotag')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NevElotag entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FeladatBundle:NevElotag:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing NevElotag entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:NevElotag')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NevElotag entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FeladatBundle:NevElotag:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a NevElotag entity.
     *
     * @param NevElotag $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(NevElotag $entity) {
        $form = $this->createForm(new NevElotagType(), $entity, array(
            'action' => $this->generateUrl('nevelotag_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Módosít'));

        return $form;
    }

    /**
     * Edits an existing NevElotag entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:NevElotag')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NevElotag entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $curr_user = $this->get('security.token_storage')->getToken()->getUser();
            $curr_user_name = $curr_user->getUsername();
            $entity->setModosito($curr_user_name);
            $em->flush();

            return $this->redirect($this->generateUrl('nevelotag_edit', array('id' => $id)));
        }

        return $this->render('FeladatBundle:NevElotag:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a NevElotag entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FeladatBundle:NevElotag')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find NevElotag entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nevelotag'));
    }

    /**
     * Creates a form to delete a NevElotag entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('nevelotag_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Törlés'))
                        ->getForm()
        ;
    }

}
