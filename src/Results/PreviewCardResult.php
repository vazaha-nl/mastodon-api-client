<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\PreviewCardModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\PreviewCardModel> $models
 * @property \Vazaha\Mastodon\Requests\PreviewCardRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\PreviewCardModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\PreviewCardModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\PreviewCardResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\PreviewCardResult                                     getPreviousResult()
 */
class PreviewCardResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return PreviewCardModel::class;
    }
}
