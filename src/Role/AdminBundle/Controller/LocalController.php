<?php

namespace Role\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Core\LocalBundle\Entity\Local;
use Core\LocalBundle\Form\LocalType;

/**
 * Local controller.
 *
 * @Route("/locals")
 */
class LocalController extends Controller
{
    /**
     * Lists all Local entities.
     *
     * @Route("/", name="role_admin_local")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CoreLocalBundle:Local')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Local entity.
     *
     * @Route("/{id}/show", name="role_admin_local_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CoreLocalBundle:Local')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Local entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Local entity.
     *
     * @Route("/new", name="role_admin_local_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Local();
        $form   = $this->createForm(new LocalType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Local entity.
     *
     * @Route("/create", name="role_admin_local_create")
     * @Method("post")
     * @Template("CoreLocalBundle:Local:new.html.twig")
     */
    public function createAction()
    {
    	function canonicalize($string)
    	{
        	return mb_convert_case($string, MB_CASE_LOWER, mb_detect_encoding($string));
    	}
        $entity  = new Local();
        $request = $this->getRequest();
        $form    = $this->createForm(new LocalType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
        	$entity->setLocalnameCanonical($entity->getLocalname());
        	$entity->setEmailCanonical($entity->getEmail());
        	$entity->setWebCanonical($entity->getWeb());
        	$entity->setEnabled(false);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('role_admin_local_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Local entity.
     *
     * @Route("/{id}/edit", name="role_admin_local_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CoreLocalBundle:Local')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Local entity.');
        }

        $editForm = $this->createForm(new LocalType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Local entity.
     *
     * @Route("/{id}/update", name="role_admin_local_update")
     * @Method("post")
     * @Template("CoreLocalBundle:Local:edit.html.twig")
     */
    public function updateAction($id)
    {
    	function canonicalize($string)
    	{
        	return mb_convert_case($string, MB_CASE_LOWER, mb_detect_encoding($string));
    	}
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CoreLocalBundle:Local')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Local entity.');
        }

        $editForm   = $this->createForm(new LocalType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
        	$entity->setLocalnameCanonical($entity->getLocalname());
        	$entity->setEmailCanonical($entity->getEmail());
        	$entity->setWebCanonical($entity->getWeb());
        	$entity->setEnabled(false);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('role_admin_local_show', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Local entity.
     *
     * @Route("/{id}/delete", name="role_admin_local_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CoreLocalBundle:Local')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Local entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('role_admin_local'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
