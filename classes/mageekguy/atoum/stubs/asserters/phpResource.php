<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class phpResource extends variable
{
    /**
     * @var phpString
     */
    public $type;

    /**
     * @param string $type
     * @param string $failMessage
     *
     * @return $this
     */
    public function isOfType($type, $failMessage = null) {}

    /**
     * @return phpString
     */
    public function type() {}
}
