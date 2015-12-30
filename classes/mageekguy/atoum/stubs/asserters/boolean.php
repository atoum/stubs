<?php

namespace mageekguy\atoum\stubs\asserters;


class boolean extends variable
{
    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isfalse
     */
    public $isFalse;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#istrue
     */
    public $isTrue;

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#istrue
     *
     * @return $this
     */
    public function isTrue($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isfalse
     *
     * @return $this
     */
    public function isFalse($failMessage = null) {}
}
