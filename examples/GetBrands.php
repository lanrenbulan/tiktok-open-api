<?php

use Doubler\TiktokOpenApi\Products\GetBrandsRequestBuilder;


global $context;
include 'common.php';

$builder = new GetBrandsRequestBuilder($context);
$builder->setPageSize(100);
//$builder->setIsAuthorized(true);
//$builder->setBrandName('');
//$builder->setCategoryId('');
$request = $builder->getRequest();

execute($request);