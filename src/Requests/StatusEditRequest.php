<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\StatusEditResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusEditResult>
 */
abstract class StatusEditRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return StatusEditResult::class;
    }
}
