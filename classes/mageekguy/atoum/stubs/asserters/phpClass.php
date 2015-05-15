<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

/**
 * @method $this extends($class)
 * @method $this implements($interface)
 */
class phpClass
{
    use asserters;

    /**
     * @var static
     */
    public $isAbstract;

    /**
     * @var static
     */
    public $isFinal;

    /**
     * @var static
     */
    public $hasNoParent;

    /**
     * @param string $parent
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasParent($parent, $failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasNoParent($failMessage = null) {}

    /**
     * @param string $parent
     * @param string $failMessage
     *
     * @return $this
     */
    public function isSubClassOf($parent, $failMessage = null) {}

    /**
     * @param string $interface
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasInterface($interface, $failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isAbstract($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isFinal($failMessage = null) {}

    /**
     * @param string $method
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasMethod($method, $failMessage = null) {}

    /**
     * @param string $constant
     * @param string $failMessage
     *
     * @return $this
     */
    public function hasConstant($constant, $failMessage = null) {}
}
