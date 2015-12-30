<?php

namespace mageekguy\atoum\stubs\asserters;


class hash extends phpString
{
    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha1
     */
    public $isSha1;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha256
     */
    public $isSha256;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha512
     */
    public $isSha512;

    /**
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#ismd5
     */
    public $isMd5;

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha1
     *
     * @return $this
     */
    public function isSha1($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha256
     *
     * @return $this
     */
    public function isSha256($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha512
     *
     * @return $this
     */
    public function isSha512($failMessage = null) {}

    /**
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#ismd5
     *
     * @return $this
     */
    public function isMd5($failMessage = null) {}
}
