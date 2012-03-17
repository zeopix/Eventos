<?php

namespace Jet\NewsletterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Jet\NewsletterBundle\Entity\Plantilla;
use Jet\NewsletterBundle\Form\TemplateType;

/**
 * Template controller.
 *
 * @Route("/plantillas")
 */
class TemplateController extends Controller
{
    /**
     * Lists all Template entities.
     *
     * @Route("/", name="plantillas")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('JetNewsletterBundle:Plantilla')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Template entity.
     *
     * @Route("/{id}/show", name="plantillas_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Plantilla')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Template entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Template entity.
     *
     * @Route("/new", name="plantillas_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Plantilla();
        $form   = $this->createForm(new TemplateType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Template entity.
     *
     * @Route("/create", name="plantillas_create")
     * @Method("post")
     * @Template("JetNewsletterBundle:Template:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Plantilla();
        $request = $this->getRequest();
        $form    = $this->createForm(new TemplateType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $entity->setCreatedAt(new \DateTime());
            $entity->setUpdatedAt(new \DateTime());
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plantillas_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Template entity.
     *
     * @Route("/{id}/edit", name="plantillas_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Plantilla')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Template entity.');
        }

        $editForm = $this->createForm(new TemplateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Template entity.
     *
     * @Route("/{id}/update", name="plantillas_update")
     * @Method("post")
     * @Template("JetNewsletterBundle:Template:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Plantilla')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Template entity.');
        }

        $editForm   = $this->createForm(new TemplateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $entity->setUpdatedAt(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plantillas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Template entity.
     *
     * @Route("/{id}/delete", name="plantillas_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('JetNewsletterBundle:Plantilla')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Template entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('plantillas'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
