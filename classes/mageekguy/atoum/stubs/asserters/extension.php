<?php

namespace mageekguy\atoum\stubs\asserters;

class extension extends asserter
{
    /**
     * Check if the extension is loaded (installed and enabled).
     *
     *    <?php
     *    $this
     *            ->extension('json')
     *                    ->isLoaded()
     *            ;
     *
     * Note: If you need to run tests only if an extension is present, you
     *   can use the PHP annotation.
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function isLoaded($failMessage = null) {}
}
