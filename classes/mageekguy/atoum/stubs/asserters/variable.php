<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class variable
{
    use asserters;

    /**
     * @var static
     */
    public $isNotFalse;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnotnull
     */
    public $isNotNull;

    /**
     * @var static
     */
    public $isNotTrue;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnull
     */
    public $isNull;

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-equal-to
     *
     * @return $this
     */
    public function isEqualTo($value, $failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-not-equal-to
     *
     * @return $this
     */
    public function isNotEqualTo($value, $failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-identical-to
     *
     * @return $this
     */
    public function isIdenticalTo($value, $failMessage = null) {}

    /**
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-not-identical-to
     *
     * @return $this
     */
    public function isNotIdenticalTo($value, $failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnull
     *
     * @return $this
     */
    public function isNull($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnotnull
     *
     * @return $this
     */
    public function isNotNull($failMessage = null) {}

    /**
     * @param mixed  & $value
     * @param string $failMessage
     *
     * @return $this
     */
    public function isReferenceTo(& $reference, $failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isNotFalse($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isNotTrue($failMessage = null) {}

    /**
     * @param callable $value
     * @param string   $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-callable
     *
     * @return $this
     */
    public function isCallable(callable $value, $failMessage = null) {}

    /**
     * @param callable $value
     * @param string   $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-not-callable
     *
     * @return $this
     */
    public function isNotCallable(callable $value, $failMessage = null) {}
}
