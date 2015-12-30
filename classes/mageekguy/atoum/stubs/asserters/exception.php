<?php

namespace mageekguy\atoum\stubs\asserters;


class exception extends object
{
    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasdefaultcode
     */
    public $hasDefaultCode;

    /**
     * @var phpString
     */
    public $message;

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasdefaultcode
     *
     * @return $this
     */
    public function hasDefaultCode($failMessage = null) {}

    /**
     * @param integer $code
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hascode
     *
     * @return $this
     */
    public function hasCode($code, $failMessage = null) {}

    /**
     * @param string $message
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasmessage
     *
     * @return $this
     */
    public function hasMessage($message, $failMessage = null) {}

    /**
     * @param \exception $exception
     * @param string     $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasnestedexception
     *
     * @return $this
     */
    public function hasNestedException(\exception $exception = null, $failMessage = null) {}
}
