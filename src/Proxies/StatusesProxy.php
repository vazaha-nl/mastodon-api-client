<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\ContextModel;
use Vazaha\Mastodon\Models\PreviewCardModel;
use Vazaha\Mastodon\Models\StatusModel;
use Vazaha\Mastodon\Models\StatusSourceModel;
use Vazaha\Mastodon\Models\TranslationModel;
use Vazaha\Mastodon\Requests\Statuses\BookmarkRequest;
use Vazaha\Mastodon\Requests\Statuses\BoostRequest;
use Vazaha\Mastodon\Requests\Statuses\CardRequest;
use Vazaha\Mastodon\Requests\Statuses\ContextRequest;
use Vazaha\Mastodon\Requests\Statuses\CreateRequest;
use Vazaha\Mastodon\Requests\Statuses\DeleteRequest;
use Vazaha\Mastodon\Requests\Statuses\EditRequest;
use Vazaha\Mastodon\Requests\Statuses\FavouritedByRequest;
use Vazaha\Mastodon\Requests\Statuses\FavouriteRequest;
use Vazaha\Mastodon\Requests\Statuses\GetRequest;
use Vazaha\Mastodon\Requests\Statuses\HistoryRequest;
use Vazaha\Mastodon\Requests\Statuses\MuteRequest;
use Vazaha\Mastodon\Requests\Statuses\PinRequest;
use Vazaha\Mastodon\Requests\Statuses\RebloggedByRequest;
use Vazaha\Mastodon\Requests\Statuses\SourceRequest;
use Vazaha\Mastodon\Requests\Statuses\TranslateRequest;
use Vazaha\Mastodon\Requests\Statuses\UnbookmarkRequest;
use Vazaha\Mastodon\Requests\Statuses\UnfavouriteRequest;
use Vazaha\Mastodon\Requests\Statuses\UnmuteRequest;
use Vazaha\Mastodon\Requests\Statuses\UnpinRequest;
use Vazaha\Mastodon\Requests\Statuses\UnreblogRequest;
use Vazaha\Mastodon\Results\AccountResult;
use Vazaha\Mastodon\Results\StatusEditResult;

class StatusesProxy extends Proxy
{
    /**
     * Bookmark a status.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#bookmark
     */
    public function bookmark(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new BookmarkRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Boost a status.
     *
     * @param string  $id         the ID of the Status in the database
     * @param ?string $visibility Any visibility except `limited` or `direct` (i.e. `public`, `unlisted`, `private`). Defaults to public. Currently unused in UI.
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#boost
     */
    public function boost(
        string $id,
        ?string $visibility = null,
    ): StatusModel {
        $result = $this->apiClient->send(new BoostRequest(
            $id,
            $visibility,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * (DEPRECATED) Fetch preview card.
     *
     * @param string $id the local ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#card
     */
    public function card(
        string $id,
    ): PreviewCardModel {
        $result = $this->apiClient->send(new CardRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\PreviewCardModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get parent and child statuses in context.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#context
     */
    public function context(
        string $id,
    ): ContextModel {
        $result = $this->apiClient->send(new ContextRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\ContextModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Post a new status.
     *
     * @param string        $status         The text content of the status. If `media_ids` is provided, this becomes optional. Attaching a `poll` is optional while `status` is provided.
     * @param array<string> $media_ids      Include Attachment IDs to be attached as media. If provided, `status` becomes optional, and `poll` cannot be used.
     * @param ?string       $in_reply_to_id ID of the status being replied to, if status is a reply
     * @param ?bool         $sensitive      mark status and attached media as sensitive? Defaults to false
     * @param ?string       $spoiler_text   Text to be shown as a warning or subject before the actual content. Statuses are generally collapsed behind this field.
     * @param ?string       $visibility     sets the visibility of the posted status to `public`, `unlisted`, `private`, `direct`
     * @param ?string       $language       ISO 639 language code for this status
     * @param ?string       $scheduled_at   ISO 8601 Datetime at which to schedule a status. Providing this parameter will cause ScheduledStatus to be returned instead of Status. Must be at least 5 minutes in the future.
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#create
     */
    public function create(
        string $status,
        array $media_ids,
        ?string $in_reply_to_id = null,
        ?bool $sensitive = null,
        ?string $spoiler_text = null,
        ?string $visibility = null,
        ?string $language = null,
        ?string $scheduled_at = null,
    ): StatusModel {
        $result = $this->apiClient->send(new CreateRequest(
            $status,
            $media_ids,
            $in_reply_to_id,
            $sensitive,
            $spoiler_text,
            $visibility,
            $language,
            $scheduled_at,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Delete a status.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#delete
     */
    public function delete(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new DeleteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Edit a status.
     *
     * @param string             $id           the ID of the Status in the database
     * @param ?string            $status       the plain text content of the status
     * @param ?string            $spoiler_text the plain text subject or content warning of the status
     * @param ?bool              $sensitive    whether the status should be marked as sensitive
     * @param ?string            $language     ISO 639 language code for the status
     * @param null|array<string> $media_ids    Include Attachment IDs to be attached as media. If provided, `status` becomes optional, and `poll` cannot be used.
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#edit
     */
    public function edit(
        string $id,
        ?string $status = null,
        ?string $spoiler_text = null,
        ?bool $sensitive = null,
        ?string $language = null,
        ?array $media_ids = null,
    ): StatusModel {
        $result = $this->apiClient->send(new EditRequest(
            $id,
            $status,
            $spoiler_text,
            $sensitive,
            $language,
            $media_ids,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Favourite a status.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#favourite
     */
    public function favourite(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new FavouriteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * See who favourited a status.
     *
     * @param string $id    the ID of the Status in the database
     * @param ?int   $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#favourited_by
     */
    public function favouritedBy(
        string $id,
        ?int $limit = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel> */
        $models = $this->apiClient
            ->send(new FavouritedByRequest(
                $id,
                $limit,
            ));

        return $models;
    }

    /**
     * View a single status.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#get
     */
    public function get(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new GetRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View edit history of a status.
     *
     * @param string $id the local ID of the Status in the database
     *
     * @return \Vazaha\Mastodon\Results\StatusEditResult<array-key,\Vazaha\Mastodon\Models\StatusEditModel>
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#history
     */
    public function history(
        string $id,
    ): StatusEditResult {
        /** @var \Vazaha\Mastodon\Results\StatusEditResult<array-key,\Vazaha\Mastodon\Models\StatusEditModel> */
        $models = $this->apiClient
            ->send(new HistoryRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Mute a conversation.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#mute
     */
    public function mute(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new MuteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Pin status to profile.
     *
     * @param string $id The local ID of the Status in the database. The status should be authored by the authorized account.
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#pin
     */
    public function pin(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new PinRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * See who boosted a status.
     *
     * @param string $id    the ID of the Status in the database
     * @param ?int   $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#reblogged_by
     */
    public function rebloggedBy(
        string $id,
        ?int $limit = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel> */
        $models = $this->apiClient
            ->send(new RebloggedByRequest(
                $id,
                $limit,
            ));

        return $models;
    }

    /**
     * View status source.
     *
     * @param string $id the local ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#source
     */
    public function source(
        string $id,
    ): StatusSourceModel {
        $result = $this->apiClient->send(new SourceRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusSourceModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Translate a status.
     *
     * @param string  $id   the ID of the Status in the database
     * @param ?string $lang The status content will be translated into this language. Defaults to the user's current locale.
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#translate
     */
    public function translate(
        string $id,
        ?string $lang = null,
    ): TranslationModel {
        $result = $this->apiClient->send(new TranslateRequest(
            $id,
            $lang,
        ));

        /** @var null|\Vazaha\Mastodon\Models\TranslationModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Undo bookmark of a status.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#unbookmark
     */
    public function unbookmark(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new UnbookmarkRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Undo favourite of a status.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#unfavourite
     */
    public function unfavourite(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new UnfavouriteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unmute a conversation.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#unmute
     */
    public function unmute(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new UnmuteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unpin status from profile.
     *
     * @param string $id the local ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#unpin
     */
    public function unpin(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new UnpinRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Undo boost of a status.
     *
     * @param string $id the ID of the Status in the database
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#unreblog
     */
    public function unreblog(
        string $id,
    ): StatusModel {
        $result = $this->apiClient->send(new UnreblogRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\StatusModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
