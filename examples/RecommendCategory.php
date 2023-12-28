<?php

use Doubler\TiktokOpenApi\Products\RecommendCategoryRequestBuilder;

global $context;
include 'common.php';

$builder = new RecommendCategoryRequestBuilder($context);
$builder->setProductTitle('Word Jumble ABC Spelling Word Games Wooden Word Puzzle Early Learning Recognition Word Alphabet Letter Matching');
//$builder->setDescription('');
// $builder->setImageUrls(['https://', 'http://']);
$request = $builder->getRequest();

execute($request);