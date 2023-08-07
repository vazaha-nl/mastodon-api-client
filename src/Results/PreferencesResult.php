<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\PreferencesModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\PreferencesModel> $models
 * @property \Vazaha\Mastodon\Requests\PreferencesRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\PreferencesResult<array-key, \Vazaha\Mastodon\Models\PreferencesModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\PreferencesResult<array-key, \Vazaha\Mastodon\Models\PreferencesModel> getPreviousPage()
 */
class PreferencesResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return PreferencesModel::class;
    }
}
