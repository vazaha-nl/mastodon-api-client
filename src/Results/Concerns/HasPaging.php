<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Concerns;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Results\PagingLinks;

/**
 * @property \Vazaha\Mastodon\Interfaces\RequestInterface $request
 */
trait HasPaging
{
    public function getNextResult(): ?ResultInterface
    {
        $params = $this->getPagingLinks()->getNextQueryParams();

        if ($params === null) {
            return null;
        }

        /** @var \Vazaha\Mastodon\Results\Result $result */
        $result = $this->apiClient->send($this->request->setPagingParams($params));

        return $result;
    }

    public function getPreviousResult(): ?ResultInterface
    {
        $params = $this->getPagingLinks()->getPreviousQueryParams();

        if (empty($params)) {
            return null;
        }

        /** @var \Vazaha\Mastodon\Results\Result $result */
        $result = $this->apiClient->send($this->request->setPagingParams($params));

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
