<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to objects.
 *
 * If you try to test a variable that is not an object with this
 * assertion, this will fail.
 *
 * Note: "null" isn't an object. Refer to the PHP's manual is_object
 *   to know what is considered as an object or not.
 *
 */
class object extends variable
{
    /**
     * @var castToArray
     */
    public $toArray;

    /**
     * "isInstanceOf" checks that an object is:
     *
     * * an instance of the given class,
     *
     * * a subclass from the given class (abstract or not),
     *
     * * an instance of class that implements a given interface.
     *
     *    <?php
     *    $object = new \StdClass();
     *
     *    $this
     *        ->object($object)
     *            ->isInstanceOf('\StdClass')     // passes
     *            ->isInstanceOf('\Iterator')     // fails
     *    ;
     *
     *    interface FooInterface
     *    {
     *        public function foo();
     *    }
     *
     *    class FooClass implements FooInterface
     *    {
     *        public function foo()
     *        {
     *            echo "foo";
     *        }
     *    }
     *
     *    class BarClass extends FooClass
     *    {
     *    }
     *
     *    $foo = new FooClass;
     *    $bar = new BarClass;
     *
     *    $this
     *        ->object($foo)
     *            ->isInstanceOf('\FooClass')     // passes
     *            ->isInstanceOf('\FooInterface') // passes
     *            ->isInstanceOf('\BarClass')     // fails
     *            ->isInstanceOf('\StdClass')     // fails
     *
     *        ->object($bar)
     *            ->isInstanceOf('\FooClass')     // passes
     *            ->isInstanceOf('\FooInterface') // passes
     *            ->isInstanceOf('\BarClass')     // passes
     *            ->isInstanceOf('\StdClass')     // fails
     *    ;
     *
     * Note: The name of the classes and the interfaces must be absolute,
     *   because any namesapce imports are not taken into account.
     *
     * Hint: Note that with PHP ">= 5.5" you can use the keyword "class" to
     *   get the absolute class names, for example
     *   "$this->object($foo)->isInstanceOf(FooClass::class)".
     *
     * @param string $value
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#object-is-instance-of
     *
     * @return $this
     */
    public function isInstanceOf($value, $failMessage = null) {}

    /**
     * @param string $value
     * @param string $failMessage
     *
     * @return $this
     *
     */
    public function isNotInstanceOf($value, $failMessage = null) {}

    /**
     * "hasSize" checks the size of an objet that implements the interface
     * "Countable".
     *
     *    <?php
     *    $countableObject = new GlobIterator('*');
     *
     *    $this
     *        ->object($countableObject)
     *            ->hasSize(3)
     *    ;
     *
     * @param integer $size
     * @param string  $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#object-has-size
     *
     * @return $this
     */
    public function hasSize($size, $failMessage = null) {}

    /**
     * "isCloneOf" checks an object is clone of a given one, that is the
     * objects are equal but are not the same instance.
     *
     *    <?php
     *    $object1 = new \StdClass;
     *    $object2 = new \StdClass;
     *    $object3 = clone($object1);
     *    $object4 = new \StdClass;
     *    $object4->foo = 'bar';
     *
     *    $this
     *        ->object($object1)
     *            ->isCloneOf($object2)   // passes
     *            ->isCloneOf($object3)   // passes
     *            ->isCloneOf($object4)   // fails
     *    ;
     *
     * Note: For more details, read the PHP's documentation about comparing
     *   objects.
     *
     * @param object $object
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#object-is-clone-of
     *
     * @return $this
     */
    public function isCloneOf($object, $failMessage = null) {}

    /**
     * "isEmpty" checks the size of an object that implements the "Countable"
     * interface is equal to 0.
     *
     *    <?php
     *    $countableObject = new GlobIterator('atoum.php');
     *
     *    $this
     *        ->object($countableObject)
     *            ->isEmpty()
     *    ;
     *
     * Note: "isEmpty" is equivalent to "hasSize(0)".
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#object-is-empty
     *
     * @return $this
     */
    public function isEmpty($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isTestedInstance($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isNotTestedInstance($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isInstanceOfTestedClass($failMessage = null) {}

    /**
     * @return castToString
     */
    public function toString() {}

    /**
     * @return castToArray
     */
    public function toArray() {}
}
