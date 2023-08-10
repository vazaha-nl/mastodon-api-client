<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\IpBlockModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\IpBlockModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\IpBlockRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\IpBlockModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\Admin\IpBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\IpBlockModel> getPreviousPage()
 */
class IpBlockResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return IpBlockModel::class;
    }
}
