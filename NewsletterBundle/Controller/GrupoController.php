<?php

namespace Jet\NewsletterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Jet\NewsletterBundle\Entity\Grupo;
use Jet\NewsletterBundle\Form\GrupoType;

/**
 * Grupo controller.
 *
 * @Route("/grupos")
 */
class GrupoController extends Controller
{
    /**
     * Lists all Grupo entities.
     *
     * @Route("/", name="grupos")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('JetNewsletterBundle:Grupo')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Grupo entity.
     *
     * @Route("/{id}/show", name="grupos_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Grupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Grupo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Grupo entity.
     *
     * @Route("/new", name="grupos_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Grupo();
        $form   = $this->createForm(new GrupoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Grupo entity.
     *
     * @Route("/create", name="grupos_create")
     * @Method("post")
     * @Template("JetNewsletterBundle:Grupo:new.html.twig")
     */
    public function createAction()
    {
    $user = $this->get('security.context')->getToken()->getUser();

        $entity  = new Grupo();
        $request = $this->getRequest();
        $form    = $this->createForm(new GrupoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid() && $user) {
            $em = $this->getDoctrine()->getEntityManager();
			$entity->setOwner($user);
            $entity->setCreatedAt(new \DateTime());
            $entity->setUpdatedAt(new \DateTime());
            $entity->setMembers(0);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('grupos_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Grupo entity.
     *
     * @Route("/{id}/edit", name="grupos_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Grupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Grupo entity.');
        }

        $editForm = $this->createForm(new GrupoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Grupo entity.
     *
     * @Route("/{id}/update", name="grupos_update")
     * @Method("post")
     * @Template("JetNewsletterBundle:Grupo:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Grupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Grupo entity.');
        }

        $editForm   = $this->createForm(new GrupoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
        
            $entity->setUpdatedAt(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('grupos_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Grupo entity.
     *
     * @Route("/{id}/delete", name="grupos_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('JetNewsletterBundle:Grupo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Grupo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('grupos'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
