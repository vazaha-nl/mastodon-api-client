<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\PreferencesModel;

/**
 * @property array<\Vazaha\Mastodon\Models\PreferencesModel> $models
 * @property \Vazaha\Mastodon\Requests\PreferencesRequest    $request
 *
 * @method \Vazaha\Mastodon\Models\PreferencesModel|null   getModel()
 * @method array<\Vazaha\Mastodon\Models\PreferencesModel> getModels()
 * @method \Vazaha\Mastodon\Results\PreferencesResult|null getNextResult()
 * @method \Vazaha\Mastodon\Results\PreferencesResult|null getPreviousResult()
 */
class PreferencesResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return PreferencesModel::class;
    }
}
