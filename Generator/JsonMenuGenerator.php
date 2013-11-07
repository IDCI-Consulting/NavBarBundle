<?php

/**
 * 
 * @author:  Gabriel BONDAZ <gabriel.bondaz@idci-consulting.fr>
 * @license: MIT
 *
 */

namespace IDCI\Bundle\NavBarBundle\Generator;

class JsonMenuGenerator extends AbstractMenuGenerator
{
    /**
     * {inheritDoc}
     */
    public function generate()
    {
        return json_encode($this->getMenu());
    }

    /**
     * {inheritDoc}
     */
    public function getContentType()
    {
        return 'application/json';
    }
}
