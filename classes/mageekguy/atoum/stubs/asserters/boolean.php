<?php

namespace mageekguy\atoum\stubs\asserters;


class boolean extends variable
{
    /**
     * @var static
     */
    public $isFalse;

    /**
     * @var static
     */
    public $isTrue;

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isTrue($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isFalse($failMessage = null) {}
}
