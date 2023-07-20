<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Responses\Contracts;

interface PagedResponseContract extends ResponseContract
{
    public function getNextResponse(): ?self;

    public function getPreviousResponse(): ?self;
}
