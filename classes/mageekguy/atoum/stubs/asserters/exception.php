<?php

namespace mageekguy\atoum\stubs\asserters;


class exception extends object
{
    /**
     * @var static
     */
    public $hasDefaultCode;

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasDefaultCode($failMessage = null) {}

    /**
     * @param integer $code
     * @param string  $failMessage
     *
     * @return $this
     */
    public function hasCode($code, $failMessage = null) {}

    /**
     * @param string $message
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasMessage($message, $failMessage = null) {}

    /**
     * @param \exception $exception
     * @param string     $failMessage
     *
     * @return $this
     */
    public function hasNestedException(\exception $exception = null, $failMessage = null) {}
}
