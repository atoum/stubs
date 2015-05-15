<?php

namespace mageekguy\atoum\stubs\asserters;


class phpString extends variable
{
    /**
     * @var \mageekguy\atoum\stubs\asserters\integer
     */
    public $length;

    /**
     * @var static
     */
    public $isEmpty;

    /**
     * @var static
     */
    public $isNotEmpty;

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
     * @return $this
     */
    public function matches($pattern, $failMessage = null) {}

    /**
     * @param string $path
     * @param string $failMessage
     *
     * @return $this
     */
    public function isEqualToContentsOfFile($path, $failMessage = null) {}

    /**
     * @param integer $length
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasLength($length, $failMessage = null) {}

    /**
     * @param integer $length
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasLengthGreaterThan($length, $failMessage = null) {}

    /**
     * @param integer $length
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasLengthLessThan($length, $failMessage = null) {}

    /**
     * @param string $fragment
     * @param string $failMessage
     *
     * @return $this
     */
    public function contains($fragment, $failMessage = null) {}

    /**
     * @param string $fragment
     * @param string $failMessage
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
}
