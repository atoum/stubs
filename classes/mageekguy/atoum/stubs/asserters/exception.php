<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to exceptions.
 *
 *    <?php
 *    $this
 *        ->exception(
 *            function() use($myObject) {
 *                // this code throws an exception: throw new \Exception;
 *                $myObject->doOneThing('wrongParameter');
 *            }
 *        )
 *    ;
 *
 * Note: The syntax uses anonymous functions (also called closures)
 *   introduced in PHP 5.3. For more details, read the PHP's
 *   documentation on anonymous functions.
 *
 * We can easily retrieve the last exception with "$this->exception".
 *
 *    <?php
 *    $this
 *        ->exception(
 *            function() use($myObject) {
 *                // This code throws a exception: throw new \Exception('Message', 42);
 *                $myObject->doOneThing('wrongParameter');
 *            }
 *        )->isIdenticalTo($this->exception) // passes
 *    ;
 *
 *    $this->exception->hasCode(42); // passes
 *    $this->exception->hasMessage('erreur'); // passes
 *
 */
class exception extends object
{
    /**
     * "hasDefaultCode" checks that the code of the exception is the default
     * value, 0.
     *
     *    <?php
     *    $this
     *        ->exception(
     *            function() use($myObject) {
     *                // this code throws an exception: throw new \Exception;
     *                $myObject->doOneThing('wrongParameter');
     *            }
     *        )
     *            ->hasDefaultCode()
     *    ;
     *
     * Note: "hasDefaultCode" is equivalent to "hasCode(0)".
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasdefaultcode
     */
    public $hasDefaultCode;

    /**
     * "message" enables you to get an asserter of type *string* containing
     * the message of the tested exception.
     *
     *    <?php
     *    $this
     *        ->exception(
     *            function() {
     *                throw new \Exception('My custom message to test');
     *            }
     *        )
     *            ->message
     *                ->contains('message')
     *    ;
     *
     * @var phpString
     */
    public $message;

    /**
     * "hasDefaultCode" checks that the code of the exception is the default
     * value, 0.
     *
     *    <?php
     *    $this
     *        ->exception(
     *            function() use($myObject) {
     *                // this code throws an exception: throw new \Exception;
     *                $myObject->doOneThing('wrongParameter');
     *            }
     *        )
     *            ->hasDefaultCode()
     *    ;
     *
     * Note: "hasDefaultCode" is equivalent to "hasCode(0)".
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasdefaultcode
     *
     * @return $this
     */
    public function hasDefaultCode($failMessage = null) {}

    /**
     * "hasCode" checks the code of the exception.
     *
     *    <?php
     *    $this
     *        ->exception(
     *            function() use($myObject) {
     *                // This code throws a exception: throw new \Exception('Message', 42);
     *                $myObject->doOneThing('wrongParameter');
     *            }
     *        )
     *            ->hasCode(42)
     *    ;
     *
     * @param integer $code
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hascode
     *
     * @return $this
     */
    public function hasCode($code, $failMessage = null) {}

    /**
     * "hasMessage" checks the message from the exception.
     *
     *    <?php
     *    $this
     *        ->exception(
     *            function() use($myObject) {
     *                // This code throws a exception: throw new \Exception('Message');
     *                $myObject->doOneThing('wrongParameter');
     *            }
     *        )
     *            ->hasMessage('Message')     // passes
     *            ->hasMessage('message')     // fails
     *    ;
     *
     * @param string $message
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasmessage
     *
     * @return $this
     */
    public function hasMessage($message, $failMessage = null) {}

    /**
     * "hasNestedException" checks that the exception contains a reference to
     * another exception. If the type of the exception is given, this will
     * also checks the class of the exception.
     *
     *    <?php
     *    $this
     *        ->exception(
     *            function() use($myObject) {
     *                // This code throws a exception: throw new \Exception('Message');
     *                $myObject->doOneThing('wrongParameter');
     *            }
     *        )
     *            ->hasNestedException()      // fails
     *
     *        ->exception(
     *            function() use($myObject) {
     *                try {
     *                    // This code throws a exception: throw new \FirstException('Message 1', 42);
     *                    $myObject->doOneThing('wrongParameter');
     *                }
     *                // ... the exception is caught...
     *                catch(\FirstException $e) {
     *                    // ... and then throws encapsulated inside a second one
     *                    throw new \SecondException('Message 2', 24, $e);
     *                }
     *            }
     *        )
     *            ->isInstanceOf('\FirstException')           // fails
     *            ->isInstanceOf('\SecondException')          // passes
     *
     *            ->hasNestedException()                      // passes
     *            ->hasNestedException(new \FirstException)   // passes
     *            ->hasNestedException(new \SecondException)  // fails
     *    ;
     *
     * @param \exception $exception
     * @param string     $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasnestedexception
     *
     * @return $this
     */
    public function hasNestedException(\exception $exception = null, $failMessage = null) {}
}
