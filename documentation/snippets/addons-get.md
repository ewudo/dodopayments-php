```php
<?php

use Dodopayments\Client;

$sdk = new Client(accessToken: 'YOUR_TOKEN');

$response = $sdk->addons->listAddons(
  pageSize: 8,
  pageNumber: 2
);

print_r($response);

```


<!-- This file was generated by liblab | https://liblab.com/ -->