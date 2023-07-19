<?php

namespace Vazaha\Mastodon\Responses\Contracts;

interface PagedResponseContract extends ResponseContract
{
    public function getNextResponse(): ResponseContract|PagedResponseContract|null;

    public function getPreviousResponse(): ResponseContract|PagedResponseContract|null;
}