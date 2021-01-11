<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Security\JWT\Token;

/**
 * Class Item
 */
class Item extends \Phalcon\Security\JWT\Token\AbstractItem
{

    /**
     * Item constructor.
     *
     * @param array  $payload
     * @param string $encoded
     */
    public function __construct(array $payload, string $encoded)
    {
    }

    /**
     * @param string     $name
     * @param mixed|null $defaultValue
     *
     * @return mixed|null
     */
    public function get(string $name, $defaultValue = null)
    {
    }

    /**
     * @return array
     */
    public function getPayload(): array
    {
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function has(string $name): bool
    {
    }
}
