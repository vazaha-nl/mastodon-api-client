<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Statuses;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Post a new status.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    public function __construct(
        /**
         * The text content of the status. If `media_ids` is provided, this becomes
         * optional. Attaching a `poll` is optional while `status` is provided.
         */
        public string $status,

        /**
         * Include Attachment IDs to be attached as media. If provided, `status`
         * becomes optional, and `poll` cannot be used.
         *
         * @var array<string> $media_ids
         */
        public array $media_ids,

        /**
         * ID of the status being replied to, if status is a reply.
         */
        public ?string $in_reply_to_id = null,

        /**
         * Mark status and attached media as sensitive? Defaults to false.
         */
        public ?bool $sensitive = null,

        /**
         * Text to be shown as a warning or subject before the actual content.
         * Statuses are generally collapsed behind this field.
         */
        public ?string $spoiler_text = null,

        /**
         * Sets the visibility of the posted status to `public`, `unlisted`,
         * `private`, `direct`.
         */
        public ?string $visibility = null,

        /**
         * ISO 639 language code for this status.
         */
        public ?string $language = null,

        /**
         * ISO 8601 Datetime at which to schedule a status. Providing this parameter
         * will cause ScheduledStatus to be returned instead of Status. Must be at
         * least 5 minutes in the future.
         */
        public ?string $scheduled_at = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/statuses';
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
            'media_ids' => $this->media_ids,
            'in_reply_to_id' => $this->in_reply_to_id,
            'sensitive' => $this->sensitive,
            'spoiler_text' => $this->spoiler_text,
            'visibility' => $this->visibility,
            'language' => $this->language,
            'scheduled_at' => $this->scheduled_at,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
