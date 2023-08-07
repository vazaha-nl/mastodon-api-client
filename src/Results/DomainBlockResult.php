<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\DomainBlockModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\DomainBlockModel> $models
 * @property \Vazaha\Mastodon\Requests\DomainBlockRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\DomainBlockResult<array-key, \Vazaha\Mastodon\Models\DomainBlockModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\DomainBlockResult<array-key, \Vazaha\Mastodon\Models\DomainBlockModel> getPreviousPage()
 */
class DomainBlockResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return DomainBlockModel::class;
    }
}
