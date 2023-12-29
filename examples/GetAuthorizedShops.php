<?php

use Doubler\TiktokOpenApi\Authorization\GetAuthorizedShopsRequestBuilder;

global $context;
include 'common.php';

$builder = new GetAuthorizedShopsRequestBuilder($context);
// $builder->setLocale('en-US');
$request = $builder->getRequest();

execute($request);