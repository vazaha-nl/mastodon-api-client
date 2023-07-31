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
 * @method null|\Vazaha\Mastodon\Models\FeaturedTagModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\FeaturedTagModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\FeaturedTagResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\FeaturedTagResult                                     getPreviousResult()
 */
class FeaturedTagResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return FeaturedTagModel::class;
    }
}
