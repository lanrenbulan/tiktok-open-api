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
use Doubler\TiktokOpenApi\LocaleTrait;
use Doubler\TiktokOpenApi\ShopCipherTrait;

/**
 * @see https://partner.tiktokshop.com/docv2/page/6509c5784a0bb702c0561cc8
 */
class GetAttributesRequestBuilder extends AbstractOpenApiRequestBuilder
{
    use ShopCipherTrait, LocaleTrait;

    /**
     * @param string $categoryId
     * @return $this
     */
    public function setCategoryId(string $categoryId): static
    {
        $this->pathParams['category_id'] = $categoryId;

        return $this;
    }

    protected function getApiPath(): string
    {
        return '/product/202309/categories/' . $this->pathParams['category_id'] . '/attributes';
    }
}