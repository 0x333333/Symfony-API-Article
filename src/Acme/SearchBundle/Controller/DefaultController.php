<?php

namespace Acme\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;



class DefaultController extends Controller
{
	/**
	 *
	 * @Rest\View
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Get all articles",
     *  statusCodes={
     *         200="Returned when successful",
     *         400="Returned when query is not valid",
     *         403="Returned when the user is not authorized to access",
     *         404="Returned when no document found"
     *         }
     * )
     */
    public function getAction($id)
    {
    	$test = array("hello", "world", "zhipeng");
    	print_r($test);

        return $this->render('AcmeSearchBundle:Default:index.html.twig', array('result' => "-EOF-"));
    }
}
