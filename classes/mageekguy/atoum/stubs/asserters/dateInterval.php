<?php

namespace mageekguy\atoum\stubs\asserters;


class dateInterval extends object
{
    /**
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isgreaterthan
     *
     * @return $this
     */
    public function isGreaterThan(\dateInterval $interval, $failMessage = null) {}

    /**
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isgreaterthanorequalto
     *
     * @return $this
     */
    public function isGreaterThanOrEqualTo(\dateInterval $interval, $failMessage = null) {}

    /**
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @llink http://docs.atoum.org/en/latest/asserters.html#islessthan
     *
     * @return $this
     */
    public function isLessThan(\dateInterval $interval, $failMessage = null) {}

    /**
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#islessthanorequalto
     *
     * @return $this
     */
    public function isLessThanOrEqualTo(\dateInterval $interval, $failMessage = null) {}

}
