<?php

namespace Gde\Bundle\PlaylearnFrontendBundle\Controller;

use Gde\Bundle\PlaylearnFrontendBundle\Entity\question;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('')
            ->findAllOrderedByName();

        $question = (new \Gde\Math\Question\Level\One\Generator())->getQuestion();

        $q = new question();
        $q->setQuestion($question);


        $em->persist($q);
        $em->flush();

        return $this->render('GdePlaylearnFrontendBundle:Default:index.html.twig', array(
            'question' => $question
        ));
    }
}
