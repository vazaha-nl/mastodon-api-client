<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\PreferencesModel;

/**
 * @property array<\Vazaha\Mastodon\Models\PreferencesModel> $models
 * @property \Vazaha\Mastodon\Requests\PreferencesRequest    $request
 *
 * @method null|\Vazaha\Mastodon\Models\PreferencesModel   getModel()
 * @method array<\Vazaha\Mastodon\Models\PreferencesModel> getModels()
 * @method null|\Vazaha\Mastodon\Results\PreferencesResult getNextResult()
 * @method null|\Vazaha\Mastodon\Results\PreferencesResult getPreviousResult()
 */
class PreferencesResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return PreferencesModel::class;
    }
}
