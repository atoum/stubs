<?php

namespace mageekguy\atoum\stubs\asserters;

use mageekguy\atoum\stubs\asserters;

/**
 * This is the assertion dedicated to the streams.
 *
 * It's based on atoum virtual filesystem (VFS). A new stream wrapper
 * will be registered (starting with "atoum://").
 *
 * The mock will create a new file in the VFS and the steam path will be
 * accessible via the "getPath" method on the stream controller
 * (something like "atoum://mockUniqId").
 *
 */
class stream
{
    use asserters;

    /**
     * "isRead" checks if a mocked stream has been read.
     *
     *    <?
     *    $this
     *        ->given(
     *            $streamController = \atoum\mock\stream::get(),
     *            $streamController->file_get_contents = 'myFakeContent'
     *        )
     *        ->if(file_get_contents($streamController->getPath()))
     *        ->stream($streamController)
     *            ->isRead() // passes
     *    ;
     *
     *    $this
     *        ->given(
     *            $streamController = \atoum\mock\stream::get(),
     *            $streamController->file_get_contents = 'myFakeContent'
     *        )
     *        ->if() //we do nothing
     *        ->stream($streamController)
     *            ->isRead() // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @link http://docs.atoum.org/en/latest/asserters.html#isread
     *
     * @return $this
     */
    public function isRead($failMessage = null) {}

    /**
     * "isWrited" is an alias to the isWritten method.
     *    For more information, refer to the documentation of
     *    *stream::isWritten*
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function isWrited($failMessage = null) {}

    /**
     * "isWritten" checks if a mocked stream has been written.
     *
     *    <?
     *    $this
     *        ->given(
     *            $streamController = \atoum\mock\stream::get(),
     *            $streamController->file_put_contents = strlen($content = 'myTestContent')
     *        )
     *        ->if(file_put_contents($streamController->getPath(), $content))
     *        ->stream($streamController)
     *            ->isWritten() // passes
     *    ;
     *
     *    $this
     *       ->given(
     *         $streamController = \atoum\mock\stream::get(),
     *         $streamController->file_put_contents = strlen($content = 'myTestContent')
     *       )
     *       ->if() //we do nothing
     *       ->stream($streamController)
     *          ->isWritten() // fails
     *    ;
     *
     * @param string $failMessage
     *
     * @return $this
     */
    public function isWritten($failMessage = null) {}
}
