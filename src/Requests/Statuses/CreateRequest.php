<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Statuses;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\StatusResult;

/**
 * Post a new status.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param string                       $status                The text content of the status. If `media_ids` is provided, this becomes optional. Attaching a `poll` is optional while `status` is provided.
     * @param list<string>                 $media_ids             Include Attachment IDs to be attached as media. If provided, `status` becomes optional, and `poll` cannot be used.
     * @param null|array<array-key, mixed> $poll                  poll[options][]: Possible answers to the poll. If provided, `media_ids` cannot be used, and `poll[expires_in]` must be provided.
     * @param ?string                      $in_reply_to_id        ID of the status being replied to, if status is a reply
     * @param ?bool                        $sensitive             mark status and attached media as sensitive? Defaults to false
     * @param ?string                      $spoiler_text          Text to be shown as a warning or subject before the actual content. Statuses are generally collapsed behind this field.
     * @param ?string                      $visibility            sets the visibility of the posted status to `public`, `unlisted`, `private`, `direct`
     * @param ?string                      $language              ISO 639-1 language code for this status
     * @param ?string                      $scheduled_at          Datetime at which to schedule a status. Providing this parameter will cause ScheduledStatus to be returned instead of Status. Must be at least 5 minutes in the future.
     * @param ?string                      $quoted_status_id      ID of the status being quoted, if any. Will raise an error if the status does not exist, the author does not have access to it, or quoting is denied by Mastodon's understanding of the attached quote policy. All posts except Private Mentions (`direct` visibility) are quotable by their author. Quoting a `private` post will restrict the quoting post's `visibility` to `private` or `direct` (if the given `visibility` is `public` or `unlisted`, `private` will be used instead). An error will be returned when making a quote post with `direct` visibility and the quote author is not explicitly mentioned. If the `status` text doesn't include a link to the quoted post, Mastodon will prepend a `<p class="quote-inline">RE: <a href="…">…</a></p>` paragraph for backward compatibility (such a paragraph will be hidden by Mastodon's web interface).
     * @param ?string                      $quote_approval_policy Sets who is allowed to quote the status. When omitted, the user's default setting will be used instead. Ignored if `visibility` is `private` or `direct`, in which case the policy will always be set to `nobody`.\
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#create
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
        public ?string $quoted_status_id = null,
        public ?string $quote_approval_policy = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/statuses';
    }

    public function getQueryParams(): array
    {
        return [];
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
            'quoted_status_id' => $this->quoted_status_id,
            'quote_approval_policy' => $this->quote_approval_policy,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return StatusResult::class;
    }
}
