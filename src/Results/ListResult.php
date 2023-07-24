<?php

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;

/**
 * @property array<\Vazaha\Mastodon\Models\ListModel> $models
 * @method array<\Vazaha\Mastodon\Models\ListModel> getModels()
 * @method \Vazaha\Mastodon\Models\ListModel|null getModel()
 */
class ListResult extends Result implements ResultInterface
{
}
