<?php

namespace mageekguy\atoum\stubs\asserters;

use
    mageekguy\atoum,
    mageekguy\atoum\stubs\asserters
;

/**
 * It's the assertion dedicated to arrays.
 *
 * Note: "array" is a reserved word in PHP, it hasn't been possible to
 *   create an "array" assertion. It's therefore called "phpArray" and an
 *   alias "array" was created. S, you can meet both "->phpArray()" or
 *   "->array()".
 *
 * It's recommended to use only "->array()" in order to simplify the
 * reading of tests.
 *
 */
class phpArray extends variable implements \arrayAccess
{
    /**
     * "isEmpty" checks that an array is empty.
     *
     *    <?php
     *    $emptyArray    = array();
     *    $nonEmptyArray = array(null, null);
     *
     *    $this
     *        ->array($emptyArray)
     *            ->isEmpty()         // passes
     *
     *        ->array($nonEmptyArray)
     *            ->isEmpty()         // fails
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isempty
     */
    public $isEmpty;

    /**
     * "isNotEmpty" checks that an array is not empty.
     *
     *    <?php
     *    $emptyArray    = array();
     *    $nonEmptyArray = array(null, null);
     *
     *    $this
     *        ->array($emptyArray)
     *            ->isNotEmpty()      // fails
     *
     *        ->array($nonEmptyArray)
     *            ->isNotEmpty()      // passes
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnotempty
     */
    public $isNotEmpty;

    /**
     * "hasSize" checks the size of an array.
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *
     *    $this
     *        ->array($fibonacci)
     *            ->hasSize(7)        // passes
     *            ->hasSize(10)       // fails
     *    ;
     *
     * Note: "hasSize" is not recursive.
     *
     * @param integer $size
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hassize
     *
     * @return $this
     */
    public function hasSize($size, $failMessage = null) {}

    /**
     * "isEmpty" checks that an array is empty.
     *
     *    <?php
     *    $emptyArray    = array();
     *    $nonEmptyArray = array(null, null);
     *
     *    $this
     *        ->array($emptyArray)
     *            ->isEmpty()         // passes
     *
     *        ->array($nonEmptyArray)
     *            ->isEmpty()         // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isempty
     *
     * @return $this
     */
    public function isEmpty($failMessage = null) {}

    /**
     * "isNotEmpty" checks that an array is not empty.
     *
     *    <?php
     *    $emptyArray    = array();
     *    $nonEmptyArray = array(null, null);
     *
     *    $this
     *        ->array($emptyArray)
     *            ->isNotEmpty()      // fails
     *
     *        ->array($nonEmptyArray)
     *            ->isNotEmpty()      // passes
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isnotempty
     *
     * @return $this
     */
    public function isNotEmpty($failMessage = null) {}

    /**
     * "strictlyContains" checks that an array contains some data (same value
     * and same type).
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *
     *    $this
     *        ->array($fibonacci)
     *            ->strictlyContains('1')     // passes
     *            ->strictlyContains(1)       // fails
     *            ->strictlyContains('2')     // fails
     *            ->strictlyContains(2)       // passes
     *            ->strictlyContains(10)      // fails
     *    ;
     *
     * Note: "strictlyContains" doesn't search recursively.
     *
     *      to check the type, use *contains*.
     *
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#strictlycontains
     *
     * @return $this
     */
    public function strictlyContains($value, $failMessage = null) {}

    /**
     * "contains" check that array contains some data.
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *
     *    $this
     *        ->array($fibonacci)
     *            ->contains('1')     // succeed
     *            ->contains(1)       // succeed, but data type...
     *            ->contains('2')     // ... is not checked
     *            ->contains(10)      // failed
     *    ;
     *
     * Note: "contains" doesn't check recursively.
     *
     *      to check its type, use *strictlyContains*.
     *
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#contains
     *
     * @return $this
     */
    public function contains($value, $failMessage = null) {}

    /**
     * "strictlyNotContains" check that an array doesn't contains a data
     * (same value and same type).
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *
     *    $this
     *        ->array($fibonacci)
     *            ->strictlyNotContains(null)         // passes
     *            ->strictlyNotContains('1')          // fails
     *            ->strictlyNotContains(1)            // passes
     *            ->strictlyNotContains(10)           // passes
     *    ;
     *
     * Note: "strictlyNotContains" doesn't search recursively.
     *
     *      want to check the type, use *contains*.
     *
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#strictlynotcontains
     *
     * @return $this
     */
    public function strictlyNotContains($value, $failMessage = null) {}

    /**
     * "notContains" checks that an array doesn't contains the given data.
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *
     *    $this
     *        ->array($fibonacci)
     *            ->notContains(null)         // passes
     *            ->notContains(1)            // fails
     *            ->notContains(10)           // passes
     *    ;
     *
     * Note: "notContains" doesn't search recursively.
     *
     *      also to check its type, use *strictlyNotContains*.
     *
     * @param mixed  $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#notcontains
     *
     * @return $this
     */
    public function notContains($value, $failMessage = null) {}

    /**
     * "hasKeys" checks that an array contains all the given keys.
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *    $atoum     = array(
     *        'name'        => 'atoum',
     *        'owner'       => 'mageekguy',
     *    );
     *
     *    $this
     *        ->array($fibonacci)
     *            ->hasKeys(array(0, 2, 4))           // passes
     *            ->hasKeys(array('0', 2))            // passes
     *            ->hasKeys(array('4', 0, 3))         // passes
     *            ->hasKeys(array(0, 3, 10))          // fails
     *
     *        ->array($atoum)
     *            ->hasKeys(array('name', 'owner'))   // passes
     *            ->hasKeys(array('name', 'price'))   // fails
     *    ;
     *
     * Note: "hasKeys" doesn't search recursively.
     *
     * Warning: "hasKeys" doesn't test the type of keys.
     *
     * @param mixed[] $keys
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#haskeys
     *
     * @return $this
     */
    public function hasKeys(array $keys, $failMessage = null) {}

    /**
     * "notHasKeys" checks that an array doesn't contains any keys from the
     * given array.
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *    $atoum     = array(
     *        'name'        => 'atoum',
     *        'owner'       => 'mageekguy',
     *    );
     *
     *    $this
     *        ->array($fibonacci)
     *            ->notHasKeys(array(0, 2, 4))            // fails
     *            ->notHasKeys(array('0', 2))             // fails
     *            ->notHasKeys(array('4', 0, 3))          // fails
     *            ->notHasKeys(array(10, 11, 12))         // passes
     *
     *        ->array($atoum)
     *            ->notHasKeys(array('name', 'owner'))    // fails
     *            ->notHasKeys(array('foo', 'price'))     // passes
     *    ;
     *
     * Note: "notHasKeys" doesn't search recursively.
     *
     * Warning: "notHasKeys" doesn't test the type of keys.
     *
     * @param mixed[] $keys
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#nothaskeys
     *
     * @return $this
     */
    public function notHasKeys(array $keys, $failMessage = null) {}

    /**
     * "hasKey" check that the table contains a given key.
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *    $atoum     = array(
     *        'name'        => 'atoum',
     *        'owner'       => 'mageekguy',
     *    );
     *
     *    $this
     *        ->array($fibonacci)
     *            ->hasKey(0)         // passes
     *            ->hasKey(1)         // passes
     *            ->hasKey('1')       // passes
     *            ->hasKey(10)        // failed
     *
     *        ->array($atoum)
     *            ->hasKey('name')    // passes
     *            ->hasKey('price')   // fails
     *    ;
     *
     * Note: "hasKey" doesn't search recursively.
     *
     * Warning: "hasKey" doesn't test the type of keys.
     *
     * @param mixed  $key
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#haskey
     *
     * @return $this
     */
    public function hasKey($key, $failMessage = null) {}

    /**
     * "notHasKey" checks that an array doesn't contains a given key.
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *    $atoum     = array(
     *        'name'  => 'atoum',
     *        'owner' => 'mageekguy',
     *    );
     *
     *    $this
     *        ->array($fibonacci)
     *            ->notHasKey(0)          // fails
     *            ->notHasKey(1)          // fails
     *            ->notHasKey('1')        // fails
     *            ->notHasKey(10)         // passes
     *
     *        ->array($atoum)
     *            ->notHasKey('name')     // fails
     *            ->notHasKey('price')    // passes
     *    ;
     *
     * Note: "notHasKey" doesn't search recursively.
     *
     * Warning: "notHasKey" doesn't test the type of keys.
     *
     * @param mixed  $key
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#nothaskeys
     *
     * @return $this
     */
    public function notHasKey($key, $failMessage = null) {}

    /**
     * "containsValues" checks that an array contains all data in from the
     * given array.
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *
     *    $this
     *        ->array($array)
     *            ->containsValues(array(1, 2, 3))        // succeed
     *            ->containsValues(array('5', '8', '13')) // succeed
     *            ->containsValues(array(0, 1, 2))        // failed
     *    ;
     *
     * Note: "containsValues" doesn't search recursively.
     *
     *      also want to check their types, use *strictlyContainsValues*.
     *
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#containsvalues
     *
     * @return $this
     */
    public function containsValues(array $values, $failMessage = null) {}

    /**
     * "strictlyContainsValues" checks that an array contains all the given
     * data (same value and same type).
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *
     *    $this
     *        ->array($array)
     *            ->strictlyContainsValues(array('1', 2, '3'))    // passes
     *            ->strictlyContainsValues(array(1, 2, 3))        // fails
     *            ->strictlyContainsValues(array(5, '8', 13))     // passes
     *            ->strictlyContainsValues(array('5', '8', '13')) // fails
     *            ->strictlyContainsValues(array(0, '1', 2))      // fails
     *    ;
     *
     * Note: "strictlyContainsValue" doesn't search recursively.
     *
     *      don't want to check the types, use *containsValues*.
     *
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#strictlycontainsvalues
     *
     * @return $this
     */
    public function strictlyContainsValues(array $values, $failMessage = null) {}

    /**
     * "notContainsValues" checks that an array doesn't contains any data
     * from the given array.
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *
     *    $this
     *        ->array($array)
     *            ->notContainsValues(array(1, 4, 10))    // fails
     *            ->notContainsValues(array(4, 10, 34))   // passes
     *            ->notContainsValues(array(1, '2', 3))   // fails
     *    ;
     *
     * Note: "notContainsValues" doesn't search recursively.
     *
     *      also want to check their types, use *strictlyNotContainsValues*.
     *
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#notcontainsvalues
     *
     * @return $this
     */
    public function notContainsValues(array $values, $failMessage = null) {}

    /**
     * "strictlyNotContainsValues" checks that an array doesn't contains any
     * of the given data (same value and same type).
     *
     *    <?php
     *    $fibonacci = array('1', 2, '3', 5, '8', 13, '21');
     *
     *    $this
     *        ->array($array)
     *            ->strictlyNotContainsValues(array('1', 4, 10))  // fails
     *            ->strictlyNotContainsValues(array(1, 4, 10))    // passes
     *            ->strictlyNotContainsValues(array(4, 10, 34))   // passes
     *            ->strictlyNotContainsValues(array('1', 2, '3')) // fails
     *            ->strictlyNotContainsValues(array(1, '2', 3))   // passes
     *    ;
     *
     * Note: "strictlyNotContainsValues" doesn't search recursively.
     *
     *      don't want to check the types, use *notContainsValues*.
     *
     * @param mixed[] $values
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#strictlynotcontainsvalues
     *
     * @return $this
     */
    public function strictlyNotContainsValues(array $values, $failMessage = null) {}

    /**
     * @param mixed $offset
     *
     * @return boolean
     */
    public function offsetExists($offset) {}

    /**
     * @param mixed $offset
     *
     * @return atoum\asserter
     */
    public function offsetGet($offset) {}

    /**
     * @param mixed $offset
     * @param mixed $value
     *
     * @return void
     */
    public function offsetSet($offset, $value) {}

    /**
     * @param mixed $offset
     *
     * @return void
     */
    public function offsetUnset($offset) {}
}
