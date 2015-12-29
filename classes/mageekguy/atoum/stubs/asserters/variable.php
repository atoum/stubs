<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

/**
 * It's the basic assertion of all variables. It contains the necessary
 * tests for any type of variable.
 *
 */
class variable
{
    use asserters;

    /**
     * "isNotFalse" check that the variable is strictly not equal to "false".
     *
     *    <?php
     *    $true  = true;
     *    $false = false;
     *    $this
     *        ->variable($false)
     *            ->isNotFalse()     // fails
     *
     *        ->variable($true)
     *            ->isNotFalse()     // succeed
     *    ;
     *
     * @var static
     */
    public $isNotFalse;

    /**
     * "isNotNull" checks that the variable is not null.
     *
     *    <?php
     *    $emptyString = '';
     *    $null        = null;
     *
     *    $this
     *        ->variable($emptyString)
     *            ->isNotNull()           // passes (it's empty but not null)
     *
     *        ->variable($null)
     *            ->isNotNull()           // fails
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnotnull
     */
    public $isNotNull;

    /**
     * "isNotTrue" check that the variable is strictly not equal to "true".
     *
     *    <?php
     *    $true  = true;
     *    $false = false;
     *    $this
     *        ->variable($true)
     *            ->isNotTrue()     // fails
     *
     *        ->variable($false)
     *            ->isNotTrue()     // succeed
     *    ;
     *
     * @var static
     */
    public $isNotTrue;

    /**
     * "isNull" checks that the variable is null.
     *
     *    <?php
     *    $emptyString = '';
     *    $null        = null;
     *
     *    $this
     *        ->variable($emptyString)
     *            ->isNull()              // fails
     *                                    // (it's empty but not null)
     *
     *        ->variable($null)
     *            ->isNull()              // passes
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnull
     */
    public $isNull;

    /**
     * "isEqualTo" verifies that the variable is equal to a given data.
     *
     *    <?php
     *    $a = 'a';
     *
     *    $this
     *        ->variable($a)
     *            ->isEqualTo('a')    // passes
     *    ;
     *
     *      also to check the type, use *isIdenticalTo*.
     *
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-equal-to
     *
     * @return $this
     */
    public function isEqualTo($value, $failMessage = null) {}

    /**
     * "isNotEqualTo" checks that the variable is not the same value the the
     * given one.
     *
     *    <?php
     *    $a       = 'a';
     *    $aString = '1';
     *
     *    $this
     *        ->variable($a)
     *            ->isNotEqualTo('b')     // passes
     *            ->isNotEqualTo('a')     // fails
     *
     *        ->variable($aString)
     *            ->isNotEqualTo($1)      // fails
     *    ;
     *
     *      want also to check the type, use *isNotIdenticalTo*.
     *
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-not-equal-to
     *
     * @return $this
     */
    public function isNotEqualTo($value, $failMessage = null) {}

    /**
     * "isIdenticalTo" checks that the variable has the same value and the
     * same type than the given data. Inthe case of an object,
     * "isIdenticalTo" checks that the data is referencing on the same
     * instance.
     *
     *    <?php
     *    $a = '1';
     *
     *    $this
     *        ->variable($a)
     *            ->isIdenticalTo(1)          // fails
     *    ;
     *
     *    $stdClass1 = new \StdClass();
     *    $stdClass2 = new \StdClass();
     *    $stdClass3 = $stdClass1;
     *
     *    $this
     *        ->variable($stdClass1)
     *            ->isIdenticalTo(stdClass3)  // passes
     *            ->isIdenticalTo(stdClass2)  // fails
     *    ;
     *
     *      want its type, use *isEqualTo*.
     *
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-identical-to
     *
     * @return $this
     */
    public function isIdenticalTo($value, $failMessage = null) {}

    /**
     * "isNotIdenticalTo" checks that the variable hasn't the same type nor
     * the same value than the given one.
     *
     * Inthe case of an object, "isNotIdenticalTo" checks that the data isn't
     * referencing on the same instance.
     *
     *    <?php
     *    $a = '1';
     *
     *    $this
     *        ->variable($a)
     *            ->isNotIdenticalTo(1)           // passes
     *    ;
     *
     *    $stdClass1 = new \StdClass();
     *    $stdClass2 = new \StdClass();
     *    $stdClass3 = $stdClass1;
     *
     *    $this
     *        ->variable($stdClass1)
     *            ->isNotIdenticalTo(stdClass2)   // passes
     *            ->isNotIdenticalTo(stdClass3)   // fails
     *    ;
     *
     *      doesn't want to check its type, use *isNotEqualTo*.
     *
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-not-identical-to
     *
     * @return $this
     */
    public function isNotIdenticalTo($value, $failMessage = null) {}

    /**
     * "isNull" checks that the variable is null.
     *
     *    <?php
     *    $emptyString = '';
     *    $null        = null;
     *
     *    $this
     *        ->variable($emptyString)
     *            ->isNull()              // fails
     *                                    // (it's empty but not null)
     *
     *        ->variable($null)
     *            ->isNull()              // passes
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnull
     *
     * @return $this
     */
    public function isNull($failMessage = null) {}

    /**
     * "isNotNull" checks that the variable is not null.
     *
     *    <?php
     *    $emptyString = '';
     *    $null        = null;
     *
     *    $this
     *        ->variable($emptyString)
     *            ->isNotNull()           // passes (it's empty but not null)
     *
     *        ->variable($null)
     *            ->isNotNull()           // fails
     *    ;
     *
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
     * "isNotFalse" check that the variable is strictly not equal to "false".
     *
     *    <?php
     *    $true  = true;
     *    $false = false;
     *    $this
     *        ->variable($false)
     *            ->isNotFalse()     // fails
     *
     *        ->variable($true)
     *            ->isNotFalse()     // succeed
     *    ;
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function isNotFalse($failMessage = null) {}

    /**
     * "isNotTrue" check that the variable is strictly not equal to "true".
     *
     *    <?php
     *    $true  = true;
     *    $false = false;
     *    $this
     *        ->variable($true)
     *            ->isNotTrue()     // fails
     *
     *        ->variable($false)
     *            ->isNotTrue()     // succeed
     *    ;
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function isNotTrue($failMessage = null) {}

    /**
     * "isCallable" verifies that the variable can be called as a function.
     *
     *    <?php
     *    $f = function() {
     *        // code
     *    };
     *
     *    $this
     *        ->variable($f)
     *            ->isCallable()  // succeed
     *
     *        ->variable('\Vendor\Project\foobar')
     *            ->isCallable()
     *
     *        ->variable(array('\Vendor\Project\Foo', 'bar'))
     *            ->isCallable()
     *
     *        ->variable('\Vendor\Project\Foo::bar')
     *            ->isCallable()
     *    ;
     *
     * @param callable $value
     * @param string   $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-callable
     *
     * @return $this
     */
    public function isCallable(callable $value, $failMessage = null) {}

    /**
     * "isNotCallable" checks that the variable can't be called like a
     * function.
     *
     *    <?php
     *    $f = function() {
     *        // code
     *    };
     *    $int    = 1;
     *    $string = 'nonExistingMethod';
     *
     *    $this
     *        ->variable($f)
     *            ->isNotCallable()   // fails
     *
     *        ->variable($int)
     *            ->isNotCallable()   // passes
     *
     *        ->variable($string)
     *            ->isNotCallable()   // passes
     *
     *        ->variable(new StdClass)
     *            ->isNotCallable()   // passes
     *    ;
     *
     * @param callable $value
     * @param string   $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable-is-not-callable
     *
     * @return $this
     */
    public function isNotCallable(callable $value, $failMessage = null) {}
}
