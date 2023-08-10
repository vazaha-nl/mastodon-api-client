<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\ConversationModel;
use Vazaha\Mastodon\Requests\Conversations\DeleteRequest;
use Vazaha\Mastodon\Requests\Conversations\GetRequest;
use Vazaha\Mastodon\Requests\Conversations\ReadRequest;
use Vazaha\Mastodon\Results\ConversationResult;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class ConversationsProxy extends Proxy
{
    /**
     * Remove a conversation.
     *
     * @param string $id the ID of the Conversation in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/conversations/#delete
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

    /**
     * View all conversations.
     *
     * @param ?int $limit Maximum number of results to return. Defaults to 20 conversations. Max 40 conversations.
     *
     * @return \Vazaha\Mastodon\Results\ConversationResult<array-key,\Vazaha\Mastodon\Models\ConversationModel>
     *
     * @see https://docs.joinmastodon.org/methods/conversations/#get
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
     * Mark a conversation as read.
     *
     * @param string $id the ID of the Conversation in the database
     *
     * @see https://docs.joinmastodon.org/methods/conversations/#read
     */
    public function read(
        string $id,
    ): ConversationModel {
        $result = $this->apiClient->send(new ReadRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\ConversationModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
