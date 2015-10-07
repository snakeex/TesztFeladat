<?php

namespace FeladatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FeladatBundle\Entity\Partner;
use FeladatBundle\Form\PartnerType;

/**
 * Partner controller.
 *
 */
class PartnerController extends Controller
{

    /**
     * Lists all Partner entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FeladatBundle:Partner')->findAll();

        return $this->render('FeladatBundle:Partner:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Partner entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Partner();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('partner_show', array('id' => $entity->getId())));
        }

        return $this->render('FeladatBundle:Partner:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Partner entity.
     *
     * @param Partner $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Partner $entity)
    {
        $form = $this->createForm(new PartnerType(), $entity, array(
            'action' => $this->generateUrl('partner_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Partner entity.
     *
     */
    public function newAction()
    {
        $entity = new Partner();
        $form   = $this->createCreateForm($entity);

        return $this->render('FeladatBundle:Partner:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Partner entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:Partner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FeladatBundle:Partner:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Partner entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:Partner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partner entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FeladatBundle:Partner:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
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
    private function createEditForm(Partner $entity)
    {
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
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:Partner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('partner_edit', array('id' => $id)));
        }

        return $this->render('FeladatBundle:Partner:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Partner entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
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
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('partner_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
