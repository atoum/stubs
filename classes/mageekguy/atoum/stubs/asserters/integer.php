<?php

namespace mageekguy\atoum\stubs\asserters;


class integer extends variable
{
    /**
     * @var static
     */
    public $isZero;

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isZero($failMessage = null) {}

    /**
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @return $this
     */
    public function isGreaterThan($value, $failMessage = null) {}

    /**
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @return $this
     */
    public function isGreaterThanOrEqualTo($value, $failMessage = null) {}

    /**
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @return $this
     */
    public function isLessThan($value, $failMessage = null) {}

    /**
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @return $this
     */
    public function isLessThanOrEqualTo($value, $failMessage = null) {}
}
