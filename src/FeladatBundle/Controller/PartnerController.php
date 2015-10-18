<?php

namespace FeladatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FeladatBundle\Entity\Partner;
use FeladatBundle\Entity\NevElotag;
use FeladatBundle\Form\PartnerType;
use FeladatBundle\Form\NevElotagType;

/**
 * Partner controller.
 *
 */
class PartnerController extends Controller {

    /**
     * Lists all Partner entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT a FROM FeladatBundle:Partner a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5);

        return $this->render('FeladatBundle:Partner:index.html.twig', array(
                    'pagination' => $pagination,
        ));
    }

    /**
     * Creates a new Partner entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Partner();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $curr_user = $this->get('security.token_storage')->getToken()->getUser();
            $curr_user_name = $curr_user->getUsername();
            $entity->setLetrehozo($curr_user_name);

            $em->persist($entity);
            $em->flush();

            $nextAction = $form->get('saveAndAdd')->isClicked() ? 'partner_new' : 'partner_show';

            return $this->redirect($this->generateUrl($nextAction, array('id' => $entity->getId())));
        }

        return $this->render('FeladatBundle:Partner:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Partner entity.
     *
     * @param Partner $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Partner $entity) {
        $form = $this->createForm(new PartnerType(), $entity, array(
            'action' => $this->generateUrl('partner_create'),
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
     * Displays a form to create a new Partner entity.
     *
     */
    public function newAction() {
        $entity = new Partner();
        $form = $this->createCreateForm($entity);

        return $this->render('FeladatBundle:Partner:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }
    
    /*public function elotagAction(Request $request){
        $em = $this->getDoctrine()-getManager();
        
        $newElotag = new NevElotag();
        
        $form = $this->createForm(
                new NevElotagType(),
                $newElotag,
                array('action' => $this->generateUrl('partner_elotag'), 'method' => 'POST')
                );
        
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            
            if($form->isValid()){
                $data = $form->getData();
                
                $em->persist($data);
                $em->flush();
                
                $response = new Response(json_encode([
                    'success' => true,
                    'id' => $data->getId(),
                    'nev' => $data->getNev(),
                    'leiras' => $data->getLeiras()
                ]));
                $response->headers->set('Content-Type', 'application/json');
                
                return $response;
            }
        }
        
        return $this->render("FeladatBundle:NevElotag:new.html.twig", array(
            'form' => $form->createView()
        ));
        
    }*/

    /**
     * Finds and displays a Partner entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:Partner')->find($id);
        
        $telephelyek = $entity->getTelephelyek();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FeladatBundle:Partner:show.html.twig', array(
                    'entity' => $entity,
                    'telephelyek' => $telephelyek,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Partner entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:Partner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partner entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FeladatBundle:Partner:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Partner entity.
     *
     * @param Partner $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Partner $entity) {
        $form = $this->createForm(new PartnerType(), $entity, array(
            'action' => $this->generateUrl('partner_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Partner entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:Partner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $curr_user = $this->get('security.token_storage')->getToken()->getUser();
            $curr_user_name = $curr_user->getUsername();
            $entity->setModosito($curr_user_name);
            $em->flush();

            return $this->redirect($this->generateUrl('partner_edit', array('id' => $id)));
        }

        return $this->render('FeladatBundle:Partner:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Partner entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FeladatBundle:Partner')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Partner entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('partner'));
    }

    /**
     * Creates a form to delete a Partner entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('partner_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
