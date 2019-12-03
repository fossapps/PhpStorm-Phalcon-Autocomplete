<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Formatter;

/**
 * Phalcon\Logger\Formatter\Json
 *
 * Formats messages using JSON encoding
 */
class Json extends \Phalcon\Logger\Formatter\AbstractFormatter
{
    /**
     * Default date format
     *
     * @var string
     */
    protected $dateFormat;


    /**
     * Default date format
     *
     * @return string
     */
    public function getDateFormat(): string
    {
    }

    /**
     * Default date format
     *
     * @param string $dateFormat
     */
    public function setDateFormat(string $dateFormat)
    {
    }

    /**
     * Phalcon\Logger\Formatter\Json construct
     *
     * @param string $dateFormat
     */
    public function __construct(string $dateFormat = 'D, d M y H:i:s O')
    {
    }

    /**
     * Applies a format to a message before sent it to the internal log
     *
     * @param \Phalcon\Logger\Item $item
     * @return string
     */
    public function format(\Phalcon\Logger\Item $item): string
    {
    }
}
