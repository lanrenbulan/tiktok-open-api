<?php
/**
 * This file is part of doubler.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 */

declare(strict_types=1);

namespace Doubler\TiktokOpenApi\Seller;

use Doubler\TiktokOpenApi\AbstractOpenApiRequestBuilder;

class GetActiveShopsRequestBuilder extends AbstractOpenApiRequestBuilder
{

    protected function getApiPath(): string
    {
        return '/seller/202309/shops';
    }
}