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
}
