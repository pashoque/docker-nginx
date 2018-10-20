<?php

namespace App\Controller;

use App\Entity\Activity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ActivityController extends AbstractController
{
    /**
     * @Route("/activity.{_format}", name="activity")
     * @param Request $request
     */
    public function createAction(Request $request)
    {
        $name = $request->get('name');
        $description = $request->get('description');
        $patient = $request->get('patient_id');
        $doctor = $request->get('doctor_id');

        $activity = new Activity();
        $entityManager = $this->getDoctrine()->getManager();

        $prevActivity = $entityManager->getRepository('Activity')->findOneBy([], ['id' => 'DESC']);


    }
}
