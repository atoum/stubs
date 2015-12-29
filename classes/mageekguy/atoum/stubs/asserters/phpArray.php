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
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isempty
     */
    public $isEmpty;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnotempty
     */
    public $isNotEmpty;

    /**
     * @param integer $size
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hassize
     *
     * @return $this
     */
    public function hasSize($size, $failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isempty
     *
     * @return $this
     */
    public function isEmpty($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnotempty
     *
     * @return $this
     */
    public function isNotEmpty($failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#strictlycontains
     *
     * @return $this
     */
    public function strictlyContains($value, $failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#contains
     *
     * @return $this
     */
    public function contains($value, $failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#strictlynotcontains
     *
     * @return $this
     */
    public function strictlyNotContains($value, $failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#notcontains
     *
     * @return $this
     */
    public function notContains($value, $failMessage = null) {}

    /**
     * @param mixed[] $keys
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#haskeys
     *
     * @return $this
     */
    public function hasKeys(array $keys, $failMessage = null) {}

    /**
     * @param mixed[] $keys
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#nothaskeys
     *
     * @return $this
     */
    public function notHasKeys(array $keys, $failMessage = null) {}

    /**
     * @param mixed  $key
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#haskey
     *
     * @return $this
     */
    public function hasKey($key, $failMessage = null) {}

    /**
     * @param mixed  $key
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#nothaskeys
     *
     * @return $this
     */
    public function notHasKey($key, $failMessage = null) {}

    /**
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#containsvalues
     *
     * @return $this
     */
    public function containsValues(array $values, $failMessage = null) {}

    /**
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#strictlycontainsvalues
     *
     * @return $this
     */
    public function strictlyContainsValues(array $values, $failMessage = null) {}

    /**
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#notcontainsvalues
     *
     * @return $this
     */
    public function notContainsValues(array $values, $failMessage = null) {}

    /**
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#strictlynotcontainsvalues
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
