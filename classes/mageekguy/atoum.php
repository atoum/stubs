<?php

namespace mageekguy;

use
    mageekguy,
    mageekguy\atoum\stubs,
    mageekguy\atoum\stubs\asserters,
    mageekguy\atoum\test,
    mageekguy\atoum\php,
    mageekguy\atoum\mock
;

/**
 * @method $this and(...$mixed)
 * @method $this as($alias)
 * @method $this if(...$mixed)
 * @method $this use($target)
 */
class atoum extends mageekguy\atoum\test
{
    use stubs\asserters;

    /**
     * @var static
     */
    public $and;

    /**
     * @var static
     */
    public $assert;

    /**
     * @var test\assertion\aliaser
     */
    public $define;

    /**
     * @var \exception
     */
    public $exception;

    /**
     * @var php\mocker
     */
    public $function;

    /**
     * @var static
     */
    public $given;

    /**
     * @var static
     */
    public $if;

    /**
     * @var object
     */
    public $newInstance;

    /**
     * @var object
     */
    public $newTestedInstance;

    /**
     * @var asserters\testedClass
     */
    public $testedClass;

    /**
     * @var object
     */
    public $testedInstance;

    /**
     * @var static
     */
    public $then;

    /**
     * @param mock\aggregator $mock
     *
     * @return mock\controller
     */
    public function ƒ(mock\aggregator $mock) {}

    /**
     * @param string $case
     *
     * @return $this
     */
    public function assert($case = null) {}

    /**
     * @param mock\aggregator $mock
     *
     * @return mock\controller
     */
    public function calling(mock\aggregator $mock) {}

    /**
     * @param mixed ...$mixed
     *
     * @return $this
     */
    public function define(...$mixed) {}

    /**
     * @param ...$mixed
     *
     * @return $this
     */
    public function dump(...$mixed) {}

    /**
     * @param mixed $mixed
     *
     * @return $this
     */
    public function dumpOnFailure($mixed) {}

    /**
     * @param \closure $callback
     *
     * @return $this
     */
    public function executeOnFailure(\closure $callback) {}

    /**
     * @param string $class
     *
     * @return $this
     */
    public function from($class) {}

    /**
     * @param mixed ...$mixed
     *
     * @return $this
     */
    public function given(...$mixed) {}

    /**
     * @param mixed ...$mixed
     *
     * @return $this
     */
    public function let(...$mixed) {}

    /**
     * @param string $class
     * @param string $mockNamespace
     * @param string $mockClass
     *
     * @return $this
     */
    public function mockClass($class, $mockNamespace = null, $mockClass = null) {}

    /**
     * @param mixed ...$mixed
     *
     * @return mock\generator
     */
    public function mockGenerator() {}

    /**
     * @param string $mockNamespace
     * @param string $mockClass
     *
     * @return $this
     */
    public function mockTestedClass($mockNamespace = null, $mockClass = null) {}

    /**
     * @param mixed ...$arguments
     *
     * @return object
     */
    public function newTestedInstance(...$arguments) {}

    /**
     * @param mixed ...$arguments
     *
     * @return object
     */
    public function newInstance(...$arguments) {}

    /**
     * @throws test\exceptions\stop
     *
     * @return $this
     */
    public function stop() {}

    /**
     * @param mixed ...$mixed
     *
     * @return $this
     */
    public function then(...$mixed) {}

    /**
     * @param \closure|mixed $mixed
     *
     * @return $this
     */
    public function when($mixed) {}

    /**
     * @param test\adapter $adapter
     *
     * @return asserters\adapter
     */
    public function adapter(test\adapter $adapter) {}

    /**
     * @param string $class
     * @param string $mockNamespace
     * @param string $mockClass
     * @param array  $constructorArguments
     *
     * @return object
     */
    public function newMockInstance($class, $mockNamespace = null, $mockClass = null, array $constructorArguments = null) {}
}
