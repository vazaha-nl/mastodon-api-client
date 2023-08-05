<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\Conversations\DeleteRequest;
use Vazaha\Mastodon\Requests\Conversations\GetRequest;
use Vazaha\Mastodon\Requests\Conversations\ReadRequest;
use Vazaha\Mastodon\Results\ConversationResult;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class ConversationsProxy extends Proxy
{
    /**
     * Mark a conversation as read.
     *
     * @param string $id the ID of the Conversation in the database
     *
     * @return \Vazaha\Mastodon\Results\ConversationResult<array-key,\Vazaha\Mastodon\Models\ConversationModel>
     */
    public function read(
        string $id,
    ): ConversationResult {
        /** @var \Vazaha\Mastodon\Results\ConversationResult<array-key,\Vazaha\Mastodon\Models\ConversationModel> */
        $models = $this->apiClient
            ->send(new ReadRequest(
                $id,
            ));

        return $models;
    }

    /**
     * View all conversations.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 20 conversations. Max 40 conversations.
     *
     * @return \Vazaha\Mastodon\Results\ConversationResult<array-key,\Vazaha\Mastodon\Models\ConversationModel>
     */
    public function get(
        ?int $limit = null,
    ): ConversationResult {
        /** @var \Vazaha\Mastodon\Results\ConversationResult<array-key,\Vazaha\Mastodon\Models\ConversationModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $limit,
            ));

        return $models;
    }

    /**
     * Remove a conversation.
     *
     * @param string $id the ID of the Conversation in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function delete(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DeleteRequest(
                $id,
            ));

        return $models;
    }
}
