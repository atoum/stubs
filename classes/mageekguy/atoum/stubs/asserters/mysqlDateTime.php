<?php

namespace mageekguy\atoum\stubs\asserters;

/**
 * It's the assertion dedicated to objects representing MySQL date and
 * based on DateTime object.
 *
 * Dates must use a format compatible with MySQL and many other DBMSS
 * (database management system), i.e. "Y-m-d H:i:s"
 *
 * Note: For more information, refer to the documentation of the date()
 *   function from the PHP manual.
 *
 * If you try to test a value that's not a "DateTime" (or a child class)
 * with this assertion it will fail.
 *
 */
class mysqlDateTime extends dateTime {}
