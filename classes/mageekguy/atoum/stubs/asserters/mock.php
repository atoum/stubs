<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * This is the asserter for mocks.
 *
 *    <?php
 *    $mock = new \mock\MyClass;
 *
 *    $this
 *        ->mock($mock)
 *    ;
 *
 * Note: Refer to the documentation on *mock* for more information on
 *   how to create and manage mocks.
 *
 */
class mock extends adapter
{
    /**
     * @param string $function
     *
     * @return $this
     */
    public function receive($function) {}

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
