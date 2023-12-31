<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\CredentialAccountModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\CredentialAccountModel> $models
 * @property \Vazaha\Mastodon\Requests\CredentialAccountRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\CredentialAccountResult<array-key, \Vazaha\Mastodon\Models\CredentialAccountModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\CredentialAccountResult<array-key, \Vazaha\Mastodon\Models\CredentialAccountModel> getPreviousPage()
 */
class CredentialAccountResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return CredentialAccountModel::class;
    }
}
