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
 * Edit a status' interaction policies.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#edit_interaction_policy
 */
final class EditInteractionPolicyRequest extends Request implements RequestInterface
{
    /**
     * @param string  $id                    the ID of the Status in the database
     * @param ?string $quote_approval_policy Sets who is allowed to quote the status. Ignored if `visibility` is `private` or `direct`, in which case the policy will always be set to `nobody`. Changing the policy does not invalidate past quotes.\
     *
     * @see https://docs.joinmastodon.org/methods/statuses/#edit_interaction_policy
     */
    public function __construct(
        public string $id,
        public ?string $quote_approval_policy = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/statuses/%s/interaction_policy', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getFormParams(): array
    {
        return [
            'quote_approval_policy' => $this->quote_approval_policy,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }

    public function getResultClass(): string
    {
        return StatusResult::class;
    }
}
