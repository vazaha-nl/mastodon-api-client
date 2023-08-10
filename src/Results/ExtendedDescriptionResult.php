<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ExtendedDescriptionModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ExtendedDescriptionModel> $models
 * @property \Vazaha\Mastodon\Requests\ExtendedDescriptionRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\ExtendedDescriptionResult<array-key, \Vazaha\Mastodon\Models\ExtendedDescriptionModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\ExtendedDescriptionResult<array-key, \Vazaha\Mastodon\Models\ExtendedDescriptionModel> getPreviousPage()
 */
class ExtendedDescriptionResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ExtendedDescriptionModel::class;
    }
}
