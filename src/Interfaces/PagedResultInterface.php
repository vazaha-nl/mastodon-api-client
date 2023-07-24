<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Interfaces;

interface PagedResultInterface extends ResultInterface
{
    public function getNextResult(): ?self;

    public function getPreviousResult(): ?self;
}
