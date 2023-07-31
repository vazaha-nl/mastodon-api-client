<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\AnnouncementResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AnnouncementResult>
 */
abstract class AnnouncementRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return AnnouncementResult::class;
    }
}
