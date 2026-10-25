<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Profile;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Helpers\UploadFile;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\ProfileResult;

/**
 * Update current user profile.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ProfileResult>
 *
 * @see https://docs.joinmastodon.org/methods/profile/#patch
 */
final class PatchRequest extends Request implements RequestInterface
{
    /**
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
    public function __construct(
        public ?string $display_name = null,
        public ?string $note = null,
        public ?UploadFile $avatar = null,
        public ?string $avatar_description = null,
        public ?UploadFile $header = null,
        public ?string $header_description = null,
        public ?bool $locked = null,
        public ?bool $bot = null,
        public ?bool $discoverable = null,
        public ?bool $hide_collections = null,
        public ?bool $indexable = null,
        public ?bool $show_media = null,
        public ?bool $show_media_replies = null,
        public ?bool $show_featured = null,
        public ?array $attribution_domains = null,
        public ?array $fields_attributes = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/profile';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getFormParams(): array
    {
        return [
            'display_name' => $this->display_name,
            'note' => $this->note,
            'avatar' => $this->avatar,
            'avatar_description' => $this->avatar_description,
            'header' => $this->header,
            'header_description' => $this->header_description,
            'locked' => $this->locked,
            'bot' => $this->bot,
            'discoverable' => $this->discoverable,
            'hide_collections' => $this->hide_collections,
            'indexable' => $this->indexable,
            'show_media' => $this->show_media,
            'show_media_replies' => $this->show_media_replies,
            'show_featured' => $this->show_featured,
            'attribution_domains' => $this->attribution_domains,
            'fields_attributes' => $this->fields_attributes,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PATCH;
    }

    public function getResultClass(): string
    {
        return ProfileResult::class;
    }
}
