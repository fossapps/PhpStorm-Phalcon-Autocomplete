<?php

namespace Phalcon\Annotations;

/**
 * Represents a collection of annotations. This class allows to traverse a group
 * of annotations easily
 *
 * ```php
 * // Traverse annotations
 * foreach ($classAnnotations as $annotation) {
 *     echo "Name=", $annotation->getName(), PHP_EOL;
 * }
 *
 * // Check if the annotations has a specific
 * var_dump($classAnnotations->has("Cacheable"));
 *
 * // Get an specific annotation in the collection
 * $annotation = $classAnnotations->get("Cacheable");
 * ```
 */
class Collection implements \Iterator, \Countable
{
    /**
     * @var array
     */
    protected $annotations;

    /**
     * @var int
     */
    protected $position = 0;


    /**
     * Phalcon\Annotations\Collection constructor
     *
     * @param array $reflectionData
     */
    public function __construct(array $reflectionData = array()) {}

    /**
     * Returns the number of annotations in the collection
     *
     * @return int
     */
    public function count(): int {}

    /**
     * Returns the current annotation in the iterator
     *
     * @return bool|\Phalcon\Annotations\Annotation
     */
    public function current() {}

    /**
     * Returns the first annotation that match a name
     *
     * @param string $name
     * @return \Phalcon\Annotations\Annotation
     */
    public function get(string $name): Annotation {}

    /**
     * Returns all the annotations that match a name
     *
     * @param string $name
     * @return array|\Phalcon\Annotations\Annotation[]
     */
    public function getAll(string $name): array {}

    /**
     * Returns the internal annotations as an array
     *
     * @return array|\Phalcon\Annotations\Annotation[]
     */
    public function getAnnotations(): array {}

    /**
     * Check if an annotation exists in a collection
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool {}

    /**
     * Returns the current position/key in the iterator
     *
     * @return int
     */
    public function key(): int {}

    /**
     * Moves the internal iteration pointer to the next position
     */
    public function next() {}

    /**
     * Rewinds the internal iterator
     */
    public function rewind() {}

    /**
     * Check if the current annotation in the iterator is valid
     *
     * @return bool
     */
    public function valid(): bool {}

}
