<?php

namespace mageekguy\atoum\stubs;

use mageekguy\atoum;

/**
 * @method asserters\output array(array $value)
 * @method asserters\phpClass class($value)
 * @method asserters\phpFloat float($value)
 * @method asserters\phpFunction function($value)
 * @method asserters\phpString string($value)
 */
trait asserters
{
    /**
     * @var asserters\testedClass
     */
    public $testedClass;

    /**
     * @param atoum\test\adapter $value
     *
     * @return asserters\adapter
     */
    public function adapter(atoum\test\adapter $value) {}

    /**
     * @param bool $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#boolean
     *
     * @return asserters\boolean
     */
    public function boolean($value) {}

    /**
     * @param mixed $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#casttostring
     *
     * @return asserters\castToString
     */
    public function castToString($value) {}

    /**
     * @param mixed $value
     *
     * @return asserters\castToArray
     */
    public function castToArray($value) {}

    /**
     * @param mixed $value
     *
     * @return asserters\constant
     */
    public function constant($value) {}

    /**
     * @param \dateInterval $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#dateinterval
     *
     * @return asserters\dateInterval
     */
    public function dateInterval(\dateInterval $value) {}

    /**
     * @param \dateTime|\dateTimeInterface $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#datetime
     *
     * @return asserters\dateTime
     */
    public function dateTime(\dateTime $value) {}

    /**
     * @param string  $message
     * @param integer $type
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#error
     *
     * @return asserters\error
     */
    public function error($message = null, $type = null) {}

    /**
     * @param \exception|callable $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#exception
     *
     * @return asserters\exception
     */
    public function exception($value) {}

    /**
     * @param string $value
     *
     * @return asserters\extension
     */
    public function extension($value) {}

    /**
     * @param string $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hash
     *
     * @return asserters\hash
     */
    public function hash($value) {}

    /**
     * @param integer $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#integer
     *
     * @return asserters\integer
     */
    public function integer($value) {}

    /**
     * @param atoum\mock\aggregator $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#mock
     *
     * @return asserters\mock
     */
    public function mock($value) {}

    /**
     * @param string $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#mysqldatetime
     *
     * @return asserters\mysqlDateTime
     */
    public function mysqlDateTime($value) {}

    /**
     * @param object $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#object
     *
     * @return asserters\object
     */
    public function object($value) {}

    /**
     * @param string  $value
     * @param string  $charlist
     * @param boolean $checkType
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#output
     *
     * @return asserters\output
     */
    public function output($value = null, $charlist = null, $checkType = true) {}

    /**
     * @param array $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#array
     *
     * @return asserters\phpArray
     */
    public function phpArray(array $value) {}

    /**
     * @param string $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#class
     *
     * @return asserters\phpClass
     */
    public function phpClass($value) {}

    /**
     * @param float $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#float
     *
     * @return asserters\phpfloat
     */
    public function phpfloat($value) {}

    /**
     * @return asserters\phpFunction
     */
    public function phpFunction($value) {}

    /**
     * @param string $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string
     *
     * @return asserters\phpString
     */
    public function phpString($value) {}

    /**
     * @param mixed $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#sizeof
     *
     * @return asserters\sizeOf
     */
    public function sizeOf($value) {}

    /**
     * @link http://docs.atoum.org/en/latest/asserters.html#stream
     *
     * @return asserters\stream
     */
    public function stream($value) {}

    /**
     * @param string $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#utf8string
     *
     * @return asserters\utf8String
     */
    public function utf8String($value) {}

    /**
     * @param mixed $value
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#variable
     *
     * @return asserters\variable
     */
    public function variable($value) {}

    /**
     * @param \iterator $value
     *
     * @return asserters\iterator
     */
    public function iterator(\iterator $value) {}

    /**
     * @param resource $value
     *
     * @return asserters\phpResource
     */
    public function phpResource($value) {}
}
