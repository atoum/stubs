<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to decimal numbers.
 *
 * If you try to test a variable that is not a decimal number with this
 * assertion, this will fail.
 *
 * Note: "null" is not a decimal number. Refer to the PHP manual to
 *   know what is_float considered or not as a float.
 *
 */
class phpFloat extends integer
{
    /**
     * "isNearlyEqualTo" checks that the float is approximatively equal to
     * the value it receives as an argument.
     *
     * Indeed, in computer science, decimal numbers are managed in a way that
     * does not allow for accurate comparisons without the use of specialized
     * tools. Try for example to run the following command:
     *
     *    $ php -r 'var_dump(1 - 0.97 === 0.03);'
     *    bool(false)
     *
     * The result should be "true".
     *
     * Note: For more information on this topics, read the PHP
     *   documentation on the float precision.
     *
     * This method is therefore seeking to reduce this problem.
     *
     *    <?php
     *    $float = 1 - 0.97;
     *
     *    $this
     *        ->float($float)
     *            ->isNearlyEqualTo(0.03) // passes
     *            ->isEqualTo(0.03)       // fails
     *    ;
     *
     * Note: For more information about the algorithm used, see the
     *   floating point guide.
     *
     * @param float  $value
     * @param float  $epsilon
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnearlyequalto
     *
     * @return $this
     */
    public function isNearlyEqualTo($value, $epsilon = null, $failMessage = null) {}
}
