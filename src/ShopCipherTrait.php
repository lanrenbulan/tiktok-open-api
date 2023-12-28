<?php

namespace Doubler\TiktokOpenApi;

trait ShopCipherTrait
{
    /**
     * @param string $shopCipher
     * @return $this
     */
    public function setShopCipher(string $shopCipher): static
    {
        $this->queryParams['shop_cipher'] = $shopCipher;

        return $this;
    }
}