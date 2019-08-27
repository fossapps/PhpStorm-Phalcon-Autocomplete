<?php

namespace Phalcon\Storage\Serializer;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
abstract class AbstractSerializer implements \Phalcon\Storage\Serializer\SerializerInterface
{
    /**
     * @var mixed
     */
    protected $data = null;


    /**
     * @return mixed
     */
    public function getData() {}

    /**
     * @param mixed $data
     */
    public function setData($data) {}

    /**
     * Constructor
     *
     * @param mixed $data
     */
    public function __construct($data = null) {}

    /**
     * If this returns true, then the data returns back as is
     *
     * @param mixed $data
     * @return bool
     */
    protected function isSerializable($data): bool {}

}