<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to the object DateTime.
 *
 * If you try to test a value that's not a "DateTime" (or a child class)
 * with this assertion it will fail.
 *
 */
class dateTime extends object
{
    /**
     * @var static
     */
    public $isImmutable;

    /**
     * "hasTimezone" checks the timezone of the "DateTime" object.
     *
     *    <?php
     *    $dt = new DateTime();
     *
     *    $this
     *        ->dateTime($dt)
     *            ->hasTimezone('Europe/Paris')
     *    ;
     *
     * @param \dateTimezone $timezone
     * @param string         $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hastimezone
     *
     * @return $this
     */
    public function hasTimezone(\dateTimezone $timezone, $failMessage = null) {}

    /**
     * "hasYear" checks the year of the "DateTime" object.
     *
     *    <?php
     *    $dt = new DateTime('1981-02-13');
     *
     *    $this
     *        ->dateTime($dt)
     *            ->hasYear(1981)     // passes
     *    ;
     *
     * @param integer $year
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasyear
     *
     * @return $this
     */
    public function hasYear($year, $failMessage = null) {}

    /**
     * "hasMonth" checks the month part of objet "DateTime".
     *
     *    <?php
     *    $dt = new DateTime('1981-02-13');
     *
     *    $this
     *        ->dateTime($dt)
     *            ->hasMonth(2)       // passes
     *    ;
     *
     * @param integer $month
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasmonth
     *
     * @return $this
     */
    public function hasMonth($month, $failMessage = null) {}

    /**
     * "hasDay" checks the day of the "DateTime" object.
     *
     *    <?php
     *    $dt = new DateTime('1981-02-13');
     *
     *    $this
     *        ->dateTime($dt)
     *            ->hasDay(13)        // passes
     *    ;
     *
     * @param integer $day
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasday
     *
     * @return $this
     */
    public function hasDay($day, $failMessage = null) {}

    /**
     * "hasDate" checks the date part of object "DateTime".
     *
     *    <?php
     *    $dt = new DateTime('1981-02-13');
     *
     *    $this
     *        ->dateTime($dt)
     *            ->hasDate('1981', '02', '13')   // passes
     *            ->hasDate('1981', '2',  '13')   // passes
     *            ->hasDate(1981,   2,    13)     // passes
     *    ;
     *
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
     * "hasHours" checks the time of the objet "DateTime".
     *
     *    <?php
     *    $dt = new DateTime('01:02:03');
     *
     *    $this
     *        ->dateTime($dt)
     *            ->hasHours('01')    // passes
     *            ->hasHours('1')     // passes
     *            ->hasHours(1)       // passes
     *    ;
     *
     * @param integer $hours
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hashours
     *
     * @return $this
     */
    public function hasHours($hours, $failMessage = null) {}

    /**
     * "hasMinutes" checks the minutes part of the objet "DateTime".
     *
     *    <?php
     *    $dt = new DateTime('01:02:03');
     *
     *    $this
     *        ->dateTime($dt)
     *            ->hasMinutes('02')  // passes
     *            ->hasMinutes('2')   // passes
     *            ->hasMinutes(2)     // passes
     *    ;
     *
     * @param integer $minutes
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasminutes
     *
     * @return $this
     */
    public function hasMinutes($minutes, $failMessage = null) {}

    /**
     * "hasSeconds" checks the seconds of the "DateTime" object.
     *
     *    <?php
     *    $dt = new DateTime('01:02:03');
     *
     *    $this
     *        ->dateTime($dt)
     *            ->hasSeconds('03')    // passes
     *            ->hasSeconds('3')     // passes
     *            ->hasSeconds(3)       // passes
     *    ;
     *
     * @param integer $seconds
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasseconds
     *
     * @return $this
     */
    public function hasSeconds($seconds, $failMessage = null) {}

    /**
     * "hasTime" checks the time part of the objet "DateTime"
     *
     *    <?php
     *    $dt = new DateTime('01:02:03');
     *
     *    $this
     *        ->dateTime($dt)
     *            ->hasTime('01', '02', '03')     // passes
     *            ->hasTime('1',  '2',  '3')      // passes
     *            ->hasTime(1,    2,    3)        // passes
     *    ;
     *
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
     * "hasDateAndTime" checks the date and the hour of the objet "DateTime"
     *
     *    <?php
     *    $dt = new DateTime('1981-02-13 01:02:03');
     *
     *    $this
     *        ->dateTime($dt)
     *            // passes
     *            ->hasDateAndTime('1981', '02', '13', '01', '02', '03')
     *            // passes
     *            ->hasDateAndTime('1981', '2',  '13', '1',  '2',  '3')
     *            // passes
     *            ->hasDateAndTime(1981,   2,    13,   1,    2,    3)
     *    ;
     *
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

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isImmutable($failMessage = null) {}
}
