<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class iterator extends object
{
    /**
     * @var \mageekguy\atoum\stubs\asserters\integer
     */
    public $size;

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
     * @return \mageekguy\atoum\stubs\asserters\integer
     */
    public function size() {}
}
