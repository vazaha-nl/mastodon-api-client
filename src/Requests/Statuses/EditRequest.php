<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Statuses;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Edit a status.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#edit
 */
final class EditRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Status in the database.
         */
        public string $id,

        /**
         * The plain text content of the status.
         */
        public ?string $status = null,

        /**
         * The plain text subject or content warning of the status.
         */
        public ?string $spoiler_text = null,

        /**
         * Whether the status should be marked as sensitive.
         */
        public ?bool $sensitive = null,

        /**
         * ISO 639 language code for the status.
         */
        public ?string $language = null,

        /**
         * Include Attachment IDs to be attached as media. If provided, `status`
         * becomes optional, and `poll` cannot be used.
         *
         * @var null|array<string> $media_ids
         */
        public ?array $media_ids = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/statuses/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'status' => $this->status,
            'spoiler_text' => $this->spoiler_text,
            'sensitive' => $this->sensitive,
            'language' => $this->language,
            'media_ids' => $this->media_ids,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }
}
