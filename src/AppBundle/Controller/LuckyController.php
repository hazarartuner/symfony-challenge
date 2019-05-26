<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Toy;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\People;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/testUC1/people/list/")
     */
    public function listPeopleUC1Action()
    {
        /** @var EntityManager $em */
        $em = $this->container->get('doctrine')->getManager();

        $people = $em->createQuery('SELECT p FROM AppBundle\Entity\People p')
            ->getResult(Query::HYDRATE_OBJECT);

        return new Response(var_dump($people));
    }

    /**
     * @Route("/testUC2/people/list/", name="people-list")
     */
    public function listPeopleUC2Action()
    {
        /** @var EntityManager $em */
        $em = $this->container->get('doctrine')->getManager();

        $people = $em->getRepository(People::class)->findAll();

        return $this->render('displayPeople.html.twig', [
            'people' => $people
         ]);
    }

    /**
     * @Route("/testUC3/people/create/", name="people-create")
     */
    public function createPeopleUC3Action(Request $request)
    {
        $person = new People();

        $form = $this->createFormBuilder($person)
            ->add('name', TextType::class)
            ->add('email', TextType::class)
            ->add('age', TextType::class)
            ->add('submit', SubmitType::class, ['label' => 'Create'])
            ->getForm();

        if ($form->handleRequest($request) && $form->isSubmitted()) {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();

            /** @var People $formData */
            $formData = $form->getData();
            $em->persist($formData);

            try {
                $toy = new Toy();
                $toy->setName($formData->getName() . '_' . $formData->getAge());
                $toy->setCreationDate(new \DateTime());
                $toy->setPeople($formData);
                $em->persist($toy);

                $em->flush();

                $this->addFlash('success', 'Person created successfully');
                return $this->redirectToRoute('people-list');
            } catch(\Exception $e) {
                $this->addFlash('error', 'Unexpected error happened');
                return $this->redirectToRoute('people-create');
            }
        }

        return $this->render(sprintf('createPeople.%s.twig', $this->getRequest()->getRequestFormat()), array(
            'peopleForm' => $form->createView()
        ));
    }

    /**
     * @Route("/testUC5/people/{id}", name="show-people")
     */
    public function showPeopleUC5Action($id)
    {
        /** @var EntityManager $em */
        $em = $this->container->get('doctrine')->getManager();


        $person = $em->getRepository(People::class)->find($id);

        return $this->render('showPerson.html.twig', [
            'person' => $person
        ]);
    }
}
