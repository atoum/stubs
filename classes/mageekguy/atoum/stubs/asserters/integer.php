<?php

namespace mageekguy\atoum\stubs\asserters;


class integer extends variable
{
    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-zero
     */
    public $isZero;

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-zero
     *
     * @return $this
     */
    public function isZero($failMessage = null) {}

    /**
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-greater-than
     *
     * @return $this
     */
    public function isGreaterThan($value, $failMessage = null) {}

    /**
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-greater-than-or-equal-to
     *
     * @return $this
     */
    public function isGreaterThanOrEqualTo($value, $failMessage = null) {}

    /**
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-less-than
     *
     * @return $this
     */
    public function isLessThan($value, $failMessage = null) {}

    /**
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-greater-than-or-equal-to
     *
     * @return $this
     */
    public function isLessThanOrEqualTo($value, $failMessage = null) {}
}
