<?php

declare(strict_types=1);

/*
 * This file is auto generated! Do not edit!
 */

namespace Vazaha\Mastodon\Collections;

use Vazaha\Mastodon\Abstracts\ModelCollection;
use Vazaha\Mastodon\Models\FeaturedTagModel;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\FeaturedTagModel
 *
 * @extends ModelCollection<TKey, TModel>
 */
class FeaturedTagCollection extends ModelCollection
{
    public static function getModelClass(): string
    {
        return FeaturedTagModel::class;
    }
}
