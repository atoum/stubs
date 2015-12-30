<?php

namespace mageekguy\atoum\stubs\asserters;


class dateTime extends object
{
    /**
     * @param \dateTimezone $timezone
     * @param string         $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hastimezone
     *
     * @return $this
     */
    public function hasTimezone(\dateTimezone $timezone, $failMessage = null) {}

    /**
     * @param integer $year
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasyear
     *
     * @return $this
     */
    public function hasYear($year, $failMessage = null) {}

    /**
     * @param integer $month
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasmonth
     *
     * @return $this
     */
    public function hasMonth($month, $failMessage = null) {}

    /**
     * @param integer $day
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasday
     *
     * @return $this
     */
    public function hasDay($day, $failMessage = null) {}

    /**
     * @param integer $year
     * @param integer $month
     * @param integer $day
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasdate
     *
     * @return $this
     */
    public function hasDate($year, $month, $day, $failMessage = null) {}

    /**
     * @param integer $hours
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hashours
     *
     * @return $this
     */
    public function hasHours($hours, $failMessage = null) {}

    /**
     * @param integer $minutes
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasminutes
     *
     * @return $this
     */
    public function hasMinutes($minutes, $failMessage = null) {}

    /**
     * @param integer $seconds
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasseconds
     *
     * @return $this
     */
    public function hasSeconds($seconds, $failMessage = null) {}

    /**
     * @param integer $hours
     * @param integer $minutes
     * @param integer $seconds
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hastime
     *
     * @return $this
     */
    public function hasTime($hours, $minutes, $seconds, $failMessage = null) {}

    /**
     * @param integer $year
     * @param integer $month
     * @param integer $day
     * @param integer $hours
     * @param integer $minutes
     * @param integer $seconds
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasdateandtime
     *
     * @return $this
     */
    public function hasDateAndTime($year, $month, $day, $hours, $minutes, $seconds, $failMessage = null) {}
}
