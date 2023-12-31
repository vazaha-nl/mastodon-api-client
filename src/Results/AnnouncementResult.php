<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\AnnouncementModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\AnnouncementModel> $models
 * @property \Vazaha\Mastodon\Requests\AnnouncementRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\AnnouncementResult<array-key, \Vazaha\Mastodon\Models\AnnouncementModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\AnnouncementResult<array-key, \Vazaha\Mastodon\Models\AnnouncementModel> getPreviousPage()
 */
class AnnouncementResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return AnnouncementModel::class;
    }
}
