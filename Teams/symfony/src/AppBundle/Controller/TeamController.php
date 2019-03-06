<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Team;

/**
 * TeamController controller.
 *
 * @Route("team")
 */
class TeamController extends Controller
{

	public function createAction(Request $request)
	{
            if (!$request->isXmlHttpRequest()) {
                    throw $this->createNotFoundException($this->get('translator')->trans('error.404'));
            }

            // Get doctrine
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:Team');

            $team = new Team();
            /* ............Create Team ..... */
            $response = $repository->save($team);
            if ($response['code'] == 0) {
                    $status = 200;
            }

            return new JsonResponse($response, $status);
	}

	public function editAction(Request $request, Team $team)
	{
            if (!$request->isXmlHttpRequest()) {
                    throw $this->createNotFoundException($this->get('translator')->trans('error.404'));
            }

            // Get doctrine
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:Team');

            /* ............Edit Team ..... */
            $response = $repository->save();
            if ($response['code'] == 0) {
                    $status = 200;
            }

            return new JsonResponse($response, $status);
	}

}


