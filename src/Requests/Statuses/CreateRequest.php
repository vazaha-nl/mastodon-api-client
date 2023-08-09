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
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#create
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\StatusRequest implements RequestInterface
{
    /**
     * @param string        $status         The text content of the status. If `media_ids` is provided, this becomes optional. Attaching a `poll` is optional while `status` is provided.
     * @param array<string> $media_ids      Include Attachment IDs to be attached as media. If provided, `status` becomes optional, and `poll` cannot be used.
     * @param null|mixed[]  $poll           poll[options][]: Possible answers to the poll. If provided, `media_ids` cannot be used, and `poll[expires_in]` must be provided.
     * @param ?string       $in_reply_to_id ID of the status being replied to, if status is a reply
     * @param ?bool         $sensitive      mark status and attached media as sensitive? Defaults to false
     * @param ?string       $spoiler_text   Text to be shown as a warning or subject before the actual content. Statuses are generally collapsed behind this field.
     * @param ?string       $visibility     sets the visibility of the posted status to `public`, `unlisted`, `private`, `direct`
     * @param ?string       $language       ISO 639 language code for this status
     * @param ?string       $scheduled_at   ISO 8601 Datetime at which to schedule a status. Providing this parameter will cause ScheduledStatus to be returned instead of Status. Must be at least 5 minutes in the future.
     */
    public function __construct(
        public string $status,
        public array $media_ids = [],
        public ?array $poll = null,
        public ?string $in_reply_to_id = null,
        public ?bool $sensitive = null,
        public ?string $spoiler_text = null,
        public ?string $visibility = null,
        public ?string $language = null,
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
            'poll' => $this->poll,
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
