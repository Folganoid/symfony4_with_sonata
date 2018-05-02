<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\TranslatorInterface;

class DefaultController extends Controller
{
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('default/number.html.twig', array(
            'number' => $number,
        ));
    }

    public function test(TranslatorInterface $translator)
    {
        return new Response($translator->trans('test'));

    }
}