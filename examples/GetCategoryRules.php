<?php

use Doubler\TiktokOpenApi\Products\GetCategoryRulesRequestBuilder;

global $context;
include 'common.php';

$builder = new GetCategoryRulesRequestBuilder($context);
$builder->setCategoryId('999816');
$request = $builder->getRequest();

execute($request);