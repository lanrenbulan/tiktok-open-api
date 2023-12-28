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

/**
 * @see https://partner.tiktokshop.com/docv2/page/650a69db4a0bb702c06727ea
 */
class GetSellerPermissionsRequestBuilder extends AbstractOpenApiRequestBuilder
{
    protected function getApiPath(): string
    {
        return '/seller/202309/permissions';
    }
}