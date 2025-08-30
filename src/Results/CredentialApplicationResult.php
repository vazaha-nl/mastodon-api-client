<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\CredentialApplicationModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\CredentialApplicationModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\CredentialApplicationResult<array-key, \Vazaha\Mastodon\Models\CredentialApplicationModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\CredentialApplicationResult<array-key, \Vazaha\Mastodon\Models\CredentialApplicationModel> getPreviousPage()
 */
class CredentialApplicationResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return CredentialApplicationModel::class;
    }
}
