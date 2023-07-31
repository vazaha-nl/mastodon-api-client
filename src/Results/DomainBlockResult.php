<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\DomainBlockModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\DomainBlockModel> $models
 * @property \Vazaha\Mastodon\Requests\DomainBlockRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\DomainBlockModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\DomainBlockModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\DomainBlockResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\DomainBlockResult                                     getPreviousResult()
 */
class DomainBlockResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return DomainBlockModel::class;
    }
}
