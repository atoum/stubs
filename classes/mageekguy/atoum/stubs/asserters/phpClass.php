<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to classes.
 *
 *    <?php
 *    $object = new \StdClass;
 *
 *    $this
 *        ->class(get_class($object))
 *
 *        ->class('\StdClass')
 *    ;
 *
 * Note: The keyword "class" is a reserved word in PHP, it wasn't
 *   possible to create a "class" asserter. It's therefore called
 *   "phpClass" and an alias "class" has been created. You can meet both
 *   "->phpClass()" or "->class()".
 *
 * But it's recommended to only use "->class()".
 *
 * @method $this extends($class)
 * @method $this implements($interface)
 */
class phpClass
{
    use asserters;

    /**
     * "isAbstract" checks that the class is abstract.
     *
     *    <?php
     *    $this
     *        ->class('\StdClass')
     *            ->isAbstract()       // fails
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isabstract
     */
    public $isAbstract;

    /**
     * "isFinal" checks that the class is final.
     *
     * In this case, we test a non-final class ("StdClass") :
     *
     *    <?php
     *    $this
     *            ->class('\StdClass')
     *                    ->isFinal()             // fails
     *    ;
     *
     * In this case, the tested class is a final one
     *
     *    <?php
     *    $this
     *            ->testedClass
     *                    ->isFinal()             // passes
     *    ;
     *
     *    $this
     *            ->testedClass
     *                    ->isFinal               // passes too
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isfinal
     */
    public $isFinal;

    /**
     * "hasNoParent" checks that the class doesn't  inherit from any class.
     *
     *    <?php
     *    $this
     *        ->class('\StdClass')
     *            ->hasNoParent()     // passes
     *
     *        ->class('\FilesystemIterator')
     *            ->hasNoParent()     // fails
     *    ;
     *
     *      from no class. "hasNoParent" doesn't check interfaces, only the
     *      inherited classes.
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasnoparent
     */
    public $hasNoParent;

    /**
     * "hasParent" checks that the class inherits from a given class.
     *
     *    <?php
     *    $this
     *        ->class('\StdClass')
     *            ->hasParent()       // fails
     *
     *        ->class('\FilesystemIterator')
     *            ->hasParent()       // passes
     *    ;
     *
     *      from no class. "hasParent" doesn't check interfaces, only the
     *      inherited classes.
     *
     * @param string $parent
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasparent
     *
     * @return $this
     */
    public function hasParent($parent, $failMessage = null) {}

    /**
     * "hasNoParent" checks that the class doesn't  inherit from any class.
     *
     *    <?php
     *    $this
     *        ->class('\StdClass')
     *            ->hasNoParent()     // passes
     *
     *        ->class('\FilesystemIterator')
     *            ->hasNoParent()     // fails
     *    ;
     *
     *      from no class. "hasNoParent" doesn't check interfaces, only the
     *      inherited classes.
     *
     * @param string $failMessage
     *
     * @link * @link http://docs.atoum.org/en/latest/asserters.html#hasnoparent
     *
     * @return $this
     *
     */
    public function hasNoParent($failMessage = null) {}

    /**
     * "isSubclassOf" checks that the class inherit from the given class.
     *
     *    <?php
     *    $this
     *        ->class('\FilesystemIterator')
     *            ->isSubclassOf('\DirectoryIterator')    // passes
     *            ->isSubclassOf('\SplFileInfo')          // passes
     *            ->isSubclassOf('\StdClass')             // fails
     *    ;
     *
     * @param string $parent
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issubclassof
     *
     * @return $this
     */
    public function isSubClassOf($parent, $failMessage = null) {}

    /**
     * "hasInterface" checks that the class implements a given interface.
     *
     *    <?php
     *    $this
     *        ->class('\ArrayIterator')
     *            ->hasInterface('Countable')     // passes
     *
     *        ->class('\StdClass')
     *            ->hasInterface('Countable')     // fails
     *    ;
     *
     * @param string $interface
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasinterface
     *
     * @return $this
     */
    public function hasInterface($interface, $failMessage = null) {}

    /**
     * "isAbstract" checks that the class is abstract.
     *
     *    <?php
     *    $this
     *        ->class('\StdClass')
     *            ->isAbstract()       // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isabstract
     *
     * @return $this
     */
    public function isAbstract($failMessage = null) {}

    /**
     * "isFinal" checks that the class is final.
     *
     * In this case, we test a non-final class ("StdClass") :
     *
     *    <?php
     *    $this
     *            ->class('\StdClass')
     *                    ->isFinal()             // fails
     *    ;
     *
     * In this case, the tested class is a final one
     *
     *    <?php
     *    $this
     *            ->testedClass
     *                    ->isFinal()             // passes
     *    ;
     *
     *    $this
     *            ->testedClass
     *                    ->isFinal               // passes too
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isfinal
     *
     * @return $this
     */
    public function isFinal($failMessage = null) {}

    /**
     * "hasMethod" checks that the class contains a given method.
     *
     *    <?php
     *    $this
     *        ->class('\ArrayIterator')
     *            ->hasMethod('count')    // passes
     *
     *        ->class('\StdClass')
     *            ->hasMethod('count')    // fails
     *    ;
     *
     * @param string $method
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasmethod
     *
     * @return $this
     */
    public function hasMethod($method, $failMessage = null) {}

    /**
     * "hasConstant" checks that the class has the tested constant.
     *
     *    <?php
     *    $this
     *        ->class('\StdClass')
     *            ->hasConstant('FOO')       // fails
     *
     *        ->class('\FilesystemIterator')
     *            ->hasConstant('CURRENT_AS_PATHNAME')       // passes
     *    ;
     *
     * @param string $constant
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#hasconstant
     *
     * @return $this
     */
    public function hasConstant($constant, $failMessage = null) {}
}
