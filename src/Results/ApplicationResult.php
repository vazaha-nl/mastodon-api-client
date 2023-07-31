<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ApplicationModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ApplicationModel> $models
 * @property \Vazaha\Mastodon\Requests\ApplicationRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\ApplicationModel                                       getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ApplicationModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\ApplicationResult                                     getNextResult()
 * @method null|\Vazaha\Mastodon\Results\ApplicationResult                                     getPreviousResult()
 */
class ApplicationResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ApplicationModel::class;
    }
}
