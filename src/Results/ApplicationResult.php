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
 * @method null|\Vazaha\Mastodon\Results\ApplicationResult<array-key, \Vazaha\Mastodon\Models\ApplicationModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\ApplicationResult<array-key, \Vazaha\Mastodon\Models\ApplicationModel> getPreviousPage()
 */
class ApplicationResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ApplicationModel::class;
    }
}
