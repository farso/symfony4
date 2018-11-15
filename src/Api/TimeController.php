<?php
namespace App\Api;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class TimeController
 * @package App\Api
 */
class TimeController extends FosRestController
{

    /**
     * Retrieves an Article resource
     * @Rest\Get("/time")
     * @return View
     */
    public function getTime(): View
    {
        $date = new \DateTime('NOW');
        return View::create($date, Response::HTTP_OK);
    }
}
