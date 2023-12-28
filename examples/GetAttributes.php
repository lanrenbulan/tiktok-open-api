<?php

use Doubler\TiktokOpenApi\Products\GetAttributesRequestBuilder;


global $context;
include 'common.php';

$builder = new GetAttributesRequestBuilder($context);
$builder->setCategoryId('999816');
$request = $builder->getRequest();

execute($request);