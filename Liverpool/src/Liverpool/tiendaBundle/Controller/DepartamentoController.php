<?php

namespace Liverpool\tiendaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Liverpool\tiendaBundle\Entity\Departamento;
use Liverpool\tiendaBundle\Form\DepartamentoType;

/**
 * Departamento controller.
 *
 */
class DepartamentoController extends Controller
{
    /**
     * Lists all Departamento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $departamentos = $em->getRepository('LiverpooltiendaBundle:Departamento')->findAll();

        return $this->render('departamento/index.html.twig', array(
            'departamentos' => $departamentos,
        ));
    }

    /**
     * Creates a new Departamento entity.
     *
     */
    public function newAction(Request $request)
    {
        $departamento = new Departamento();
        $form = $this->createForm('Liverpool\tiendaBundle\Form\DepartamentoType', $departamento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($departamento);
            $em->flush();

            return $this->redirectToRoute('departamento_show', array('id' => $departamento->getIddepartamento()));
        }

        return $this->render('departamento/new.html.twig', array(
            'departamento' => $departamento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Departamento entity.
     *
     */
    public function showAction(Departamento $departamento)
    {
        $deleteForm = $this->createDeleteForm($departamento);

        return $this->render('departamento/show.html.twig', array(
            'departamento' => $departamento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Departamento entity.
     *
     */
    public function editAction(Request $request, Departamento $departamento)
    {
        $deleteForm = $this->createDeleteForm($departamento);
        $editForm = $this->createForm('Liverpool\tiendaBundle\Form\DepartamentoType', $departamento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($departamento);
            $em->flush();

            return $this->redirectToRoute('departamento_edit', array('id' => $departamento->getIddepartamento()));
        }

        return $this->render('departamento/edit.html.twig', array(
            'departamento' => $departamento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Departamento entity.
     *
     */
    public function deleteAction(Request $request, Departamento $departamento)
    {
        $form = $this->createDeleteForm($departamento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($departamento);
            $em->flush();
        }

        return $this->redirectToRoute('departamento_index');
    }

    /**
     * Creates a form to delete a Departamento entity.
     *
     * @param Departamento $departamento The Departamento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Departamento $departamento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('departamento_delete', array('id' => $departamento->getIddepartamento())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
