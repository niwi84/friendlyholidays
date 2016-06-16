<?php

namespace HolidaysBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HolidaysBundle\Entity\Spend;
use HolidaysBundle\Form\SpendType;

/**
 * Spend controller.
 *
 */
class SpendController extends Controller
{
    /**
     * Lists all Spend entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $spends = $em->getRepository('HolidaysBundle:Spend')->findAll();

        return $this->render('HolidaysBundle:spend:index.html.twig', array(
            'spends' => $spends,
        ));
    }

    /**
     * Creates a new Spend entity.
     *
     */
    public function newAction(Request $request)
    {
        $spend = new Spend();
        $form = $this->createForm('HolidaysBundle\Form\SpendType', $spend);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($spend);
            $em->flush();

            return $this->redirectToRoute('spend_show', array('id' => $spend->getId()));
        }

        return $this->render('HolidaysBundle:spend:new.html.twig', array(
            'spend' => $spend,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Spend entity.
     *
     */
    public function showAction(Spend $spend)
    {
        $deleteForm = $this->createDeleteForm($spend);

        return $this->render('HolidaysBundle:spend:show.html.twig', array(
            'spend' => $spend,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Spend entity.
     *
     */
    public function editAction(Request $request, Spend $spend)
    {
        $deleteForm = $this->createDeleteForm($spend);
        $editForm = $this->createForm('HolidaysBundle\Form\SpendType', $spend);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if($editForm->get('phSpend')->getData() != null) {

                if($event->getSpendPhoto() != null) {
                    unlink(__DIR__.'/../../../web/uploads/photosSpends/'.$event->getSpendPhoto());
                    $soiree->setSpendPhoto(null);
                }
            }

            $spend->preUpload();

            $em->persist($spend);
            $em->flush();

            return $this->redirectToRoute('spend_edit', array('id' => $spend->getId()));
        }

        return $this->render('HolidaysBundle:spend:edit.html.twig', array(
            'spend' => $spend,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Spend entity.
     *
     */
    public function deleteAction(Request $request, Spend $spend)
    {
        $form = $this->createDeleteForm($spend);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($spend);
            $em->flush();
        }

        return $this->redirectToRoute('spend_index');
    }

    /**
     * Creates a form to delete a Spend entity.
     *
     * @param Spend $spend The Spend entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Spend $spend)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('spend_delete', array('id' => $spend->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
