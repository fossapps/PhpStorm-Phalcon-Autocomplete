<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Resultset;

use Phalcon\Cache\Adapter\AdapterInterface;
use Phalcon\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\Model\Resultset;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Storage\Serializer\SerializerInterface;

/**
 * Phalcon\Mvc\Model\Resultset\Simple
 *
 * Simple resultsets only contains a complete objects
 * This class builds every complete object as it is required
 */
class Simple extends Resultset
{

    protected $columnMap;


    protected $model;

    /**
     * @var bool
     */
    protected $keepSnapshots = false;


    /**
     * Phalcon\Mvc\Model\Resultset\Simple constructor
     *
     * @param array $columnMap
     * @param ModelInterface|Phalcon\Mvc\Model\Row $model
     * @param mixed $result
     * @param AdapterInterface $cache
     * @param bool $keepSnapshots
     */
    public function __construct($columnMap, $model, $result, AdapterInterface $cache = null, bool $keepSnapshots = null)
    {
    }

    /**
     * Returns current row in the resultset
     *
     * @return mixed
     */
    final public function current(): ?ModelInterface
    {
    }

    /**
     * Returns a complete resultset as an array, if the resultset has a big
     * number of rows it could consume more memory than currently it does.
     * Export the resultset to an array couldn't be faster with a large number
     * of records
     *
     * @param bool $renameColumns
     * @return array
     */
    public function toArray(bool $renameColumns = true): array
    {
    }

    /**
     * Serializing a resultset will dump all related rows into a big array
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Unserializing a resultset will allow to only works on the rows present in
     * the saved state
     *
     * @param mixed $data
     * @return void
     */
    public function unserialize($data)
    {
    }
}
