<?php

namespace Doubler\TiktokOpenApi\Products;

use Doubler\TiktokOpenApi\AbstractOpenApiRequestBuilder;
use Doubler\TiktokOpenApi\ShopCipherTrait;

/**
 * @see https://partner.tiktokshop.com/docv2/page/650a0926f1fd3102b91bbfb0
 */
class CreateCustomBrandRequestBuilder extends AbstractOpenApiRequestBuilder
{
    use ShopCipherTrait;

    protected string $method = 'POST';

    protected function getApiPath(): string
    {
        return '/product/202309/brands';
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): static
    {
        $this->bodyParams['name'] = $name;

        return $this;
    }
}