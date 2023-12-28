# tiktok-open-api

TikTok Open API SDK

## Basic
```
use Doubler\OpenApiSdk\Client;
use Doubler\TiktokOpenApi\Context;
use Doubler\TiktokOpenApi\Authorization\GetTokenRequestBuilder;

$client = new Client();

$context = new Context([
    'service_id' => '',
    'app_key' => '',
    'app_secret' => '',
    
    // default locale
    'locale' => 'en-US',

    'access_token' => '',
    'refresh_token' => '',
    'shop_cipher' => '',
]);

// get authorization uri.
echo $context->getAuthorizationUri();

// build request
$builder = new GetTokenRequestBuilder($context);
$builder->setAuthCode('authCode');
$request = $builder->getRequest();

// send request and get response.
$response = $client->send($request);
```

## More

See `./examples`

Rename `common.php.local` to `common.php`.

```
php examples/GetCategories.php
```

## TikTok

https://partner.tiktokshop.com