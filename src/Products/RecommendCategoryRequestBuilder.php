<?php
/**
 * This file is part of doubler.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 */

declare(strict_types=1);

namespace Doubler\TiktokOpenApi\Products;

use Doubler\TiktokOpenApi\AbstractOpenApiRequestBuilder;
use Doubler\TiktokOpenApi\ShopCipherTrait;

/**
 * @see https://partner.tiktokshop.com/docv2/page/6509bae1f1fd3102b91379d4
 */
class RecommendCategoryRequestBuilder extends AbstractOpenApiRequestBuilder
{
    use ShopCipherTrait;

    protected string $method = 'POST';

    public function setProductTitle(string $productTitle): static
    {
        $this->bodyParams['product_title'] = $productTitle;

        return $this;
    }

    public function setDescription(string $description): static
    {
        $this->bodyParams['description'] = $description;

        return $this;
    }

    /**
     * @param string[] $uris
     * @return $this
     */
    public function setImageUrls(array $uris): static
    {
        $this->bodyParams['images'] = [];

        foreach ($uris as $uri) {
            $this->bodyParams['images']['uri'] = $uri;
        }

        return $this;
    }

    protected function getApiPath(): string
    {
        return '/product/202309/categories/recommend';
    }
}