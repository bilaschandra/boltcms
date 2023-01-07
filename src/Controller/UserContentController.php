<?php

namespace App;

use Symfony\Component\Routing\Annotation\Route;
use Bolt\Controller\Backend\BackendZoneInterface;
use Symfony\Component\HttpFoundation\Response;

class UserContentController extends TwigAwareController implements BackendZoneInterface
{
    /**
     * @Route("/content-user/", name="app_content_user")
     */
    public function viewEdits(): Response
    {
        // content_user.html.twig is a custom file 
        // that needs to be located in the `templates`
        // folder in the root of your project.
        return $this->render('content_user.html.twig', [
            'title' => 'User content'
        ]);
    }
}
