<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

/**
 * Class Close
 */
class Close extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * Produce a `</...>` tag.
     *
     * @param string $tag
     * @param bool   $raw
     *
     * @return string
     */
    public function __invoke(string $tag, bool $raw = false): string
    {
    }
}
