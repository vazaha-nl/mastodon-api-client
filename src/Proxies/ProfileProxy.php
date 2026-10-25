<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Helpers\UploadFile;
use Vazaha\Mastodon\Models\CredentialAccountModel;
use Vazaha\Mastodon\Models\ProfileModel;
use Vazaha\Mastodon\Requests\Profile\DeleteRequest;
use Vazaha\Mastodon\Requests\Profile\GetRequest;
use Vazaha\Mastodon\Requests\Profile\PatchRequest;

class ProfileProxy extends Proxy
{
    /**
     * Delete profile avatar.
     *
     * @see https://docs.joinmastodon.org/methods/profile/#delete
     */
    public function delete(
    ): CredentialAccountModel {
        $result = $this->apiClient->send(new DeleteRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\CredentialAccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get current user profile.
     *
     * @see https://docs.joinmastodon.org/methods/profile/#get
     */
    public function get(
    ): ProfileModel {
        $result = $this->apiClient->send(new GetRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\ProfileModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Update current user profile.
     *
     * @param ?string                      $display_name        the display name to use for the profile
     * @param ?string                      $note                the account bio
     * @param ?UploadFile                  $avatar              Avatar image encoded using `multipart/form-data`
     * @param ?string                      $avatar_description  a plain-text description of the avatar, for accessibility purposes
     * @param ?UploadFile                  $header              Header image encoded using `multipart/form-data`
     * @param ?string                      $header_description  a plain-text description of the header, for accessibility purposes
     * @param ?bool                        $locked              whether manual approval of follow requests is required
     * @param ?bool                        $bot                 whether the account has a bot flag
     * @param ?bool                        $discoverable        whether the account should be shown in the profile directory and be available for other discovery features, like being included in Collections
     * @param ?bool                        $hide_collections    Whether to hide followers and followed accounts. This field predates the Collections feature and has nothing to do with it, despite the name.
     * @param ?bool                        $indexable           whether public posts should be searchable to anyone
     * @param ?bool                        $show_media          whether a “Media” tab with media attachments should be shown on this profile
     * @param ?bool                        $show_media_replies  whether media attachments in replies should be shown in the “Media” tab of this profile
     * @param ?bool                        $show_featured       whether a “Featured” tab should be shown on this profile
     * @param null|list<string>            $attribution_domains Domains of websites allowed to credit the account. Maximum of 10 domains.
     * @param null|array<array-key, mixed> $fields_attributes   The profile fields to be set. Each hash includes `name` and `value`. By default, max 4 fields (specified in {@link https://docs.joinmastodon.org/entities/Instance#max_profile_fields Instance#max_profile_fields}).
     *
     * @see https://docs.joinmastodon.org/methods/profile/#patch
     */
    public function patch(
        ?string $display_name = null,
        ?string $note = null,
        ?UploadFile $avatar = null,
        ?string $avatar_description = null,
        ?UploadFile $header = null,
        ?string $header_description = null,
        ?bool $locked = null,
        ?bool $bot = null,
        ?bool $discoverable = null,
        ?bool $hide_collections = null,
        ?bool $indexable = null,
        ?bool $show_media = null,
        ?bool $show_media_replies = null,
        ?bool $show_featured = null,
        ?array $attribution_domains = null,
        ?array $fields_attributes = null,
    ): ProfileModel {
        $result = $this->apiClient->send(new PatchRequest(
            $display_name,
            $note,
            $avatar,
            $avatar_description,
            $header,
            $header_description,
            $locked,
            $bot,
            $discoverable,
            $hide_collections,
            $indexable,
            $show_media,
            $show_media_replies,
            $show_featured,
            $attribution_domains,
            $fields_attributes,
        ));

        /** @var null|\Vazaha\Mastodon\Models\ProfileModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
