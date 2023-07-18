<?php

namespace Vazaha\Mastodon\Responses;

/**
 * @property \Vazaha\Mastodon\Requests\PagedRequest $request
 **/
class PagedResponse extends Response
{
    public function getNextResponse(): ?Response
    {
        $params = $this->getPagingLinks()->getNextQueryParams();

        if (empty($params)) {
            return null;
        }

        return $this->apiClient->doRequest($this->request->setPagingParams($params));
    }

    public function getPreviousResponse(): ?Response
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
