<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Concerns;

use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;

trait HasBaseUri
{
    protected string $baseUri;

    public function setBaseUri(string $baseUri): self
    {
        $this->baseUri = $baseUri;

        return $this;
    }

    public function getBaseUri(): string
    {
        if (!isset($this->baseUri)) {
            throw new BaseUriNotSetException();
        }

        return $this->baseUri;
    }
}
