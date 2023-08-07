<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\TagModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\TagModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\TagRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\Admin\TagResult<array-key, \Vazaha\Mastodon\Models\Admin\TagModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\Admin\TagResult<array-key, \Vazaha\Mastodon\Models\Admin\TagModel> getPreviousPage()
 */
class TagResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return TagModel::class;
    }
}
