<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\DomainBlockModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\DomainBlockModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\DomainBlockRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\Admin\DomainBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\DomainBlockModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\Admin\DomainBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\DomainBlockModel> getPreviousPage()
 */
class DomainBlockResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return DomainBlockModel::class;
    }
}
