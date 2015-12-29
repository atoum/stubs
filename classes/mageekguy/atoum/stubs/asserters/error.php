<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

/**
 * It's assertion dedicated to errors.
 *
 *    <?php
 *    $this
 *        ->when(
 *            function() {
 *                trigger_error('message');
 *            }
 *        )
 *            ->error()
 *                ->exists() // or notExists
 *    ;
 *
 * Note: The syntax uses anonymous functions (also called closures)
 *   introduced in PHP 5.3. For more details, read the PHP's
 *   documentation on anonymous functions.
 *
 * Warning: The error types E_ERROR, E_PARSE, E_CORE_ERROR,
 *   E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING as well as the
 *   E_STRICT can't be managed with this function.
 *
 */
class error
{
    use asserters;

    /**
     * "exists" checks that an error was raised during the execution of the
     * previous code.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *            ->error()
     *                ->exists()      // pass
     *
     *        ->when(
     *            function() {
     *                // code without error
     *            }
     *        )
     *            ->error()
     *                ->exists()      // failed
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#exists
     */
    public $exists;

    /**
     * "notExists" checks that an error was raised during the execution of
     * the previous code.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *            ->error()
     *                ->notExists()   // fails
     *
     *        ->when(
     *            function() {
     *                // code without error
     *            }
     *        )
     *            ->error()
     *                ->notExists()   // pass
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#notexists
     */
    public $notExists;

    /**
     * "withAnyType" does not check the type of the raised error. That's the
     * default behaviour. So "->error()->withAnyType()->exists()" is the
     * equivalent of "->error()->exists()". This method is here if you want
     * to add semantic to your test.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *        ->error()
     *            ->withAnyType() // pass
     *            ->exists()
     *        ->when(
     *            function() {
     *            }
     *        )
     *        ->error()
     *            ->withAnyType()
     *            ->exists() // fails
     *    ;
     *
     * @var static
     */
    public $withAnyType;

    /**
     * "withAnyMessage" does not check the error message. That's the default
     * behaviour. So "->error()->withAnyMessage()->exists()" is the
     * equivalent of "->error()->exists()". This method is here if you want
     * to add semantic to your test.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error();
     *            }
     *        )
     *        ->error()
     *            ->withAnyMessage()
     *            ->exists() // passes
     *    ;
     *
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *        ->error()
     *            ->withAnyMessage()
     *            ->exists() // passes
     *    ;
     *
     *    $this
     *        ->when(
     *            function() {
     *            }
     *        )
     *        ->error()
     *            ->withAnyMessage()
     *            ->exists() // fails
     *    ;
     *
     * @var static
     */
    public $withAnyMessage;

    /**
     * "exists" checks that an error was raised during the execution of the
     * previous code.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *            ->error()
     *                ->exists()      // pass
     *
     *        ->when(
     *            function() {
     *                // code without error
     *            }
     *        )
     *            ->error()
     *                ->exists()      // failed
     *    ;
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#exists
     *
     * @return $this
     */
    public function exists() {}

    /**
     * "notExists" checks that an error was raised during the execution of
     * the previous code.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *            ->error()
     *                ->notExists()   // fails
     *
     *        ->when(
     *            function() {
     *                // code without error
     *            }
     *        )
     *            ->error()
     *                ->notExists()   // pass
     *    ;
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#notexists
     *
     * @return $this
     */
    public function notExists() {}

    /**
     * "withType" checks the type of the raised error.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *        ->error()
     *            ->withType(E_USER_NOTICE)   // pass
     *            ->exists()
     *
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *        ->error()
     *            ->withType(E_USER_WARNING)  // fails
     *            ->exists()
     *    ;
     *
     * @param integer $type
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#withtype
     *
     * @return $this
     */
    public function withType($type) {}

    /**
     * "withAnyType" does not check the type of the raised error. That's the
     * default behaviour. So "->error()->withAnyType()->exists()" is the
     * equivalent of "->error()->exists()". This method is here if you want
     * to add semantic to your test.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *        ->error()
     *            ->withAnyType() // pass
     *            ->exists()
     *        ->when(
     *            function() {
     *            }
     *        )
     *        ->error()
     *            ->withAnyType()
     *            ->exists() // fails
     *    ;
     *
     * @return $this
     */
    public function withAnyType() {}

    /**
     * "withMessage" checks the message content of the raised error.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *        ->error()
     *            ->withMessage('message')
     *            ->exists() // passes
     *    ;
     *
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *        ->error()
     *            ->withMessage('MESSAGE')
     *            ->exists() // fails
     *    ;
     *
     * @param string $message
     *
     * @return $this
     */
    public function withMessage($message) {}

    /**
     * @param string $pattern
     *
     * @return $this
     */
    public function withPattern($pattern) {}

    /**
     * "withAnyMessage" does not check the error message. That's the default
     * behaviour. So "->error()->withAnyMessage()->exists()" is the
     * equivalent of "->error()->exists()". This method is here if you want
     * to add semantic to your test.
     *
     *    <?php
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error();
     *            }
     *        )
     *        ->error()
     *            ->withAnyMessage()
     *            ->exists() // passes
     *    ;
     *
     *    $this
     *        ->when(
     *            function() {
     *                trigger_error('message');
     *            }
     *        )
     *        ->error()
     *            ->withAnyMessage()
     *            ->exists() // passes
     *    ;
     *
     *    $this
     *        ->when(
     *            function() {
     *            }
     *        )
     *        ->error()
     *            ->withAnyMessage()
     *            ->exists() // fails
     *    ;
     *
     * @return $this
     */
    public function withAnyMessage() {}
}
