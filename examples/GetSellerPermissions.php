<?php


global $context;

use Doubler\TiktokOpenApi\Seller\GetSellerPermissionsRequestBuilder;

include 'common.php';

$builder = new GetSellerPermissionsRequestBuilder($context);
$request = $builder->getRequest();

execute($request);