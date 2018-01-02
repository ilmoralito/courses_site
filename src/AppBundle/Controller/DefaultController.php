<?php

namespace AppBundle\Controller;

use AppBundle\Service\Course\Course;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, Course $course)
    {
        return $this->render('default/index.html.twig', [
            'courseList' => $course->getCourseList(),
        ]);
    }

    /**
     * @Route("show/{slug}", name="show_course")
     */
    public function showAction(Course $course, $slug)
    {
        $course = $course->getCourse($slug);

        return $this->render('default/show.html.twig', ['course' => $course]);
    }

    /**
     * @Route("show/{slug}/faqs", name="show_course_faqs")
     */
    public function faqsAction(Course $course, $slug)
    {
        $c = $course->getCourse($slug);
        $faqs = $course->getCourseFAQS($slug);

        return $this->render('default/faqs.html.twig', ['course' => $c, 'faqs' => $faqs]);
    }

    /**
     * @Route("show/{slug}/instructors", name="show_course_instructors")
     */
    public function instructorsAction(Course $course, $slug)
    {
        $c = $course->getCourse($slug);
        $instructors = $course->getCourseFacilitators($slug);

        return $this->render('default/instructors.html.twig', ['course' => $c, 'instructors' => $instructors]);
    }

    /**
     * @Route("show/{slug}/thematics", name="show_course_thematics")
     */
    public function thematicsAction(Course $course, $slug)
    {
        $c = $course->getCourse($slug);
        $thematics = $course->getCourseThematics($slug);

        return $this->render('default/thematics.html.twig', ['course' => $c, 'thematics' => $thematics]);
    }

    /**
     * @Route("subscription", name="subscription")
     */
    public function subscriptionAction()
    {
        $form = $this->createFormBuilder(null)
            ->add('fullName', TextType::class)
            ->add('email', EmailType::class)
            ->add('send', SubmitType::class, ['label' => 'Enviar'])
            ->getForm();

        return $this->render('default/subscription.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {

    }
}
