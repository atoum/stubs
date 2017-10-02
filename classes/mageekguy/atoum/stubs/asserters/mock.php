<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to mocks.
 *
 *    <?php
 *    $mock = new \mock\MyClass;
 *
 *    $this
 *        ->mock($mock)
 *    ;
 *
 * Note: Refer to the documentation of mock for more information on how
 *   to create and manage mocks.
 *
 * @method call receive($function)
 */
class mock extends adapter
{
    /**
     * "wasCalled" checks that at least one method of the mock has been
     * called at least once.
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->wasCalled()
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#wascalled
     *
     * @return $this
     */
    public function wasCalled($failMessage = null) {}

    /**
     * "wasNotCalled" checks that no method of the mock has been called.
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->wasNotCalled()
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#wasnotcalled
     *
     * @return $this
     */
    public function wasNotCalled($failMessage = null) {}
}
