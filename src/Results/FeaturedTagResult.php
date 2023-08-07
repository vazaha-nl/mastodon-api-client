<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\FeaturedTagModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\FeaturedTagModel> $models
 * @property \Vazaha\Mastodon\Requests\FeaturedTagRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\FeaturedTagResult<array-key, \Vazaha\Mastodon\Models\FeaturedTagModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\FeaturedTagResult<array-key, \Vazaha\Mastodon\Models\FeaturedTagModel> getPreviousPage()
 */
class FeaturedTagResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return FeaturedTagModel::class;
    }
}
