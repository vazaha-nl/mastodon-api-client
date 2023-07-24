<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\PagedResultInterface;

/**
 * @property \Vazaha\Mastodon\Interfaces\PagedRequestInterface $request
 */
class PagedResult extends Result implements PagedResultInterface
{
    public function getNextResult(): ?PagedResultInterface
    {
        $params = $this->getPagingLinks()->getNextQueryParams();

        if ($params === null) {
            return null;
        }

        /** @var \Vazaha\Mastodon\Results\PagedResult $result */
        $result = $this->apiClient->doRequest($this->request->setPagingParams($params));

        return $result;
    }

    public function getPreviousResult(): ?PagedResultInterface
    {
        $params = $this->getPagingLinks()->getPreviousQueryParams();

        if (empty($params)) {
            return null;
        }

        /** @var \Vazaha\Mastodon\Results\PagedResult $result */
        $result = $this->apiClient->doRequest($this->request->setPagingParams($params));

        return $result;
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
