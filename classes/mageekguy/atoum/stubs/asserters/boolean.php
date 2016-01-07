<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * This is the assertion dedicated to the booleans.
 *
 * If you try to test a variable that is not a boolean with this
 * assertion, this will fail.
 *
 * Note: "null" is not a boolean. Report the the PHP manual to know
 *   what is_bool considers or not to be a boolean.
 *
 */
class boolean extends variable
{
    /**
     * "isFalse" check that the boolean is strictly equal to "false".
     *
     *    <?php
     *    $true  = true;
     *    $false = false;
     *
     *    $this
     *        ->boolean($true)
     *            ->isFalse()     // fails
     *
     *        ->boolean($false)
     *            ->isFalse()     // succeed
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isfalse
     */
    public $isFalse;

    /**
     * "isTrue" checks that the boolean is strictly equal to "true".
     *
     *    <?php
     *    $true  = true;
     *    $false = false;
     *
     *    $this
     *        ->boolean($true)
     *            ->isTrue()      // succeed
     *
     *        ->boolean($false)
     *            ->isTrue()      // fails
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#istrue
     */
    public $isTrue;

    /**
     * "isTrue" checks that the boolean is strictly equal to "true".
     *
     *    <?php
     *    $true  = true;
     *    $false = false;
     *
     *    $this
     *        ->boolean($true)
     *            ->isTrue()      // succeed
     *
     *        ->boolean($false)
     *            ->isTrue()      // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#istrue
     *
     * @return $this
     */
    public function isTrue($failMessage = null) {}

    /**
     * "isFalse" check that the boolean is strictly equal to "false".
     *
     *    <?php
     *    $true  = true;
     *    $false = false;
     *
     *    $this
     *        ->boolean($true)
     *            ->isFalse()     // fails
     *
     *        ->boolean($false)
     *            ->isFalse()     // succeed
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isfalse
     *
     * @return $this
     */
    public function isFalse($failMessage = null) {}
}
