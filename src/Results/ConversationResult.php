<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;
use Vazaha\Mastodon\Models\ConversationModel;

/**
 * @property \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ConversationModel> $models
 * @property \Vazaha\Mastodon\Requests\ConversationRequest                                        $request
 *
 * @method null|\Vazaha\Mastodon\Models\ConversationModel                                                         getModel()
 * @method \Illuminate\Support\Collection<array-key, \Vazaha\Mastodon\Models\ConversationModel>                   getModels()
 * @method null|\Vazaha\Mastodon\Results\ConversationResult<array-key, \Vazaha\Mastodon\Models\ConversationModel> getNextResult()
 * @method null|\Vazaha\Mastodon\Results\ConversationResult<array-key, \Vazaha\Mastodon\Models\ConversationModel> getPreviousResult()
 */
class ConversationResult extends Result implements ResultInterface
{
    public function getModelClass(): string
    {
        return ConversationModel::class;
    }
}
