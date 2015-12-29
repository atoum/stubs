<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to the strings.
 *
 */
class phpString extends variable
{
    /**
     * "length" allows you to get an asserter of type *integer* that contains
     * the string's size.
     *
     *    <?php
     *    $string = 'atoum'
     *
     *    $this
     *        ->string($string)
     *            ->length
     *                ->isGreaterThanOrEqualTo(5)
     *    ;
     *
     * @var \mageekguy\atoum\stubs\asserters\integer
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#length
     */
    public $length;

    /**
     * "isEmpty" checks that a string is empty.
     *
     *    <?php
     *    $emptyString    = '';
     *    $nonEmptyString = 'atoum';
     *
     *    $this
     *        ->string($emptyString)
     *            ->isEmpty()             // passes
     *
     *        ->string($nonEmptyString)
     *            ->isEmpty()             // fails
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-empty
     */
    public $isEmpty;

    /**
     * "isNotEmpty" checks that the string is not empty.
     *
     *    <?php
     *    $emptyString    = '';
     *    $nonEmptyString = 'atoum';
     *
     *    $this
     *        ->string($emptyString)
     *            ->isNotEmpty()          // fails
     *
     *        ->string($nonEmptyString)
     *            ->isNotEmpty()          // passes
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-not-empty
     */
    public $isNotEmpty;

    /**
     * @var castToArray
     */
    public $toArray;

    /**
     * "isEmpty" checks that a string is empty.
     *
     *    <?php
     *    $emptyString    = '';
     *    $nonEmptyString = 'atoum';
     *
     *    $this
     *        ->string($emptyString)
     *            ->isEmpty()             // passes
     *
     *        ->string($nonEmptyString)
     *            ->isEmpty()             // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-empty
     *
     * @return $this
     */
    public function isEmpty($failMessage = null) {}

    /**
     * "isNotEmpty" checks that the string is not empty.
     *
     *    <?php
     *    $emptyString    = '';
     *    $nonEmptyString = 'atoum';
     *
     *    $this
     *        ->string($emptyString)
     *            ->isNotEmpty()          // fails
     *
     *        ->string($nonEmptyString)
     *            ->isNotEmpty()          // passes
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-not-empty
     *
     * @return $this
     */
    public function isNotEmpty($failMessage = null) {}

    /**
     * Hint: "match" is an alias of the "matches" method. For more
     *   information, refer to the documentation of  *string::matches*
     *
     * @param string $pattern
     * @param string $failMessage
     *
     * @return $this
     */
    public function match($pattern, $failMessage = null) {}

    /**
     * "matches" checks that a regular expression match the string.
     *
     *    <?php
     *    $phone = '0102030405';
     *    $vdm   = "Today at 57 years, my father got a tatoot of a Unicorn on his shoulder. VDM";
     *
     *    $this
     *        ->string($phone)
     *            ->matches('#^0[1-9]\d{8}$#')
     *
     *        ->string($vdm)
     *            ->matches("#^Today.*VDM$#")
     *    ;
     *
     * @param string $pattern
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-matches
     *
     * @return $this
     */
    public function matches($pattern, $failMessage = null) {}

    /**
     * "isEqualToContentsOfFile" checks that a string is equal to the content
     * of a file given by its path.
     *
     *    <?php
     *    $this
     *        ->string($string)
     *            ->isEqualToContentsOfFile('/path/to/file')
     *    ;
     *
     * Note: if the file doesn't exist, the test will fails.
     *
     * @param string $path
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-is-equal-to-contents-of-file
     *
     * @return $this
     */
    public function isEqualToContentsOfFile($path, $failMessage = null) {}

    /**
     * "hasLength" checks the size of the string.
     *
     *    <?php
     *    $string = 'Hello world';
     *
     *    $this
     *        ->string($string)
     *            ->hasLength(11)     // passes
     *            ->hasLength(20)     // fails
     *    ;
     *
     * @param integer $length
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-has-length
     *
     * @return $this
     */
    public function hasLength($length, $failMessage = null) {}

    /**
     * "hasLengthGreaterThan" checks that the size of a string is grater that
     * the given one.
     *
     *    <?php
     *    $string = 'Hello world';
     *
     *    $this
     *        ->string($string)
     *            ->hasLengthGreaterThan(10)     // passes
     *            ->hasLengthGreaterThan(20)     // fails
     *    ;
     *
     * @param integer $length
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-has-length-greater-than
     *
     * @return $this
     */
    public function hasLengthGreaterThan($length, $failMessage = null) {}

    /**
     * "hasLengthLessThan" checks that the size of the string is shorter that
     * the given one.
     *
     *    <?php
     *    $string = 'Hello world';
     *
     *    $this
     *        ->string($string)
     *            ->hasLengthLessThan(20)     // passes
     *            ->hasLengthLessThan(10)     // fails
     *    ;
     *
     * @param integer $length
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-has-length-less-than
     *
     * @return $this
     */
    public function hasLengthLessThan($length, $failMessage = null) {}

    /**
     * "contains" checks that a string contains a given string.
     *
     *    <?php
     *    $string = 'Hello world';
     *
     *    $this
     *        ->string($string)
     *            ->contains('ll')    // passes
     *            ->contains(' ')     // passes
     *            ->contains('php')   // fails
     *    ;
     *
     * @param string $fragment
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-contains
     *
     * @return $this
     */
    public function contains($fragment, $failMessage = null) {}

    /**
     * "notContains" checks that a string doesn't contains another given
     * string.
     *
     *    <?php
     *    $string = 'Hello world';
     *
     *    $this
     *        ->string($string)
     *            ->notContains('php')   // passes
     *            ->notContains(';')     // passes
     *            ->notContains('ll')    // fails
     *            ->notContains(' ')     // fails
     *    ;
     *
     * @param string $fragment
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#string-not-contains
     *
     * @return $this
     */
    public function notContains($fragment, $failMessage = null) {}

    /**
     * "startWith" checks that a string starts with another given string.
     *
     *    <?php
     *    $string = 'Hello world';
     *
     *    $this
     *        ->string($string)
     *            ->startWith('Hello wo') // passes
     *            ->startWith('He')       // passes
     *            ->startWith('world')    // fails
     *            ->startWith(' ')        // fails
     *
     *    ;
     *
     * @param string $fragment
     * @param string $failMessage
     *
     * @return $this
     */
    public function startWith($fragment, $failMessage = null) {}

    /**
     * "notStartWith" checks that a string doesn't starts with another given
     * string.
     *
     *    <?php
     *    $string = 'Hello world';
     *
     *    $this
     *        ->string($string)
     *            ->notStartWith('world')    // passes
     *            ->notStartWith(' ')        // passes
     *            ->notStartWith('Hello wo')  // fails
     *            ->notStartWith('He')       // fails
     *    ;
     *
     * @param string $fragment
     * @param string $failMessage
     *
     * @return $this
     */
    public function notStartWith($fragment, $failMessage = null) {}

    /**
     * "endWith" checks that a string ends with another given string.
     *
     *    <?php
     *    $string = 'Hello world';
     *
     *    $this
     *        ->string($string)
     *            ->endWith('world')     // passes
     *            ->endWith('lo world')  // passes
     *            ->endWith('Hello')     // fails
     *            ->endWith(' ')         // fails
     *    ;
     *
     * @param string $fragment
     * @param string $failMessage
     *
     * @return $this
     */
    public function endWith($fragment, $failMessage = null) {}

    /**
     * "notEndWith" checks that a string doesn't ends with another given
     * string.
     *
     *    <?php
     *    $string = 'Hello world';
     *
     *    $this
     *        ->string($string)
     *            ->notEndWith('Hello')     // passes
     *            ->notEndWith(' ')         // passes
     *            ->notEndWith('world')  // fails
     *            ->notEndWith('lo world')        // fails
     *    ;
     *
     * @param string $fragment
     * @param string $failMessage
     *
     * @return $this
     */
    public function notEndWith($fragment, $failMessage = null) {}

    /**
     * @return castToArray
     */
    public function toArray() {}
}
