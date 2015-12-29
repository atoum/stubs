<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class error
{
    use asserters;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#exists
     */
    public $exists;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#notexists
     */
    public $notExists;

    /**
     * @var static
     */
    public $withAnyType;

    /**
     * @var static
     */
    public $withAnyMessage;

    /**
     * @link http://docs.atoum.org/en/latest/asserters.html#exists
     *
     * return $this
     */
    public function exists() {}

    /**
     * @link http://docs.atoum.org/en/latest/asserters.html#notexists
     *
     * return $this
     */
    public function notExists() {}

    /**
     * @param integer $type
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#withtype
     *
     * return $this
     */
    public function withType($type) {}

    /**
     * return $this
     */
    public function withAnyType() {}

    /**
     * @param string $message
     *
     * @return $this
     */
    public function withMessage($message) {}

    /**
     * @param string $pattern
     *
     * @return $this
     */
    public function withPattern($pattern) {}

    /**
     * @return $this
     */
    public function withAnyMessage() {}
}
