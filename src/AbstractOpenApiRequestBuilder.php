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

abstract class AbstractOpenApiRequestBuilder extends AbstractRequestBuilder
{
    /**
     * @return void
     */
    protected function beforeBuildRequest(): void
    {
        $this->headers['Content-Type'] = 'application/json';
        $this->headers['x-tts-access-token'] = $this->context->getAccessToken();

        $this->queryParams['app_key'] = $this->context->getAppKey();
        $this->queryParams['timestamp'] = time();

        if (!isset($this->queryParams['shop_cipher']) && method_exists($this, 'setShopCipher')) {
            $this->setShopCipher($this->context->getShopCipher());
        }

        if (!isset($this->queryParams['locale']) && method_exists($this, 'setLocale')) {
            $this->setLocale($this->context->getLocale());
        }

        $this->queryParams['sign'] = $this->generateSign();
    }

    /**
     * @return string
     */
    protected function getGatewayUri(): string
    {
        return Constant::OPEN_API_URI;
    }

    /**
     * @return string
     * @see https://partner.tiktokshop.com/docv2/page/64f199709495ef0281851fd0
     */
    protected function generateSign(): string
    {
        $appSecret = $this->context->getAppSecret();
        $apiPath = $this->getApiPath();
        $input = $this->getSignInput();

        if ($this->headers['Content-Type'] !== 'multipart/form-data') {
            $data = $appSecret . $apiPath . $input . ($this->getBody() ?? '') . $appSecret;
        } else {
            $data = $appSecret . $apiPath . $input . $appSecret;
        }

        return hash_hmac('sha256', $data, $appSecret);
    }

    /**
     * @return string
     */
    protected function getSignInput(): string
    {
        $params = $this->queryParams;

        ksort($params);

        $input = '';

        foreach ($params as $name => $value) {
            if ('sign' === $name || 'access_token' === $name) {
                continue;
            }

            $input .= "{$name}{$value}";
        }

        return $input;
    }
}