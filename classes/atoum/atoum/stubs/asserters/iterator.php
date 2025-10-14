<?php

namespace atoum\atoum\stubs\asserters;

class iterator extends phpObject
{
    /**
     * @var \atoum\atoum\stubs\asserters\integer
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
     * @return \atoum\atoum\stubs\asserters\integer
     */
    public function size() {}
}
