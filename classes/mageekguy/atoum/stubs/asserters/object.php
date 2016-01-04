<?php

namespace mageekguy\atoum\stubs\asserters;


class object extends variable
{
    /**
     * @var castToArray
     */
    public $toArray;

    /**
     * @param string $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#object-is-instance-of
     *
     * @return $this
     */
    public function isInstanceOf($value, $failMessage = null) {}

    /**
     * @param string $value
     * @param string $failMessage
     *
     * @return $this
     */
    public function isNotInstanceOf($value, $failMessage = null) {}

    /**
     * @param integer $size
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#object-has-size
     *
     * @return $this
     */
    public function hasSize($size, $failMessage = null) {}

    /**
     * @param object $object
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#object-is-clone-of
     *
     * @return $this
     */
    public function isCloneOf($object, $failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#object-is-empty
     *
     * @return $this
     */
    public function isEmpty($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isTestedInstance($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isNotTestedInstance($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isInstanceOfTestedClass($failMessage = null) {}

    /**
     * @return castToString
     */
    public function toString() {}

    /**
     * @return castToArray
     */
    public function toArray() {}
}
