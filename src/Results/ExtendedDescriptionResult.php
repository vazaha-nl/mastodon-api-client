<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ExtendedDescriptionModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ExtendedDescriptionModel> $models
 * @property \Vazaha\Mastodon\Requests\ExtendedDescriptionRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\ExtendedDescriptionModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ExtendedDescriptionModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\ExtendedDescriptionResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\ExtendedDescriptionResult                                     getPreviousResult()
 */
class ExtendedDescriptionResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ExtendedDescriptionModel::class;
    }
}
