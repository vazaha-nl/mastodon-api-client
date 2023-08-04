<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\Announcements\DeleteReactionsRequest;
use Vazaha\Mastodon\Requests\Announcements\DismissRequest;
use Vazaha\Mastodon\Requests\Announcements\GetRequest;
use Vazaha\Mastodon\Requests\Announcements\PutReactionsRequest;
use Vazaha\Mastodon\Results\AnnouncementResult;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class AnnouncementsProxy extends Proxy
{
    /**
     * Remove a reaction from an announcement.
     *
     * @param string $id   the ID of the Announcement in the database
     * @param string $name unicode emoji, or the shortcode of a custom emoji
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function deleteReactions(
        string $id,
        string $name,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DeleteReactionsRequest(
                $id,
                $name,
            ));

        return $models;
    }

    /**
     * Dismiss an announcement.
     *
     * @param string $id the ID of the Announcement in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function dismiss(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DismissRequest(
                $id,
            ));

        return $models;
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
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function putReactions(
        string $id,
        string $name,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new PutReactionsRequest(
                $id,
                $name,
            ));

        return $models;
    }
}
