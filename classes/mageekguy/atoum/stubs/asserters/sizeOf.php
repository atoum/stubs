<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to tests on the size of the arrays and
 * objects implementing the interface "Countable".
 *
 *    <?php
 *    $array           = array(1, 2, 3);
 *    $countableObject = new GlobIterator('*');
 *
 *    $this
 *        ->sizeOf($array)
 *            ->isEqualTo(3)
 *
 *        ->sizeOf($countableObject)
 *            ->isGreaterThan(0)
 *    ;
 *
 */
class sizeOf extends integer {}
