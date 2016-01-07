<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class adapter
{
    use asserters;

    /**
     * "call" let you specify which method of the mock to check, his call
     * must be followed by a call to one of the following verification method
     * like atLeastOnce, once/twice/thrice, exactly, etc...
     *
     *    <?php
     *
     *    $this
     *        ->given($mock = new \mock\MyFirstClass)
     *        ->and($object = new MySecondClass($mock))
     *
     *        ->if($object->methodThatCallMyMethod())  // This will call myMethod from $mock
     *        ->then
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->once()
     *    ;
     *
     * @param string $function
     *
     * @return $this
     */
    public function call($function) {}

    /**
     * "before" checks if the method has been called before the one passed as
     * parameter.
     *
     *    <?php
     *    $this
     *        ->when($mock = new \mock\example)
     *        ->if(
     *            $mock->test(),
     *            $mock->test2()
     *        )
     *        ->mock($mock)
     *        ->call('test')
     *            ->before($this->mock($mock)->call('test2')->once())
     *            ->once() // passes
     *    ;
     *
     *    $this
     *        ->when($mock = new \mock\example)
     *        ->if(
     *            $mock->test2(),
     *            $mock->test()
     *        )
     *        ->mock($mock)
     *        ->call('test')
     *            ->before($this->mock($mock)->call('test2')->once())
     *            ->once() // fails
     *    ;
     *
     * @param adapter $call
     *
     * @return $this
     */
    public function before(self $call) {}

    /**
     * "after" checks if the method has been called after the one passed as
     * parameter.
     *
     *    <?php
     *    $this
     *        ->when($mock = new \mock\example)
     *        ->if(
     *            $mock->test2(),
     *            $mock->test()
     *        )
     *        ->mock($mock)
     *        ->call('test')
     *            ->after($this->mock($mock)->call('test2')->once())
     *            ->once() // passes
     *    ;
     *
     *    $this
     *        ->when($mock = new \mock\example)
     *        ->if(
     *            $mock->test(),
     *            $mock->test2()
     *        )
     *        ->mock($mock)
     *        ->call('test')
     *            ->after($this->mock($mock)->call('test2')->once())
     *            ->once() // fails
     *    ;
     *
     * @param adapter $call
     *
     * @return $this
     */
    public function after(self $call) {}

    /**
     * This asserters check that the tested method (see *call*) from the
     * tested mock has been called exactly:
     *
     * * once
     *
     * * twice
     *
     * * thrice
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->once()
     *            ->call('mySecondMethod')
     *                ->twice()
     *            ->call('myThirdMethod')
     *                ->thrice()
     *    ;
     *
     * Note: "once", "twice" and "thrice" are respectively equivalent to
     *   "exactly(1)", ":ref:`exactly <exactly-
     *   anchor>`(2)" and "exactly(3)".
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function once($failMessage = null) {}

    /**
     * This asserters check that the tested method (see *call*) from the
     * tested mock has been called exactly:
     *
     * * once
     *
     * * twice
     *
     * * thrice
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->once()
     *            ->call('mySecondMethod')
     *                ->twice()
     *            ->call('myThirdMethod')
     *                ->thrice()
     *    ;
     *
     * Note: "once", "twice" and "thrice" are respectively equivalent to
     *   "exactly(1)", ":ref:`exactly <exactly-
     *   anchor>`(2)" and "exactly(3)".
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function twice($failMessage = null) {}

    /**
     * This asserters check that the tested method (see *call*) from the
     * tested mock has been called exactly:
     *
     * * once
     *
     * * twice
     *
     * * thrice
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->once()
     *            ->call('mySecondMethod')
     *                ->twice()
     *            ->call('myThirdMethod')
     *                ->thrice()
     *    ;
     *
     * Note: "once", "twice" and "thrice" are respectively equivalent to
     *   "exactly(1)", ":ref:`exactly <exactly-
     *   anchor>`(2)" and "exactly(3)".
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function thrice($failMessage = null) {}

    /**
     * "atLeastOnce" check that the tested method (see *call*) from the mock
     * has been called at least once.
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->atLeastOnce()
     *    ;
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function atLeastOnce($failMessage = null) {}

    /**
     * "exactly" check that the tested method (see *call*) has been called a
     * specific number of times.
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->exactly(2)
     *    ;
     *
     * @param integer $number
     * @param string  $failMessage
     *
     * @return $this
     */
    public function exactly($number, $failMessage = null) {}

    /**
     * "never" check that the tested method (see *call*) has never been
     * called.
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->never()
     *    ;
     *
     * Note: "never" is equivalent to "exactly(0)".
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function never($failMessage = null) {}

    /**
     * "withArguments" let you specify the expected arguments that the tested
     * method should receive when called (see *call*).
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->withArguments('first', 'second')->once()
     *    ;
     *
     *      also want to check the type, use *withIdenticalArguments*.
     *
     * @param mixed ...$arguments
     *
     * @return $this
     */
    public function withArguments(...$arguments) {}

    /**
     * "withIdenticalArguments" let you specify the expected arguments that
     * tested method should receive when called (see *call*).
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->withIdenticalArguments('first', 'second')->once()
     *    ;
     *
     *         If you do not want to check the type, use *withArguments*.
     *
     * @param mixed ...$arguments
     *
     * @return $this
     */
    public function withIdenticalArguments(...$arguments) {}

    /**
     * "withAtLeastArguments" let you specify the minimum expected arguments
     * that tested method should receive when called (see *call*).
     *
     *    <?php
     *    $this
     *       ->if($mock = new \mock\example)
     *       ->and($mock->test('a', 'b'))
     *       ->mock($mock)
     *       ->call('test')
     *             ->withAtLeastArguments(array('a'))->once() //passes
     *             ->withAtLeastArguments(array('a', 'b'))->once() //passes
     *             ->withAtLeastArguments(array('c'))->once() //fails
     *    ;
     *
     *      If you also want to check the type, use
     *      *withAtLeastIdenticalArguments*.
     *
     * @param mixed[] $arguments
     *
     * @return $this
     */
    public function withAtLeastArguments(array $arguments) {}

    /**
     * "withAtLeastIdenticalArguments" let you specify the minimum expected
     * arguments that tested method should receive when called (see *call*).
     *
     *    <?php
     *    $this
     *        ->if($mock = new \mock\example)
     *        ->and($mock->test(1, 2))
     *        ->mock($mock)
     *            ->call('test')
     *            ->withAtLeastIdenticalArguments(array(1))->once() //passes
     *            ->withAtLeastIdenticalArguments(array(1, 2))->once() //passes
     *            ->withAtLeastIdenticalArguments(array('1'))->once() //fails
     *    ;
     *
     *         If you do not want to check the type, use *withIdenticalArguments*.
     *
     * @param mixed[] $arguments
     *
     * @return $this
     */
    public function withAtLeastIdenticalArguments(array $arguments) {}

    /**
     * "withAnyArguments" allow to check any argument, non-specified, when we
     * call the tested method (see *call*) of the tested mock.
     *
     * This method is useful to reset the arguments of the tested method,
     * like in the following example:
     *
     *    <?php
     *    $mock = new \mock\MyFirstClass;
     *
     *    $this
     *        ->object(new MySecondClass($mock))
     *
     *        ->mock($mock)
     *            ->call('myMethod')
     *                ->withArguments('first')     ->once()
     *                ->withArguments('second')    ->once()
     *                ->withAnyArguments()->exactly(2)
     *    ;
     *
     * @return $this
     */
    public function withAnyArguments() {}

    /**
     * "withoutAnyArgument" lets you indicate that the method should not
     * receive any argument when called (see *call*).
     *
     *    <?php
     *    $this
     *        ->when($mock = new \mock\example)
     *        ->if($mock->test())
     *        ->mock($mock)
     *            ->call('test')
     *                ->withoutAnyArgument()->once() // passes
     *        ->if($mock->test2('argument'))
     *        ->mock($mock)
     *            ->call('test2')
     *                ->withoutAnyArgument()->once() // fails
     *    ;
     *
     * Note: "withoutAnyArgument" is equivalent to call
     *   *withAtLeastArguments* with an empty array:
     *   "->withAtLeastArguments(array())".
     *
     * @return $this
     */
    public function withoutAnyArgument() {}
}
