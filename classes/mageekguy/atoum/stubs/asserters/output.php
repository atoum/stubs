<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to tests on outputs, so everything wich
 * supposed to be displayed on the screen.
 *
 *    <?php
 *    $this
 *        ->output(
 *            function() {
 *                echo 'Hello world';
 *            }
 *        )
 *    ;
 *
 * Note: The syntax uses anonymous functions (also called closures)
 *   introduced in PHP 5.3. For more details, read the PHP's
 *   documentation on anonymous functions.
 *
 */
class output extends phpString {}
