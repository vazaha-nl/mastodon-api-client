<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Request;
use Vazaha\Mastodon\Results\Admin\DomainBlockResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\DomainBlockResult>
 */
abstract class DomainBlockRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return DomainBlockResult::class;
    }
}
