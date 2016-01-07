<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the asserter dedicated to UTF-8 strings.
 *
 * Note: "utf8Strings" use the functions "mb_*" to manage multi-byte
 *   strings. Refer to the PHP manual for more information about mbstring
 *   extension.
 *
 */
class utf8String extends phpString {}
