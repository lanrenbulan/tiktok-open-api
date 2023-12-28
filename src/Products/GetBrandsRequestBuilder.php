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
use Doubler\TiktokOpenApi\PageTrait;
use Doubler\TiktokOpenApi\ShopCipherTrait;

/**
 * @see https://partner.tiktokshop.com/docv2/page/6503075656e2bb0289dd5d01
 */
class GetBrandsRequestBuilder extends AbstractOpenApiRequestBuilder
{
    use ShopCipherTrait, PageTrait;

    public function setCategoryId(string $categoryId): static
    {
        $this->queryParams['category_id'] = $categoryId;

        return $this;
    }

    public function setIsAuthorized(bool $isAuthorized): static
    {
        $this->queryParams['is_authorized'] = $isAuthorized;

        return $this;
    }

    public function setBrandName(string $brandName): static
    {
        $this->queryParams['brand_name'] = $brandName;

        return $this;
    }

    protected function getApiPath(): string
    {
        return '/product/202309/brands';
    }
}