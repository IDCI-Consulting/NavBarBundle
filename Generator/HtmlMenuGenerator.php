<?php

/**
 * 
 * @author:  Gabriel BONDAZ <gabriel.bondaz@idci-consulting.fr>
 * @license: MIT
 *
 */

namespace IDCI\Bundle\NavBarBundle\Generator;

use Symfony\Bundle\TwigBundle\TwigEngine;

class HtmlMenuGenerator extends AbstractMenuGenerator
{
    protected $templating;

    /**
     * Constructor
     *
     * @param array $menu
     * @param TimedTwigEngine $templating
     */
    public function __construct($menu, TwigEngine $templating)
    {
        parent::__construct($menu);
        $this->templating = $templating;
    }

    /**
     * Get Template
     *
     * @return Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine
     */
    public function getTemplate()
    {
        return $this->templating;
    }

    /**
     * {inheritDoc}
     */
    public function generate()
    {
        return $this->getTemplate()->render(
            "IDCINavBarBundle:Generator:menu.html.twig",
            array('menu' => $this->getMenu())
        );
    }

    /**
     * {inheritDoc}
     */
    public function getContentType()
    {
        return 'text/html';
    }
}
