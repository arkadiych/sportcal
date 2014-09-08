<?php

namespace MM\SportcalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        /**
         *  @var \MM\SportcalendarBundle\Service\Calendar
         */
        $sportcal = $this->get('sportcalendar');

        $header = array(
            $this->get('translator')->trans('dashboard.calendar.two_weeks_ago'),
            $this->get('translator')->trans('dashboard.calendar.week_ago'),
            $this->get('translator')->trans('dashboard.calendar.today')
        );

        $data = array(
            $sportcal->getExercisesForDay(new \DateTime('-14 day')),
            $sportcal->getExercisesForDay(new \DateTime('-7 day')),
            $sportcal->getExercisesForDay(new \DateTime('now'))
        );

        return $this->render('MMSportcalendarBundle:Dashboard:index.html.twig',
            array(
                'header' => $header,
                'data' => $data
            )
        );
    }
}
