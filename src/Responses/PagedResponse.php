<?php

namespace Vazaha\Mastodon\Responses;

use Vazaha\Mastodon\Responses\Contracts\PagedResponseContract;

/**
 * @property \Vazaha\Mastodon\Requests\Contracts\PagedRequestContract $request
 **/
class PagedResponse extends Response implements PagedResponseContract
{
    public function getNextResponse(): PagedResponseContract|null
    {
        $params = $this->getPagingLinks()->getNextQueryParams();

        if (empty($params)) {
            return null;
        }

        /** @var PagedResponseContract $response **/
        $response = $this->apiClient->doRequest($this->request->setPagingParams($params));

        return $response;
    }

    public function getPreviousResponse(): PagedResponseContract|null
    {
        $params = $this->getPagingLinks()->getPreviousQueryParams();

        if (empty($params)) {
            return null;
        }

        /** @var PagedResponseContract $response **/
        $response = $this->apiClient->doRequest($this->request->setPagingParams($params));

        return $response;
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
