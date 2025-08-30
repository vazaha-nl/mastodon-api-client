<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\PrivacyPolicyModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\PrivacyPolicyModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\PrivacyPolicyResult<array-key, \Vazaha\Mastodon\Models\PrivacyPolicyModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\PrivacyPolicyResult<array-key, \Vazaha\Mastodon\Models\PrivacyPolicyModel> getPreviousPage()
 */
class PrivacyPolicyResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return PrivacyPolicyModel::class;
    }
}
