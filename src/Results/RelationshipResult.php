<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\RelationshipModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\RelationshipModel> $models
 * @property \Vazaha\Mastodon\Requests\RelationshipRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\RelationshipModel                                                         getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\RelationshipModel>                   getModels()
 * @method null|\Vazaha\Mastodon\Results\RelationshipResult<array-key, \Vazaha\Mastodon\Models\RelationshipModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\RelationshipResult<array-key, \Vazaha\Mastodon\Models\RelationshipModel> getPreviousResult()
 */
class RelationshipResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return RelationshipModel::class;
    }
}
