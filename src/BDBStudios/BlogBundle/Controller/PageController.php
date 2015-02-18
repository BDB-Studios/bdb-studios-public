<?php


namespace BDBStudios\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'BDBStudiosBlogBundle:Page:index.html.twig'
        );
    }

    public function aboutAction()
    {
        return $this->render(
            'BDBStudiosBlogBundle:Page:about.html.twig'
        );
    }

    public function contactAction()
    {
        return $this->render(
            'BDBStudiosBlogBundle:Page:contact.html.twig'
        );
    }
}
