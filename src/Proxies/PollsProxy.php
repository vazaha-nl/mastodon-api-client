<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\PollModel;
use Vazaha\Mastodon\Requests\Polls\GetRequest;
use Vazaha\Mastodon\Requests\Polls\VoteRequest;

class PollsProxy extends Proxy
{
    /**
     * View a poll.
     *
     * @param string $id the ID of the Poll in the database
     */
    public function get(
        string $id,
    ): PollModel {
        $result = $this->apiClient->send(new GetRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\PollModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Vote on a poll.
     *
     * @param string     $id      the ID of the Poll in the database
     * @param array<int> $choices provide your own votes as an index for each option (starting from 0)
     */
    public function vote(
        string $id,
        array $choices,
    ): PollModel {
        $result = $this->apiClient->send(new VoteRequest(
            $id,
            $choices,
        ));

        /** @var null|\Vazaha\Mastodon\Models\PollModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
