<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\CustomEmojiModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\CustomEmojiModel> $models
 * @property \Vazaha\Mastodon\Requests\CustomEmojiRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\CustomEmojiModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\CustomEmojiModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\CustomEmojiResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\CustomEmojiResult                                     getPreviousResult()
 */
class CustomEmojiResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return CustomEmojiModel::class;
    }
}
