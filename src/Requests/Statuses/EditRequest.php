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
    /**
     * @param string             $id           the ID of the Status in the database
     * @param ?string            $status       the plain text content of the status
     * @param ?string            $spoiler_text the plain text subject or content warning of the status
     * @param ?bool              $sensitive    whether the status should be marked as sensitive
     * @param ?string            $language     ISO 639 language code for the status
     * @param null|array<string> $media_ids    Include Attachment IDs to be attached as media. If provided, `status` becomes optional, and `poll` cannot be used.
     * @param null|mixed[]       $poll         poll[options][]: Possible answers to the poll. If provided, `media_ids` cannot be used, and `poll[expires_in]` must be provided.
     */
    public function __construct(
        public string $id,
        public ?string $status = null,
        public ?string $spoiler_text = null,
        public ?bool $sensitive = null,
        public ?string $language = null,
        public ?array $media_ids = null,
        public ?array $poll = null,
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
            'poll' => $this->poll,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }
}
