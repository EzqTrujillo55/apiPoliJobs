<?php


namespace App;


use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\Ofertas;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserEntitySubscriber implements EventSubscriberInterface
{
    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public static function getSubscribedEvents()
    {
        return[
            KernelEvents::VIEW => ['getAuthenticatedUser',EventPriorities::PRE_WRITE]

        ];

    }
    public function getAuthenticatedUser(GetResponseForControllerResultEvent $event)
    {
        $entity = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        $author = $this->tokenStorage->getToken()->getUser();
        if(!$entity instanceof Ofertas || Request::METHOD_POST !== $method){
            return;
        }
        $entity->setUser($author);

    }
}