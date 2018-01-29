<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum;

class generator extends iterator
{
	/**
     * "yields" is used to ease the test on values yielded by the generator.
     * Each time you will call "->yields" the next value of the generator
     * will be retrived. You will be able to use any other asserter on this
     * value (for example "class", "string" or "variable").
     *
     * Example:
     *
     *    <?php
     *    $generator = function() {
     *        for ($i=0; $i<3; $i++) {
     *            yield ($i+1);
     *        }
     *    };
     *    $this
     *        ->generator($generator())
     *            ->yields->variable->isEqualTo(1)
     *            ->yields->variable->isEqualTo(2)
     *            ->yields->integer->isEqualTo(3)
     *    ;
     *
     * In this example we create a generator that yields 3 values : 1, 2 and
     * 3. Then we yield each value and run an assertion on this value to
     * check it's type and value. In the first two yields we use the
     * "variable" asserter and only check the value. In the third yields call
     * we add a check on the type of the value by using the integer asserter
     * (any asserter could by used on this value) before checking the value.
     *
	 * @var asserter
	 */
	public $yields;

	/**
     * Note: This assertion will only work on PHP >= 7.0.
     *
     * Since the version 7.0 of PHP, generators can return a value that can
     * retrived via a call to the "->getReturn()" method. When you call
     * "->returns" on the generator asserter, atoum will retrive the value
     * from a call on the "->getReturn()" method on the asserter. Then you
     * will be able to use any other asserter on this value just like the
     * "yields" assertion.
     *
     * Example:
     *
     *    <?php
     *    $generator = function() {
     *        for ($i=0; $i<3; $i++) {
     *            yield ($i+1);
     *        }
     *        return 42;
     *    };
     *    $this
     *        ->generator($generator())
     *            ->yields->variable->isEqualTo(1)
     *            ->yields->variable->isEqualTo(2)
     *            ->yields->integer->isEqualTo(3)
     *            ->returns->integer->isEqualTo(42)
     *    ;
     *
     * In this example we run some checks on all the yielded values. Then, we
     * checks that the generator returns a integer with a value of 42 (just
     * like a call to the yields assertion, you can use any asserter to check
     * to returned value).
     *
	 * @return asserter
     */
	public $returns;

	/**
	 * @return asserter
	 */
	public function getReturn() {}
}
