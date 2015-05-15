<?php

namespace mageekguy\atoum\stubs\asserters;


class phpFloat extends integer
{
    /**
     * @param float  $value
     * @param float  $epsilon
     * @param string $failMessage
     */
    public function isNearlyEqualTo($value, $epsilon = null, $failMessage = null) {}
}
