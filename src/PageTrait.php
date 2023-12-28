<?php

namespace Doubler\TiktokOpenApi;

trait PageTrait
{
    /**
     * @param int $pageSize
     * @return $this
     */
    public function setPageSize(int $pageSize): static
    {
        $this->queryParams['page_size'] = $pageSize;

        return $this;
    }

    /**
     * @param string $pageToken
     * @return $this
     */
    public function setPageToken(string $pageToken): static
    {
        $this->queryParams['page_token'] = $pageToken;

        return $this;
    }
}