<?php

/**
 * 
 * @author:  Gabriel BONDAZ <gabriel.bondaz@idci-consulting.fr>
 * @license: MIT
 *
 */
 
namespace IDCI\Bundle\NavBarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MenuController extends Controller
{
    /**
     * @Route("/nav.{_format}", defaults={"_format"="html"})
     */
    public function navAction(Request $request)
    {
        $format = $request->getRequestFormat();

        $generator = $this->get(sprintf(
            'idci_nav_bar.generator.%s',
            $format
        ));

        $response = new Response();
        $response->setContent($generator->generate());
        $response->headers->set(
            'Content-Type',
            sprintf('%s; charset=UTF-8', $generator->getContentType())
        );

        return $response;
    }
}
