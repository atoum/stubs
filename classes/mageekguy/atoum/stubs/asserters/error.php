<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class error
{
    use asserters;

    /**
     * @var static
     */
    public $exists;

    /**
     * @var static
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
     * return $this
     */
    public function exists() {}

    /**
     * return $this
     */
    public function notExists() {}

    /**
     * @param integer $type
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
