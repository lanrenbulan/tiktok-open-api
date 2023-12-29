<?php

use Doubler\TiktokOpenApi\Products\GetCategoriesRequestBuilder;


global $context;
include 'common.php';

$builder = new GetCategoriesRequestBuilder($context);
$request = $builder->getRequest();

execute($request);