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
 * Class Element
 */
class Element extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * Produce a tag.
     *
     * @param string $tag
     * @param string $text
     * @param array  $attributes
     * @param bool   $raw
     *
     * @return string
     * @throws Exception
     */
    public function __invoke(string $tag, string $text, array $attributes = array(), bool $raw = false): string
    {
    }
}
