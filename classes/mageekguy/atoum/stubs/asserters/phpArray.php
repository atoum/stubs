<?php

namespace mageekguy\atoum\stubs\asserters;

use
    mageekguy\atoum,
    mageekguy\atoum\stubs\asserters
;

class phpArray extends variable implements \arrayAccess
{
    /**
     * @var static
     */
    public $isEmpty;

    /**
     * @var static
     */
    public $isNotEmpty;

    /**
     * @param integer $size
     * @param string  $failMessage
     *
     * @return $this
     */
    public function hasSize($size, $failMessage = null) {}

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
    public function isNotEmpty($failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @return $this
     */
    public function strictlyContains($value, $failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @return $this
     */
    public function contains($value, $failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @return $this
     */
    public function strictlyNotContains($value, $failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @return $this
     */
    public function notContains($value, $failMessage = null) {}

    /**
     * @param mixed[] $keys
     * @param string  $failMessage
     *
     * @return $this
     */
    public function hasKeys(array $keys, $failMessage = null) {}

    /**
     * @param mixed[] $keys
     * @param string  $failMessage
     *
     * @return $this
     */
    public function notHasKeys(array $keys, $failMessage = null) {}

    /**
     * @param mixed  $key
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasKey($key, $failMessage = null) {}

    /**
     * @param mixed  $key
     * @param string $failMessage
     *
     * @return $this
     */
    public function notHasKey($key, $failMessage = null) {}

    /**
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @return $this
     */
    public function containsValues(array $values, $failMessage = null) {}

    /**
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @return $this
     */
    public function strictlyContainsValues(array $values, $failMessage = null) {}

    /**
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @return $this
     */
    public function notContainsValues(array $values, $failMessage = null) {}

    /**
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @return $this
     */
    public function strictlyNotContainsValues(array $values, $failMessage = null) {}

    /**
     * @param mixed $offset
     *
     * @return boolean
     */
    public function offsetExists($offset) {}

    /**
     * @param mixed $offset
     *
     * @return atoum\asserter
     */
    public function offsetGet($offset) {}

    /**
     * @param mixed $offset
     * @param mixed $value
     *
     * @return void
     */
    public function offsetSet($offset, $value) {}

    /**
     * @param mixed $offset
     *
     * @return void
     */
    public function offsetUnset($offset) {}
}
