<?php

namespace Jet\NewsletterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Jet\NewsletterBundle\Entity\Suscriber;
use Jet\NewsletterBundle\Form\SuscriberType;

/**
 * Suscriber controller.
 *
 * @Route("/suscriptores")
 */
class SuscriberController extends Controller
{
    /**
     * Lists all Suscriber entities.
     *
     * @Route("/", name="suscriptores")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('JetNewsletterBundle:Suscriber')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Suscriber entity.
     *
     * @Route("/{id}/show", name="suscriptores_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Suscriber')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Suscriber entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Suscriber entity.
     *
     * @Route("/new", name="suscriptores_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Suscriber();
        $form   = $this->createForm(new SuscriberType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Suscriber entity.
     *
     * @Route("/create", name="suscriptores_create")
     * @Method("post")
     * @Template("JetNewsletterBundle:Suscriber:new.html.twig")
     */
    public function createAction()
    {
    $user = $this->get('security.context')->getToken()->getUser();
        $entity  = new Suscriber();
        $request = $this->getRequest();
        $form    = $this->createForm(new SuscriberType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid() && $user) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity->setOwner($user);
            $entity->setCreatedAt(new \DateTime());
            $entity->setUpdatedAt(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('suscriptores_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Suscriber entity.
     *
     * @Route("/{id}/edit", name="suscriptores_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Suscriber')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Suscriber entity.');
        }

        $editForm = $this->createForm(new SuscriberType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Suscriber entity.
     *
     * @Route("/{id}/update", name="suscriptores_update")
     * @Method("post")
     * @Template("JetNewsletterBundle:Suscriber:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Suscriber')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Suscriber entity.');
        }

        $editForm   = $this->createForm(new SuscriberType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
        
            $entity->setUpdatedAt(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('suscriptores_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Suscriber entity.
     *
     * @Route("/{id}/delete", name="suscriptores_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('JetNewsletterBundle:Suscriber')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Suscriber entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('suscriptores'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
