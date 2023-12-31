<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Concerns;

use Vazaha\Mastodon\Helpers\PagingLinks;
use Vazaha\Mastodon\Interfaces\ResultInterface;

/**
 * @property \Vazaha\Mastodon\Interfaces\RequestInterface $request
 */
trait HasPaging
{
    public function getNextPage(): ?ResultInterface
    {
        $params = $this->getPagingLinks()->getNextQueryParams();

        if ($params === null) {
            return null;
        }

        /** @var \Vazaha\Mastodon\Abstracts\Result $result */
        $result = $this->apiClient->send($this->request->setPagingParams($params));

        return $result;
    }

    public function getPreviousPage(): ?ResultInterface
    {
        $params = $this->getPagingLinks()->getPreviousQueryParams();

        if (empty($params)) {
            return null;
        }

        /** @var \Vazaha\Mastodon\Abstracts\Result $result */
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
