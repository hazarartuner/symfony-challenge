<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller

{
    /**
     * @Route("/testUC1/people/list/")
     */
    public function listPeopleUC1Action()
    {

    }

    /**
     * @Route("/testUC2/people/list/")
     */
    public function listPeopleUC2Action()
    {

    }

    /**
     * @Route("/testUC3/people/create/")
     */
    public function createPeopleUC3Action()
    {
        return $this->render(sprintf('createPeople.%s.twig', $this->getRequest()->getRequestFormat()), array());
    }
}
