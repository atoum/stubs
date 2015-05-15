<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class phpFunction
{
    use asserters;

    /**
     * @return $this
     */
    public function wasCalled() {}

    /**
     * @param mixed ...$arguments
     *
     * @return $this
     */
    public function wasCalledWithArguments(...$arguments) {}

    /**
     * @param mixed ...$arguments
     *
     * @return $this
     */
    public function wasCalledWithIdenticalArguments(...$arguments) {}

    /**
     * @return $this
     */
    public function wasCalledWithAnyArguments() {}

    /**
     * @return $this
     */
    public function wasCalledWithoutAnyArgument() {}
}
