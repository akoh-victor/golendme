<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }





    /**
     * @Route("/admin", name = "admin")
     */
    public function adminIndexAction(Request $request)
    {





        return $this->render('admin/index.html.twig', array(

        ));
    }






    /**
     * @Route("/contact", name = "contactUs")
     */
    public function contactAction(Request $request)
    {

        $message = new Message();
        $form = $this->createForm(new MessageType(), $message);
        $form->handleRequest($request);

        if ($form->isValid())
        {
            $message->setPosted(new \DateTime());
            $message->setView(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice','Your message was successfully sent !!! We will get back to you soon.');
            return $this->redirect($this->generateUrl('contactUs'));
        }


        return $this->render('default/contact.html.twig', array( 'form' => $form ->createView(),));

    }
}
