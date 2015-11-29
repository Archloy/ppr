<?php

namespace picc\piccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    // Action performed by call "index" page
    public function indexAction($id)
    {
        // Get the entity repository
        $repo = $this->getDoctrine()->getEntityManager()->createQueryBuilder();

        // Prepare request for last ten and get the query
        $query = $repo->select('p')->from('piccBundle:Pebkac', 'p')->orderBy('p.id', 'DESC')->setFirstResult(($id-1)*10)->setMaxResults(10)->getQuery();

        $lasts = $query->getResult();

        if($lasts == null)
            throw $this->createNotFoundException('Page does not exist !');


        // Call twig index template and associate result of request 
        return $this->render('piccBundle:Default:index.html.twig', array('piccs' => $lasts));
    }
}
