<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\CanonicalEmailBlockModel> getPreviousPage()
 */
class CanonicalEmailBlockResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return CanonicalEmailBlockModel::class;
    }
}
