<?php

namespace mageekguy\atoum\stubs\asserters;


class hash extends phpString
{
    /**
     * @var static
     */
    public $isSha1;

    /**
     * @var static
     */
    public $isSha256;

    /**
     * @var static
     */
    public $isSha512;

    /**
     * @var static
     */
    public $isMd5;

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isSha1($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isSha256($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isSha512($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @return $this
     */
    public function isMd5($failMessage = null) {}
}
