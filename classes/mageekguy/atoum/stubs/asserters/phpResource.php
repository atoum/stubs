<?php

namespace mageekguy\atoum\stubs\asserters;

class phpResource extends variable
{
    /**
     * @var phpString
     */
    public $type;

	/**
	 * @var $this
	 */
    public $isStream;

    /**
     * @param string $type
     * @param string $failMessage
     *
     * @return $this
     */
    public function isOfType($type, $failMessage = null) {}

	/**
	 * @var $this
	 */
	public function isStream($type, $failMessage = null) {}

    /**
     * @return phpString
     */
    public function type() {}
}
