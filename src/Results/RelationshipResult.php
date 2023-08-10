<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\RelationshipModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\RelationshipModel> $models
 * @property \Vazaha\Mastodon\Requests\RelationshipRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\RelationshipResult<array-key, \Vazaha\Mastodon\Models\RelationshipModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\RelationshipResult<array-key, \Vazaha\Mastodon\Models\RelationshipModel> getPreviousPage()
 */
class RelationshipResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return RelationshipModel::class;
    }
}
