<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\TranslationModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\TranslationModel> $models
 * @property \Vazaha\Mastodon\Requests\TranslationRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\TranslationResult<array-key, \Vazaha\Mastodon\Models\TranslationModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\TranslationResult<array-key, \Vazaha\Mastodon\Models\TranslationModel> getPreviousPage()
 */
class TranslationResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return TranslationModel::class;
    }
}
