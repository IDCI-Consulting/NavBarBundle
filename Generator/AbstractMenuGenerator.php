<?php

/**
 * 
 * @author:  Gabriel BONDAZ <gabriel.bondaz@idci-consulting.fr>
 * @license: MIT
 *
 */

namespace IDCI\Bundle\NavBarBundle\Generator;

abstract class AbstractMenuGenerator
{
    protected $menu;

    /**
     * Constructor
     *
     * @param array $menu
     */
    public function __construct($menu)
    {
        $this->menu = $menu;
    }

    /**
     * Get Menu
     *
     * @return array
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Generate the menu based on configuration in a given format
     *
     * @param string $format
     */
    abstract public function generate();

    /**
     * Get content type
     *
     * @return string
     */
    abstract public function getContentType();
}
