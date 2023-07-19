<?php

namespace Vazaha\Mastodon\Responses;

use Vazaha\Mastodon\Responses\Contracts\PagedResponseContract;
use Vazaha\Mastodon\Responses\Contracts\ResponseContract;

/**
 * @property \Vazaha\Mastodon\Requests\Contracts\PagedRequestContract $request
 **/
class PagedResponse extends Response implements PagedResponseContract
{
    public function getNextResponse(): ResponseContract|PagedResponseContract|null
    {
        $params = $this->getPagingLinks()->getNextQueryParams();

        if (empty($params)) {
            return null;
        }

        return $this->apiClient->doRequest($this->request->setPagingParams($params));
    }

    public function getPreviousResponse(): ResponseContract|PagedResponseContract|null
    {
        $params = $this->getPagingLinks()->getPreviousQueryParams();

        if (empty($params)) {
            return null;
        }

        return $this->apiClient->doRequest($this->request->setPagingParams($params));
    }

    protected function getNextUrl(): ?string
    {
        return $this->getPagingLinks()->getNextUrl();
    }

    protected function getPreviousUrl(): ?string
    {
        return $this->getPagingLinks()->getPreviousUrl();
    }

    protected function getPagingLinks(): PagingLinks
    {
        return new PagingLinks($this->httpResponse->getHeader('link')[0] ?? null);
    }
}
