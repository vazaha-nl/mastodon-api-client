<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections\Poll;

use Vazaha\Mastodon\Abstracts\ModelCollection;
use Vazaha\Mastodon\Models\Poll\OptionModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\Poll\OptionModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class OptionCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return OptionModel::class;
    }
}
