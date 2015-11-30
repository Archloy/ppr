<?php

namespace picc\piccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    // Action performed by call "index" page
    public function indexAction($id)
    {
        // Get the entity repository
        $repo = $this->getDoctrine()->getManager()->createQueryBuilder();

        // Prepare request for last ten and get the query
        $query = $repo->select('p')->from('piccBundle:Pebkac', 'p')->orderBy('p.id', 'DESC')->setFirstResult(($id-1)*10)->setMaxResults(10)->getQuery();

        $lasts = $query->getResult();

        if($lasts == null)
            throw $this->createNotFoundException('Page does not exist !');


        // Call twig index template and associate result of request 
        return $this->render('piccBundle:Default:index.html.twig', array('piccs' => $lasts));
    }

    // Action performed on pebkac/id and print comments 
    public function showPiccAction($id)
    {
        $picc = $this->getDoctrine()->getRepository('piccBundle:Pebkac')->find($id);

        if(!$picc)
            throw $this->createNotFoundException('Page does not exist !');

        $comms = $this->getDoctrine()->getRepository('piccBundle:Comments')->findBy(array('wtfId' => $id));

        return $this->render('piccBundle:Default:picc.html.twig', array('picc' => $picc, 'comms' => $comms));
    }
}
