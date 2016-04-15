<?php

namespace atoum\mock;

class stream
{

	public $file_get_contents;
	public $file_put_contents;

	/**
	 * @return $this
	 */
	public static function get() { }

	/**
	 * @return string
	 */
	public function getPath() {}

	/**
	 * @return string
	 */
	public function getBasename() {}
}
