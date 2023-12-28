<?php

namespace Doubler\TiktokOpenApi;

trait LocaleTrait
{
    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale): static
    {
        $this->queryParams['locale'] = $locale;

        return $this;
    }
}