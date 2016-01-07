<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to tests on the cast of objects to
 * strings.
 *
 *    <?php
 *    class AtoumVersion {
 *        private $version = '1.0';
 *
 *        public function __toString() {
 *            return 'atoum v' . $this->version;
 *        }
 *    }
 *
 *    $this
 *        ->castToString(new AtoumVersion())
 *            ->isEqualTo('atoum v1.0')
 *    ;
 *
 */
class castToString extends phpString {}
