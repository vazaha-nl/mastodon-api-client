<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results\Admin;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel;
use Vazaha\Mastodon\Results\Result;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel> $models
 * @property \Vazaha\Mastodon\Requests\Admin\EmailDomainBlockRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel                                                                   getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel>                             getModels()
 * @method null|\Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\Admin\EmailDomainBlockResult<array-key, \Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel> getPreviousResult()
 */
class EmailDomainBlockResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return EmailDomainBlockModel::class;
    }
}
