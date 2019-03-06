<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Player;

/**
 * PlayerController controller.
 *
 * @Route("player")
 */
class PlayerController extends Controller
{

	public function createAction(Request $request)
	{
            if (!$request->isXmlHttpRequest()) {
                    throw $this->createNotFoundException($this->get('translator')->trans('error.404'));
            }

            // Get doctrine
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:Player');

            $player = new Player();
            /* ............Create Player ..... */
            $response = $repository->save($player);
            if ($response['code'] == 0) {
                    $status = 200;
            }

            return new JsonResponse($response, $status);
	}

	public function editAction(Request $request, Player $player)
	{
            if (!$request->isXmlHttpRequest()) {
                    throw $this->createNotFoundException($this->get('translator')->trans('error.404'));
            }

            // Get doctrine
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:Player');

            /* ............Edit Player ..... */
            $response = $repository->save();
            if ($response['code'] == 0) {
                    $status = 200;
            }

            return new JsonResponse($response, $status);
	}

}



