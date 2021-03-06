<?php

namespace HolidaysBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HolidaysBundle\Entity\Event;
use HolidaysBundle\Form\EventType;

/**
 * Event controller.
 *
 */
class EventController extends Controller
{
    /**
     * Lists all Event entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('HolidaysBundle:Event')->findAll();

        return $this->render('HolidaysBundle:event:index.html.twig', array(
            'events' => $events,
        ));
    }

    /**
     * Creates a new Event entity.
     *
     */
    public function newAction(Request $request)
    {
        $event = new Event();
        $form = $this->createForm('HolidaysBundle\Form\EventType', $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('event_show', array('id' => $event->getId()));
        }

        return $this->render('HolidaysBundle:event:new.html.twig', array(
            'event' => $event,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Event entity.
     *
     */
    public function showAction(Event $event)
    {
        $em = $this->getDoctrine()->getManager();
        
        $deleteForm = $this->createDeleteForm($event);

        $id = $event->getId();
//        var_dump($id);exit;
        
//        $nb_spends_event = $em->getRepository('HolidaysBundle:Spend')->getNbSpendsEvent($id);
//        $event->nbspends = $nb_spends_event;
//        var_dump($nb_spends_event);exit;

        
        $spends_event = $em->getRepository('HolidaysBundle:Spend')->getSpendsEvent($id);
//        var_dump($spends_event);exit;

//        $sbe = array();
//        foreach  ($spends_event as $sfte=>$valsfte) {
//            foreach  ($valsfte as $tpps2=>$valsfte2) {
//                $sbe[$sfte] = $valsfte2;
//            }
////            var_dump($valsfte);exit;
//        }
////            var_dump($sbe);exit;
////            var_dump($spends_event);exit;
//
//        $event->spends = $sbe;
////            var_dump($event);exit;

        $event->spends = $spends_event;
        
        $nb_spends_event2 = count($spends_event);
//        var_dump($nb_spends_event2);exit;
        $event->nbspends = $nb_spends_event2;


//        $nb_spendsbyki_event = $em->getRepository('HolidaysBundle:Spend')->getNbSpendsByKiEvent($id);
//        $event->nbspendsbyki = $nb_spendsbyki_event;
//        var_dump($nb_spendsbyki_event);exit;
        
        
        $spendsbyki_event = $em->getRepository('HolidaysBundle:Spend')->getSpendsByKiEvent($id);
//        var_dump($spendsbyki_event);exit;

        $event->spendsbyki = $spendsbyki_event;

        $nb_spendsbyki_event2 = count($spendsbyki_event);
//        var_dump($nb_spends_event2);exit;
        $event->nbspendsbyki = $nb_spendsbyki_event2;


        $spendTotal_event = $em->getRepository('HolidaysBundle:Spend')->getSpendsTotalEvent($id);
//        var_dump($spendTotal_event);exit;

        $event->spendTotal = $spendTotal_event;


//        var_dump($event);exit;
//        $participants = $event->participants;
//        $participants2 = $participants->association;
        $ecot = 0;
        if ($nb_spendsbyki_event2 > 0)
            $ecot = $spendTotal_event / $nb_spendsbyki_event2;

        $event->ecot = $ecot;

//        foreach  ($spendsbyki_event as $sbki=>$valsbki) {
//            var_dump($valsbki);exit;
//            foreach  ($valsfte as $tpps2=>$valsfte2) {
//                $sbe[$sfte] = $valsfte2;
//
//            }
//            var_dump($valsfte);exit;
//        }


        return $this->render('HolidaysBundle:event:show.html.twig', array(
            'event' => $event,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Event entity.
     *
     */
    public function editAction(Request $request, Event $event)
    {
        $deleteForm = $this->createDeleteForm($event);
        $editForm = $this->createForm('HolidaysBundle\Form\EventType', $event);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if($editForm->get('phEvent')->getData() != null) {

                if($event->getEventPhoto1() != null) {
                    unlink(__DIR__.'/../../../web/uploads/photosEvents/'.$event->getEventPhoto1());
                    $event->setEventPhoto1(null);
                }
            }

            $event->preUpload();

            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('event_edit', array('id' => $event->getId()));
        }

        return $this->render('HolidaysBundle:event:edit.html.twig', array(
            'event' => $event,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Event entity.
     *
     */
    public function deleteAction(Request $request, Event $event)
    {
        $form = $this->createDeleteForm($event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($event);
            $em->flush();
        }

        return $this->redirectToRoute('event_index');
    }

    /**
     * Creates a form to delete a Event entity.
     *
     * @param Event $event The Event entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Event $event)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('event_delete', array('id' => $event->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
