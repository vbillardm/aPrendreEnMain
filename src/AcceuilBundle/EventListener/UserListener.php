<?php
namespace AcceuilBundle\EventListener;

use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityManager;

class UserListener implements EventSubscriberInterface
{
    protected $um;
    protected $em;

    public function __construct(UserManager $um, EntityManager $em)
    {
        $this->um = $um;
        $this->em = $em;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_CONFIRM => array('onRegistrationSuccess'),
        );
    }

    public function onRegistrationSuccess(FilterUserResponseEvent $event)
    {
        $user = $event->getUser();
        $user->setEnabled(1);
        $user->addRole('ROLE_MEMBRE');
        $this->um->updateUser($user);
        $this->em->flush();
    }
}
