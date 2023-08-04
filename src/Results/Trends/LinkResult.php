<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Trends;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Trends\LinkModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Trends\LinkModel> $models
 * @property \Vazaha\Mastodon\Requests\Trends\LinkRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\Trends\LinkModel                                                        getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Trends\LinkModel>                  getModels()
 * @method null|\Vazaha\Mastodon\Results\Trends\LinkResult<array-key, \Vazaha\Mastodon\Models\Trends\LinkModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\Trends\LinkResult<array-key, \Vazaha\Mastodon\Models\Trends\LinkModel> getPreviousResult()
 */
class LinkResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return LinkModel::class;
    }
}
