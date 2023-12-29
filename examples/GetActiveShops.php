<?php

use Doubler\TiktokOpenApi\Seller\GetActiveShopsRequestBuilder;

global $context;
include 'common.php';

$builder = new GetActiveShopsRequestBuilder($context);
$request = $builder->getRequest();

execute($request);