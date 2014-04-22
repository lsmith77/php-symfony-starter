<?php

namespace Acme\DemoBundle\Controller;

use Prismic\Bundle\PrismicBundle\Controller\DefaultController as BaseDefaultController;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends BaseDefaultController
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        $ctx = $this->get('prismic.context');
        $docs = $this->get('doctrine_phpcr')->getConnection()->getRootNode();

        return array(
            'ctx' => $ctx,
            'docs' => $docs
        );
    }
}
