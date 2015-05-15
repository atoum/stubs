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
     * @return $this
     */
    public function wasCalled($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function wasNotCalled($failMessage = null) {}
}
