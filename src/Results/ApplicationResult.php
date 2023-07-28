<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ApplicationModel;

/**
 * @property array<\Vazaha\Mastodon\Models\ApplicationModel> $models
 *
 * @method null|\Vazaha\Mastodon\Models\ApplicationModel   getModel()
 * @method array<\Vazaha\Mastodon\Models\ApplicationModel> getModels()
 */
class ApplicationResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ApplicationModel::class;
    }
}
