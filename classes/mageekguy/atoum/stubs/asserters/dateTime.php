<?php

namespace mageekguy\atoum\stubs\asserters;


class dateTime extends object
{
    /**
     * @param \dateTimezone $timezone
     * @param string         $failMessage
     *
     * @return $this
     */
    public function hasTimezone(\dateTimezone $timezone, $failMessage = null) {}

    /**
     * @param integer $year
     * @param string  $failMessage
     *
     * @return $this
     */
    public function hasYear($year, $failMessage = null) {}

    /**
     * @param integer $month
     * @param string  $failMessage
     *
     * @return $this
     */
    public function hasMonth($month, $failMessage = null) {}

    /**
     * @param integer $day
     * @param string  $failMessage
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
     * @return $this
     */
    public function hasDate($year, $month, $day, $failMessage = null) {}

    /**
     * @param integer $hours
     * @param string  $failMessage
     *
     * @return $this
     */
    public function hasHours($hours, $failMessage = null) {}

    /**
     * @param integer $minutes
     * @param string  $failMessage
     *
     * @return $this
     */
    public function hasMinutes($minutes, $failMessage = null) {}

    /**
     * @param integer $seconds
     * @param string  $failMessage
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
     * @return $this
     */
    public function hasDateAndTime($year, $month, $day, $hours, $minutes, $seconds, $failMessage = null) {}
}
