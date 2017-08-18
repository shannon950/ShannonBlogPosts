<?php

namespace Shannon\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShannonBlogBundle:Default:index.html.twig');
    }
}
