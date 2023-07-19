<?php

namespace Vazaha\Mastodon\Responses\Contracts;

interface PagedResponseContract extends ResponseContract
{
    public function getNextResponse(): PagedResponseContract|null;

    public function getPreviousResponse(): PagedResponseContract|null;
}