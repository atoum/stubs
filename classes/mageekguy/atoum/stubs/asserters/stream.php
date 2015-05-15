<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

class stream
{
    use asserters;

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isRead($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isWrited($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isWritten($failMessage = null) {}
}
