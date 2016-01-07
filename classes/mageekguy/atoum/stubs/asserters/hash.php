<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to tests on hashes (digital
 * fingerprints).
 *
 */
class hash extends phpString
{
    /**
     * "isSha1" checks that the string is a "sha1" format, i.e. a
     * hexadecimale string of 40 length.
     *
     *    <?php
     *    $hash    = hash('sha1', 'atoum');
     *    $notHash = 'atoum';
     *
     *    $this
     *        ->hash($hash)
     *            ->isSha1()      // passes
     *        ->hash($notHash)
     *            ->isSha1()      // fails
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha1
     */
    public $isSha1;

    /**
     * "isSha256" checks that the string is a "sha256" format, i.e. a
     * hexadecimale string of 64 length.
     *
     *    <?php
     *    $hash    = hash('sha256', 'atoum');
     *    $notHash = 'atoum';
     *
     *    $this
     *        ->hash($hash)
     *            ->isSha256()    // passes
     *        ->hash($notHash)
     *            ->isSha256()    // fails
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha256
     */
    public $isSha256;

    /**
     * "isSha512" checks that the string is a "sha512" format, i.e. a
     * hexadecimale string of 128 length.
     *
     *    <?php
     *    $hash    = hash('sha512', 'atoum');
     *    $notHash = 'atoum';
     *
     *    $this
     *        ->hash($hash)
     *            ->isSha512()    // passes
     *        ->hash($notHash)
     *            ->isSha512()    // fails
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha512
     */
    public $isSha512;

    /**
     * "isMd5" checks that the string is a "md5" format, i.r. a hexadecimale
     * string of 32 length.
     *
     *    <?php
     *    $hash    = hash('md5', 'atoum');
     *    $notHash = 'atoum';
     *
     *    $this
     *        ->hash($hash)
     *            ->isMd5()       // passes
     *        ->hash($notHash)
     *            ->isMd5()       // fails
     *    ;
     *
     * @var static
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#ismd5
     */
    public $isMd5;

    /**
     * "isSha1" checks that the string is a "sha1" format, i.e. a
     * hexadecimale string of 40 length.
     *
     *    <?php
     *    $hash    = hash('sha1', 'atoum');
     *    $notHash = 'atoum';
     *
     *    $this
     *        ->hash($hash)
     *            ->isSha1()      // passes
     *        ->hash($notHash)
     *            ->isSha1()      // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha1
     *
     * @return $this
     */
    public function isSha1($failMessage = null) {}

    /**
     * "isSha256" checks that the string is a "sha256" format, i.e. a
     * hexadecimale string of 64 length.
     *
     *    <?php
     *    $hash    = hash('sha256', 'atoum');
     *    $notHash = 'atoum';
     *
     *    $this
     *        ->hash($hash)
     *            ->isSha256()    // passes
     *        ->hash($notHash)
     *            ->isSha256()    // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha256
     *
     * @return $this
     */
    public function isSha256($failMessage = null) {}

    /**
     * "isSha512" checks that the string is a "sha512" format, i.e. a
     * hexadecimale string of 128 length.
     *
     *    <?php
     *    $hash    = hash('sha512', 'atoum');
     *    $notHash = 'atoum';
     *
     *    $this
     *        ->hash($hash)
     *            ->isSha512()    // passes
     *        ->hash($notHash)
     *            ->isSha512()    // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#issha512
     *
     * @return $this
     */
    public function isSha512($failMessage = null) {}

    /**
     * "isMd5" checks that the string is a "md5" format, i.r. a hexadecimale
     * string of 32 length.
     *
     *    <?php
     *    $hash    = hash('md5', 'atoum');
     *    $notHash = 'atoum';
     *
     *    $this
     *        ->hash($hash)
     *            ->isMd5()       // passes
     *        ->hash($notHash)
     *            ->isMd5()       // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#ismd5
     *
     * @return $this
     */
    public function isMd5($failMessage = null) {}
}
