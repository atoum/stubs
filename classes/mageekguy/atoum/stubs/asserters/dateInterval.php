<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to the object DateInterval.
 *
 * If you try to test a value that's not a "DateInterval" (or a child
 * class) with this assertion it will fail.
 *
 */
class dateInterval extends object
{
    /**
     * "isGreaterThan" checks that the duration of the object  "DateInterval"
     * is longer to the duration of the given "DateInterval" object.
     *
     *    <?php
     *    $di = new DateInterval('P2D');
     *
     *    $this
     *        ->dateInterval($di)
     *            ->isGreaterThan(            // passes
     *                new DateInterval('P1D')
     *            )
     *            ->isGreaterThan(            // fails
     *                new DateInterval('P2D')
     *            )
     *    ;
     *
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isgreaterthan
     *
     * @return $this
     */
    public function isGreaterThan(\dateInterval $interval, $failMessage = null) {}

    /**
     * "isGreaterThanOrEqualTo" checks that the duration of the object
     * "DateInterval" is longer or equals to the duration of another object
     * "DateInterval".
     *
     *    <?php
     *    $di = new DateInterval('P2D');
     *
     *    $this
     *        ->dateInterval($di)
     *            ->isGreaterThanOrEqualTo(   // passes
     *                new DateInterval('P1D')
     *            )
     *            ->isGreaterThanOrEqualTo(   // passes
     *                new DateInterval('P2D')
     *            )
     *            ->isGreaterThanOrEqualTo(   // fails
     *                new DateInterval('P3D')
     *            )
     *    ;
     *
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isgreaterthanorequalto
     *
     * @return $this
     */
    public function isGreaterThanOrEqualTo(\dateInterval $interval, $failMessage = null) {}

    /**
     * "isLessThan" checks that the duration of the object  "DateInterval" is
     * shorter than the duration of the given "DateInterval" object.
     *
     *    <?php
     *    $di = new DateInterval('P1D');
     *
     *    $this
     *        ->dateInterval($di)
     *            ->isLessThan(               // passes
     *                new DateInterval('P2D')
     *            )
     *            ->isLessThan(               // fails
     *                new DateInterval('P1D')
     *            )
     *    ;
     *
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @llink http://docs.atoum.org/en/latest/asserters.html#islessthan
     *
     * @return $this
     */
    public function isLessThan(\dateInterval $interval, $failMessage = null) {}

    /**
     * "isLessThanOrEqualTo" checks that the duration of the object
     * "DateInterval" is shorter or equals to the duration of another object
     * "DateInterval".
     *
     *    <?php
     *    $di = new DateInterval('P2D');
     *
     *    $this
     *        ->dateInterval($di)
     *            ->isLessThanOrEqualTo(      // passes
     *                new DateInterval('P3D')
     *            )
     *            ->isLessThanOrEqualTo(      // passes
     *                new DateInterval('P2D')
     *            )
     *            ->isLessThanOrEqualTo(      // fails
     *                new DateInterval('P1D')
     *            )
     *    ;
     *
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#islessthanorequalto
     *
     * @return $this
     */
    public function isLessThanOrEqualTo(\dateInterval $interval, $failMessage = null) {}

}
