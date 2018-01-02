<?php

namespace AppBundle\Controller;

use AppBundle\Service\Contact\Contact;
use AppBundle\Service\Contact\Location;
use AppBundle\Service\Contact\ContactFaq;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contact as ContactEntity;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * @Route("/contact")
 */
class ContactController extends Controller
{
    /**
     * @Route("/", name="contact_index")
     */
    public function indexAction(Location $location, Contact $contact, ContactFaq $faqs)
    {
        return $this->render('contact/index.html.twig', [
            'location' => $location->getLocation(),
            'contactList' => $contact->getContactInformation(),
            'faqs' => $faqs->getFAQS()
        ]);
    }

    /**
     * @Route("/form", name="contact_form")
     */
    public function form(Location $location, Contact $contactInformation, Request $request)
    {
        $contact = new ContactEntity();
        $form = $this->createFormBuilder($contact)
            ->add('fullName', TextType::class)
            ->add('email', EmailType::Class)
            ->add('telephoneNumber', TextType::class)
            ->add('subject', ChoiceType::class, [
                'choices' => [
                    'Subject 1' => 'Subject 1',
                    'Subject 2' => 'Subject 2',
                    'Subject 3' => 'Subject 3',
                    'Others' => 'Others',
                ]])
            ->add('message', TextareaType::class)
            ->add('send', SubmitType::class, ['label' => 'Enviar'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // TODO: Send email

            return $this->render('contact/greeting.html.twig');
        }

        return $this->render('contact/form.html.twig', [
            'location' => $location->getLocation(),
            'contactList' => $contactInformation->getContactInformation(),
            'form' => $form->createView(),
        ]);
    }
}
