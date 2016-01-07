<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to integers.
 *
 * If you try to test a variable that is not an integer with this
 * assertion, this will fail.
 *
 * Note: "null" isn't an integer. Refer to the PHP's manual  is_int to
 *   known what's considered as an integer or not.
 *
 */
class integer extends variable
{
    /**
     * "isZero" checks that the integer is equal to 0.
     *
     *    <?php
     *    $zero    = 0;
     *    $notZero = -1;
     *
     *    $this
     *        ->integer($zero)
     *            ->isZero()          // passes
     *
     *        ->integer($notZero)
     *            ->isZero()          // fails
     *    ;
     *
     * Note: "isZero" is equivalent to "isEqualTo(0)".
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-zero
     */
    public $isZero;

    /**
     * "isZero" checks that the integer is equal to 0.
     *
     *    <?php
     *    $zero    = 0;
     *    $notZero = -1;
     *
     *    $this
     *        ->integer($zero)
     *            ->isZero()          // passes
     *
     *        ->integer($notZero)
     *            ->isZero()          // fails
     *    ;
     *
     * Note: "isZero" is equivalent to "isEqualTo(0)".
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-zero
     *
     * @return $this
     */
    public function isZero($failMessage = null) {}

    /**
     * "isGreaterThan" checks that the integer is strictly higher than the
     * given one.
     *
     *    <?php
     *    $zero = 0;
     *
     *    $this
     *        ->integer($zero)
     *            ->isGreaterThan(-1)     // passes
     *            ->isGreaterThan('-1')   // fails because "-1"
     *                                    // isn't an integer
     *            ->isGreaterThan(0)      // fails
     *    ;
     *
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-greater-than
     *
     * @return $this
     */
    public function isGreaterThan($value, $failMessage = null) {}

    /**
     * "isGreaterThanOrEqualTo" checks that an integer is higher or equal to
     * a given one.
     *
     *    <?php
     *    $zero = 0;
     *
     *    $this
     *        ->integer($zero)
     *            ->isGreaterThanOrEqualTo(-1)    // passes
     *            ->isGreaterThanOrEqualTo(0)     // passes
     *            ->isGreaterThanOrEqualTo('-1')  // fails because "-1"
     *                                            // isn't an integer
     *    ;
     *
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-greater-than-or-equal-to
     *
     * @return $this
     */
    public function isGreaterThanOrEqualTo($value, $failMessage = null) {}

    /**
     * "isLessThan" checks that the integer is strictly lower than a given
     * one.
     *
     *    <?php
     *    $zero = 0;
     *
     *    $this
     *        ->integer($zero)
     *            ->isLessThan(10)    // passes
     *            ->isLessThan('10')  // fails because"10" isn't an integer
     *            ->isLessThan(0)     // fails
     *    ;
     *
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-less-than
     *
     * @return $this
     */
    public function isLessThan($value, $failMessage = null) {}

    /**
     * "isLessThanOrEqualTo" checks that an integer is lower or equal to a
     * given one.
     *
     *    <?php
     *    $zero = 0;
     *
     *    $this
     *        ->integer($zero)
     *            ->isLessThanOrEqualTo(10)       // passes
     *            ->isLessThanOrEqualTo(0)        // passes
     *            ->isLessThanOrEqualTo('10')     // fails because "10"
     *                                            // isn't an integer
     *    ;
     *
     * @param integer|float $value
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer-is-greater-than-or-equal-to
     *
     * @return $this
     */
    public function isLessThanOrEqualTo($value, $failMessage = null) {}
}
