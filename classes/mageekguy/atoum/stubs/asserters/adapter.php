<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class adapter
{
    use asserters;

    /**
     * @param string $function
     *
     * @return $this
     */
    public function call($function) {}

    /**
     * @param adapter $call
     *
     * @return $this
     */
    public function before(self $call) {}

    /**
     * @param adapter $call
     *
     * @return $this
     */
    public function after(self $call) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function once($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function twice($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function thrice($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function atLeastOnce($failMessage = null) {}

    /**
     * @param integer $number
     * @param string  $failMessage
     *
     * @return $this
     */
    public function exactly($number, $failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function never($failMessage = null) {}

    /**
     * @param mixed ...$arguments
     *
     * @return $this
     */
    public function withArguments(...$arguments) {}

    /**
     * @param mixed ...$arguments
     *
     * @return $this
     */
    public function withIdenticalArguments(...$arguments) {}

    /**
     * @param mixed[] $arguments
     *
     * @return $this
     */
    public function withAtLeastArguments(array $arguments) {}

    /**
     * @param mixed[] $arguments
     *
     * @return $this
     */
    public function withAtLeastIdenticalArguments(array $arguments) {}

    /**
     * @return $this
     */
    public function withAnyArguments() {}

    /**
     * @return $this
     */
    public function withoutAnyArgument() {}
}
