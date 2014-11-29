<?php

namespace Gde\Bundle\PlaylearnFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $question = (new \Gde\Math\Question\Level\One\Generator())->getQuestion();

        return $this->render('GdePlaylearnFrontendBundle:Default:index.html.twig', array(
            'question' => $question
        ));
    }
}
