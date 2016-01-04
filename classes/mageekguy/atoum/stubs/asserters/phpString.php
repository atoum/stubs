<?php

namespace mageekguy\atoum\stubs\asserters;


class phpString extends variable
{
    /**
     * @var \mageekguy\atoum\stubs\asserters\integer
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#length
     */
    public $length;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-empty
     */
    public $isEmpty;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-not-empty
     */
    public $isNotEmpty;

    /**
     * @var castToArray
     */
    public $toArray;

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-empty
     *
     * @return $this
     */
    public function isEmpty($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-not-empty
     *
     * @return $this
     */
    public function isNotEmpty($failMessage = null) {}

    /**
     * @param string $pattern
     * @param string $failMessage
     *
     * @return $this
     */
    public function match($pattern, $failMessage = null) {}

    /**
     * @param string $pattern
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-matches
     *
     * @return $this
     */
    public function matches($pattern, $failMessage = null) {}

    /**
     * @param string $path
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-equal-to-contents-of-file
     *
     * @return $this
     */
    public function isEqualToContentsOfFile($path, $failMessage = null) {}

    /**
     * @param integer $length
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-has-length
     *
     * @return $this
     */
    public function hasLength($length, $failMessage = null) {}

    /**
     * @param integer $length
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-has-length-greater-than
     *
     * @return $this
     */
    public function hasLengthGreaterThan($length, $failMessage = null) {}

    /**
     * @param integer $length
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-has-length-less-than
     *
     * @return $this
     */
    public function hasLengthLessThan($length, $failMessage = null) {}

    /**
     * @param string $fragment
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-contains
     *
     * @return $this
     */
    public function contains($fragment, $failMessage = null) {}

    /**
     * @param string $fragment
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-not-contains
     *
     * @return $this
     */
    public function notContains($fragment, $failMessage = null) {}

    /**
     * @param string $fragment
     * @param string $failMessage
     *
     * @return $this
     */
    public function startWith($fragment, $failMessage = null) {}

    /**
     * @param string $fragment
     * @param string $failMessage
     *
     * @return $this
     */
    public function notStartWith($fragment, $failMessage = null) {}

    /**
     * @param string $fragment
     * @param string $failMessage
     *
     * @return $this
     */
    public function endWith($fragment, $failMessage = null) {}

    /**
     * @param string $fragment
     * @param string $failMessage
     *
     * @return $this
     */
    public function notEndWith($fragment, $failMessage = null) {}

    /**
     * @return castToArray
     */
    public function toArray() {}
}
