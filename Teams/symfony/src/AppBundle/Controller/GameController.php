<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Game;

/**
 * GameController controller.
 *
 * @Route("game")
 */
class GameController extends Controller
{

	public function createAction(Request $request)
	{
            if (!$request->isXmlHttpRequest()) {
                    throw $this->createNotFoundException($this->get('translator')->trans('error.404'));
            }

            // Get doctrine
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:Game');

            $game = new Game();
            /* ............Create Game ..... */
            $response = $repository->save($game);
            if ($response['code'] == 0) {
                    $status = 200;
            }

            return new JsonResponse($response, $status);
	}

	public function editAction(Request $request, Game $game)
	{
            if (!$request->isXmlHttpRequest()) {
                    throw $this->createNotFoundException($this->get('translator')->trans('error.404'));
            }

            // Get doctrine
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:Game');

            /* ............Edit Game ..... */
            $response = $repository->save();
            if ($response['code'] == 0) {
                    $status = 200;
            }

            return new JsonResponse($response, $status);
	}

}

