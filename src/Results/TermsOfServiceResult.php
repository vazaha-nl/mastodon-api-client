<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\TermsOfServiceModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\TermsOfServiceModel> $models
 *
 * @method null|\Vazaha\Mastodon\Results\TermsOfServiceResult<array-key, \Vazaha\Mastodon\Models\TermsOfServiceModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\TermsOfServiceResult<array-key, \Vazaha\Mastodon\Models\TermsOfServiceModel> getPreviousPage()
 */
class TermsOfServiceResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return TermsOfServiceModel::class;
    }
}
