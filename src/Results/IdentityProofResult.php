<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\IdentityProofModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\IdentityProofModel> $models
 * @property \Vazaha\Mastodon\Requests\IdentityProofRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\IdentityProofModel                                                          getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\IdentityProofModel>                    getModels()
 * @method null|\Vazaha\Mastodon\Results\IdentityProofResult<array-key, \Vazaha\Mastodon\Models\IdentityProofModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\IdentityProofResult<array-key, \Vazaha\Mastodon\Models\IdentityProofModel> getPreviousResult()
 */
class IdentityProofResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return IdentityProofModel::class;
    }
}
