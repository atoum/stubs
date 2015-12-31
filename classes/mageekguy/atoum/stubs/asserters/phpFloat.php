<?php

namespace mageekguy\atoum\stubs\asserters;


class phpFloat extends integer
{
    /**
     * @param float  $value
     * @param float  $epsilon
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnearlyequalto
     *
     * @return $this
     */
    public function isNearlyEqualTo($value, $epsilon = null, $failMessage = null) {}
}
