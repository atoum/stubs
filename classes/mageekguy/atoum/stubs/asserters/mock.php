<?php

namespace mageekguy\atoum\stubs\asserters;


class mock extends adapter
{
    /**
     * @param string $function
     *
     * @return $this
     */
    public function receive($function) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#wascalled
     *
     * @return $this
     */
    public function wasCalled($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#wasnotcalled
     *
     * @return $this
     */
    public function wasNotCalled($failMessage = null) {}
}
