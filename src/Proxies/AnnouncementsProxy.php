<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Requests\Announcements\DeleteReactionsRequest;
use Vazaha\Mastodon\Requests\Announcements\DismissRequest;
use Vazaha\Mastodon\Requests\Announcements\GetRequest;
use Vazaha\Mastodon\Requests\Announcements\PutReactionsRequest;
use Vazaha\Mastodon\Results\AnnouncementResult;

class AnnouncementsProxy extends Proxy
{
    /**
     * Remove a reaction from an announcement.
     *
     * @param string $id   the ID of the Announcement in the database
     * @param string $name unicode emoji, or the shortcode of a custom emoji
     */
    public function deleteReactions(
        string $id,
        string $name,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new DeleteReactionsRequest(
            $id,
            $name,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Dismiss an announcement.
     *
     * @param string $id the ID of the Announcement in the database
     */
    public function dismiss(
        string $id,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new DismissRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View all announcements.
     *
     * @param ?bool $with_dismissed If true, response will include announcements dismissed by the user. Defaults to false.
     *
     * @return \Vazaha\Mastodon\Results\AnnouncementResult<array-key,\Vazaha\Mastodon\Models\AnnouncementModel>
     */
    public function get(
        ?bool $with_dismissed = null,
    ): AnnouncementResult {
        /** @var \Vazaha\Mastodon\Results\AnnouncementResult<array-key,\Vazaha\Mastodon\Models\AnnouncementModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $with_dismissed,
            ));

        return $models;
    }

    /**
     * Add a reaction to an announcement.
     *
     * @param string $id   the ID of the Announcement in the database
     * @param string $name unicode emoji, or the shortcode of a custom emoji
     */
    public function putReactions(
        string $id,
        string $name,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new PutReactionsRequest(
            $id,
            $name,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
