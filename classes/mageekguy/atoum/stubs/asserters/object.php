<?php

namespace mageekguy\atoum\stubs\asserters;


class object extends variable
{
    /**
     * @param string $value
     * @param string $failMessage
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
     * @return $this
     */
    public function hasSize($size, $failMessage = null) {}

    /**
     * @param object $object
     * @param string $failMessage
     *
     * @return $this
     */
    public function isCloneOf($object, $failMessage = null) {}

    /**
     * @param string $failMessage
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
}
