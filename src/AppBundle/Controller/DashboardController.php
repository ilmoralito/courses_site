<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/admin")
 */
class DashboardController extends Controller
{
    /**
     * @Route("/", name="dashboard_index")
     */
    public function indexAction()
    {
        return $this->render('admin/dashboard/index.html.twig');
    }
}
