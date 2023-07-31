<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Models\CohortDataModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\CohortDataModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class CohortDataCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return CohortDataModel::class;
    }
}
