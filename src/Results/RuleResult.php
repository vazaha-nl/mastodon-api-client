<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\RuleModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\RuleModel> $models
 * @property \Vazaha\Mastodon\Requests\RuleRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\RuleResult<array-key, \Vazaha\Mastodon\Models\RuleModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\RuleResult<array-key, \Vazaha\Mastodon\Models\RuleModel> getPreviousPage()
 */
class RuleResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return RuleModel::class;
    }
}
