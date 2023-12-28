<?php
/**
 * This file is part of doubler.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 */

declare(strict_types=1);

namespace Doubler\TiktokOpenApi;

class Context
{
    private array $config;

    public function __construct(array $config)
    {
        $this->config = array_merge([
            'is_us_site' => false,
        ], $config);
    }

    public function getServiceId(): string
    {
        return $this->config['service_id'];
    }

    public function getAppKey(): string
    {
        return $this->config['app_key'];
    }

    public function getAppSecret(): string
    {
        return $this->config['app_secret'];
    }

    public function getRedirectUri(): string
    {
        return $this->config['redirect_uri'];
    }

    public function getAuthUri(): string
    {
        return Constant::AUTH_URL;
    }

    public function getOpenApiUri(): string
    {
        return Constant::OPEN_API_URI;
    }

    /**
     * @return bool
     */
    public function isUsSite(): bool
    {
        return $this->config['is_us_site'];
    }

    public function getServiceGatewayUri(): string
    {
        if ($this->isUsSite()) {
            return Constant::SERVICE_US_URI;
        }

        return Constant::SERVICE_URI;
    }

    /**
     * Get authorization uri
     *
     * @return string
     */
    public function getAuthorizationUri(): string
    {
        return sprintf('%s?service_id=%s', $this->getServiceGatewayUri(), $this->getServiceId());
    }

    public function getAccessToken(): string
    {
        return $this->config['access_token'];
    }

    public function getRefreshToken(): string
    {
        return $this->config['refresh_token'];
    }

    public function getShopCipher(): string
    {
        return $this->config['shop_cipher'];
    }

    public function getLocale(): string
    {
        return $this->config['locale'];
    }
}