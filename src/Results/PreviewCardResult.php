<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\PreviewCardModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\PreviewCardModel> $models
 * @property \Vazaha\Mastodon\Requests\PreviewCardRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\PreviewCardResult<array-key, \Vazaha\Mastodon\Models\PreviewCardModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\PreviewCardResult<array-key, \Vazaha\Mastodon\Models\PreviewCardModel> getPreviousPage()
 */
class PreviewCardResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return PreviewCardModel::class;
    }
}
