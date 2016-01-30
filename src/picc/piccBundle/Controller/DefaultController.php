<?php

namespace picc\piccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserInfos
{
	public $name;
	public $avatar;

	public function __construct($user)
	{
		$this->name = $user->getUsername();
		$this->avatar = $user->getAvatar();
	}
}

class DefaultController extends Controller
{
	private function getUserInfos()
	{
		return new UserInfos($this->getUser());
	}
	private function ret_page($template, $vars)
	{
		$tmpUser = $this->getUser();
		$csrf_tk = $this->get('form.csrf_provider')->generateCsrfToken('authenticate');
		
		$vars['csrf_token'] = $csrf_tk;
		$vars['user_'] = $tmpUser ? $this->getUserInfos($tmpUser) : null;
		return $this->render($template, $vars);
	}

    // Action performed by call "index" page
    public function indexAction($id)
    {
        // Get the entity repository
        $repo = $this->getDoctrine()->getManager()->createQueryBuilder();

        // Prepare request for last ten and get the query
        $query = $repo->select('p')->from('piccBundle:Picc', 'p')->orderBy('p.id', 'DESC')->setFirstResult(($id-1)*10)->setMaxResults(10)->getQuery();

        $lasts = $query->getResult();

        if($lasts == null)
            throw $this->createNotFoundException('Page does not exist !');

        // Call twig index template and associate result of request 
        return $this->ret_page('piccBundle:Default:index.html.twig', array('piccs' => $lasts));
    }

    // Action performed on pebkac/id and print comments 
    public function showPiccAction($id)
    {
        $picc = $this->getDoctrine()->getRepository('piccBundle:Picc')->find($id);

        if(!$picc)
            throw $this->createNotFoundException('Page does not exist !');

        $comms = $this->getDoctrine()->getRepository('piccBundle:Comments')->findBy(array('wtfId' => $id));

        return $this->ret_page('piccBundle:Default:picc.html.twig', array('picc' => $picc, 'comms' => $comms));
    }

	// Action register
	public function registerAction()
	{
		return $this->render('piccBundle:Default:register.html.twig');
	}
}
