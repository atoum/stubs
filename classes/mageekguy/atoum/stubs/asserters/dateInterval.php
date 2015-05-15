<?php

namespace mageekguy\atoum\stubs\asserters;


class dateInterval extends object
{
    /**
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @return $this
     */
    public function isGreaterThan(\dateInterval $interval, $failMessage = null) {}

    /**
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @return $this
     */
    public function isGreaterThanOrEqualTo(\dateInterval $interval, $failMessage = null) {}

    /**
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @return $this
     */
    public function isLessThan(\dateInterval $interval, $failMessage = null) {}

    /**
     * @param \dateInterval $interval
     * @param string        $failMessage
     *
     * @return $this
     */
    public function isLessThanOrEqualTo(\dateInterval $interval, $failMessage = null) {}

}
