<?php
namespace AppBundle\EventListener;

use AppBundle\Event\AppEvent;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Listener responsible for listening to project actions

 */
class ProjectListener implements EventSubscriberInterface
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return array(
            AppEvent::PROJECT_CREATED =>'onCreationSuccess'
        );
    }


    /**
     * @param Event $event
     */
    public function onCreationSuccess(Event $event)
    {

        /**
         * anytime a project is created automatically redirect to dashboard/project the
         * members profile and view project detail an making it possible to update project repost od delete
         * project
         *
         */
            $url = $this->router->generate('homepagse');

            $event->setResponse(new RedirectResponse($url));

    }
}
