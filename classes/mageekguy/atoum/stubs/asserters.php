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
     * @return asserters\boolean
     */
    public function boolean($value) {}

    /**
     * @param mixed $value
     *
     * @return asserters\castToString
     */
    public function castToString($value) {}

    /**
     * @param mixed $value
     *
     * @return asserters\constant
     */
    public function constant($value) {}

    /**
     * @param \dateInterval $value
     *
     * @return asserters\dateInterval
     */
    public function dateInterval(\dateInterval $value) {}

    /**
     * @param \dateTime $value
     *
     * @return asserters\dateTime
     */
    public function dateTime(\dateTime $value) {}

    /**
     * @param string  $message
     * @param integer $type
     *
     * @return asserters\error
     */
    public function error($message = null, $type = null) {}

    /**
     * @param \exception|callable $value
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
     * @return asserters\hash
     */
    public function hash($value) {}

    /**
     * @param integer $value
     *
     * @return asserters\integer
     */
    public function integer($value) {}

    /**
     * @param atoum\mock\aggregator $value
     *
     * @return asserters\mock
     */
    public function mock($value) {}

    /**
     * @param string $value
     *
     * @return asserters\mysqlDateTime
     */
    public function mysqlDateTime($value) {}

    /**
     * @param object $value
     *
     * @return asserters\object
     */
    public function object($value) {}

    /**
     * @param string  $value
     * @param string  $charlist
     * @param boolean $checkType
     *
     * @return asserters\output
     */
    public function output($value = null, $charlist = null, $checkType = true) {}

    /**
     * @param array $value
     *
     * @return asserters\phpArray
     */
    public function phpArray(array $value) {}

    /**
     * @param string $value
     *
     * @return asserters\phpClass
     */
    public function phpClass($value) {}

    /**
     * @param float $value
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
     * @return asserters\phpString
     */
    public function phpString($value) {}

    /**
     * @param mixed $value
     *
     * @return asserters\sizeOf
     */
    public function sizeOf($value) {}

    /**
     * @return asserters\stream
     */
    public function stream($value) {}

    /**
     * @param string $value
     *
     * @return asserters\utf8String
     */
    public function utf8String($value) {}

    /**
     * @param mixed $value
     *
     * @return asserters\variable
     */
    public function variable($value) {}
}
