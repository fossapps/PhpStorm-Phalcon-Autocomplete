<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Html\Exception;

/**
 * Class Img
 */
class Img extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * Produce a <img> tag.
     *
     * @param string $src
     * @param array  $attributes
     *
     * @return string
     * @throws Exception
     */
    public function __invoke(string $src, array $attributes = array()): string
    {
    }
}
