# atoum stubs

![atoum](http://downloads.atoum.org/images/logo.png)

## Install it

Install extension using [composer](https://getcomposer.org):

```json
{
    "require-dev": {
        "atoum/stubs": "*"
    }
}
```

## Use it

Once your IDE is correctly configured, the only thing you will have to do is use atoum
through one of its alias:

```php
<?php

// tests/units/random.php

namespace tests\units;

use atoum; // or mageekguy\atoum

class random extends atoum {
    // ...
}
```

atoum provides 3 aliases for the main test class, choose the one you prefer:

* `atoum`
* `atoum\test`
* `mageekguy\atoum`


Once done, you will get full featured code-completion:

![atoum-stubs](demo.gif)
