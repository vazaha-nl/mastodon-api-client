<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\TranslationModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\TranslationModel> $models
 * @property \Vazaha\Mastodon\Requests\TranslationRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\TranslationModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\TranslationModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\TranslationResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\TranslationResult                                     getPreviousResult()
 */
class TranslationResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return TranslationModel::class;
    }
}
