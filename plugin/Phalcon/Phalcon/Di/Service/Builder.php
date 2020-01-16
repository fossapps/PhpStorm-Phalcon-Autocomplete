<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di\Service;

use Phalcon\Di\DiInterface;
use Phalcon\Di\Exception;

/**
 * Phalcon\Di\Service\Builder
 *
 * This class builds instances based on complex definitions
 */
class Builder
{

    /**
     * Builds a service using a complex service definition
     *
     * @param array $parameters
     * @param DiInterface $container
     * @param array $definition
     *@return mixed
     */
    public function build(DiInterface $container, array $definition, $parameters = null)
    {
    }

    /**
     * Resolves a constructor/call parameter
     *
     * @param DiInterface $container
     * @param int $position
     * @param array $argument
     *@return mixed
     */
    private function buildParameter(DiInterface $container, int $position, array $argument)
    {
    }

    /**
     * Resolves an array of parameters
     *
     * @param DiInterface $container
     * @param array $arguments
     * @return array
     */
    private function buildParameters(DiInterface $container, array $arguments): array
    {
    }
}
