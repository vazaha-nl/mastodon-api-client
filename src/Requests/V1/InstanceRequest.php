<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\V1;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Request;
use Vazaha\Mastodon\Results\V1\InstanceResult;

/**
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\V1\InstanceResult>
 */
abstract class InstanceRequest extends Request implements RequestInterface
{
    public function getResultClass(): string
    {
        return InstanceResult::class;
    }
}
