<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class constant
{
    use asserters;

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @return $this
     */
    public function isEqualTo($value, $failMessage = null) {}
}
