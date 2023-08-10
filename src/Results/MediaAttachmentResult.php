<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Abstracts\Result;
use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\MediaAttachmentModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\MediaAttachmentModel> $models
 * @property \Vazaha\Mastodon\Requests\MediaAttachmentRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Results\MediaAttachmentResult<array-key, \Vazaha\Mastodon\Models\MediaAttachmentModel> getNextPage()
 * @method null|\Vazaha\Mastodon\Results\MediaAttachmentResult<array-key, \Vazaha\Mastodon\Models\MediaAttachmentModel> getPreviousPage()
 */
class MediaAttachmentResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return MediaAttachmentModel::class;
    }
}
