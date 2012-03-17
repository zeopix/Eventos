<?php

namespace Jet\NewsletterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Jet\NewsletterBundle\Entity\Campaign;
use Jet\NewsletterBundle\Form\CampaignType;

/**
 * Campaign controller.
 *
 * @Route("/campanas")
 */
class CampaignController extends Controller
{
    /**
     * Lists all Campaign entities.
     *
     * @Route("/", name="campanas")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('JetNewsletterBundle:Campaign')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Campaign entity.
     *
     * @Route("/{id}/show", name="campanas_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Campaign')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Campaign entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Campaign entity.
     *
     * @Route("/new", name="campanas_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Campaign();
        $form   = $this->createForm(new CampaignType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Campaign entity.
     *
     * @Route("/create", name="campanas_create")
     * @Method("post")
     * @Template("JetNewsletterBundle:Campaign:new.html.twig")
     */
    public function createAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();

        $entity  = new Campaign();
        $request = $this->getRequest();
        $form    = $this->createForm(new CampaignType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $entity->setCreatedAt(new \DateTime());
            $entity->setUpdatedAt(new \DateTime());
			//$this->assignPending($entity);
            $entity->setOwner($user);
            $entity->setStatus(2);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('campanas_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Campaign entity.
     *
     * @Route("/{id}/edit", name="campanas_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Campaign')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Campaign entity.');
        }

        $editForm = $this->createForm(new CampaignType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Campaign entity.
     *
     * @Route("/{id}/update", name="campanas_update")
     * @Method("post")
     * @Template("JetNewsletterBundle:Campaign:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('JetNewsletterBundle:Campaign')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Campaign entity.');
        }

        $editForm   = $this->createForm(new CampaignType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $entity->setUpdatedAt(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('campanas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Campaign entity.
     *
     * @Route("/{id}/delete", name="campanas_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('JetNewsletterBundle:Campaign')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Campaign entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('campanas'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    private function assignPending(&$entity){
    
    	$suscribers = $entity->getSuscribers();
    	
    	$groups = $entity->getGrupos();
    	
    	foreach($suscribers as $suscriber){
    		$entity->addPending($suscriber);
    	}
    	
    	foreach($groups as $grupo){
    		$usuarios = $grupo->getSuscribers();
    		foreach($usuarios as $usuario){
    			$entity->addPending($usuario);
    		}
    	}
    	
    	return $entity;
    
    }
}
