<?php

use Doubler\TiktokOpenApi\Products\CreateCustomBrandRequestBuilder;

global $context;
include 'common.php';

$builder = new CreateCustomBrandRequestBuilder($context);
$builder->setName('');
$request = $builder->getRequest();

execute($request);