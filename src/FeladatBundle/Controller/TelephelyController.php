<?php

namespace FeladatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FeladatBundle\Entity\Telephely;
use FeladatBundle\Form\TelephelyType;

/**
 * Telephely controller.
 *
 */
class TelephelyController extends Controller
{

    /**
     * Lists all Telephely entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FeladatBundle:Telephely')->findAll();

        return $this->render('FeladatBundle:Telephely:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Telephely entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Telephely();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('telephely_show', array('id' => $entity->getId())));
        }

        return $this->render('FeladatBundle:Telephely:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Telephely entity.
     *
     * @param Telephely $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Telephely $entity)
    {
        $form = $this->createForm(new TelephelyType(), $entity, array(
            'action' => $this->generateUrl('telephely_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Telephely entity.
     *
     */
    public function newAction()
    {
        $entity = new Telephely();
        $form   = $this->createCreateForm($entity);

        return $this->render('FeladatBundle:Telephely:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Telephely entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:Telephely')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Telephely entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FeladatBundle:Telephely:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Telephely entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:Telephely')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Telephely entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FeladatBundle:Telephely:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Telephely entity.
    *
    * @param Telephely $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Telephely $entity)
    {
        $form = $this->createForm(new TelephelyType(), $entity, array(
            'action' => $this->generateUrl('telephely_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Telephely entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeladatBundle:Telephely')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Telephely entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('telephely_edit', array('id' => $id)));
        }

        return $this->render('FeladatBundle:Telephely:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Telephely entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FeladatBundle:Telephely')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Telephely entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('telephely'));
    }

    /**
     * Creates a form to delete a Telephely entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('telephely_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
