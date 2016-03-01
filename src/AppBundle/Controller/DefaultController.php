<?php

namespace AppBundle\Controller;

use AppBundle\Util\TextWrapper;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/hello", name="hello")
     */
    public function helloAction(Request $request)
    {
        return $this->render('AppBundle:Default:hello.html.twig', [
            'userName' => 'World',
        ]);
    }

    /**
     * @Route("/bold_hello", name="bold_hello")
     */
    public function boldHelloAction(Request $request)
    {
        $wrapper = new TextWrapper();
        $userName = $wrapper->boldText('World');

        return $this->render('AppBundle:Default:hello.html.twig', [
            'userName' => $userName,
        ]);
    }

    /**
     * @Route("/italic_hello", name="italic_hello")
     */
    public function italicHelloAction(Request $request)
    {
        $wrapper = new TextWrappe();
        $userName = $wrapper->italicText('World');

        return $this->render('AppBundle:Default:hello.html.twig', [
            'userName' => $userName,
        ]);
    }

    /**
     * @Route("/italic_bold_hello", name="italic_bold_hello")
     */
    public function italicBoldHelloAction(Request $request)
    {
        $wrapper = new TextWrapper();
        $userName = $wrapper->italicText('World');

        return $this->render('AppBundle:Default:hello.html.twig', [
            'userName' => $userName,
        ]);
    }
}
