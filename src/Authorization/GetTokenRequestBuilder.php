<?php
/**
 * This file is part of doubler.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 */

declare(strict_types=1);

namespace Doubler\TiktokOpenApi\Authorization;

use Doubler\TiktokOpenApi\AbstractRequestBuilder;
use Doubler\TiktokOpenApi\Constant;

/**
 * @see https://partner.tiktokshop.com/docv2/page/64f199619495ef0281851e1c
 */
class GetTokenRequestBuilder extends AbstractRequestBuilder
{
    protected function beforeBuild(): void
    {
        $this->addQueryParam('app_key', $this->context->getAppSecret());
        $this->addQueryParam('app_secret', $this->context->getAppSecret());
        $this->addQueryParam('grant_type', 'authorized_code');
    }

    /**
     * @param string $authCode
     * @return $this
     */
    public function setAuthCode(string $authCode): static
    {
        $this->addQueryParam('auth_code', $authCode);

        return $this;
    }

    protected function getGatewayUri(): string
    {
        return Constant::AUTH_URL;
    }

    /**
     * @return string
     */
    protected function getApiPath(): string
    {
        return '/api/v2/token/get';
    }
}