<?php

namespace picc\piccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    // Action performed by call "index" page
    public function indexAction()
    {
        // Get the entity repository
        $repo = $this->getDoctrine()->getEntityManager()->createQueryBuilder();

        // Prepare request for last ten 
        $lasts = $repo->select('p')->from('piccBundle:Pebkac', 'p')->orderBy('p.id', 'DESC')->setMaxResults(10);

        // Call twig index template and associate result of request 
        return $this->render('piccBundle:Default:index.html.twig', array('name' => "Loy", 'piccs' => $lasts->getQuery()->getResult()));
    }
}
