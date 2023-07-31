<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections\Poll;

use Vazaha\Mastodon\Collections\ModelCollection;
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
