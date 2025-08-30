<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Notifications;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

/**
 * Dismiss multiple notification requests.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyOrUnknownResult>
 *
 * @see https://docs.joinmastodon.org/methods/notifications/#dismiss-multiple-requests
 */
final class DismissMultipleRequestsRequest extends Request implements RequestInterface
{
    /**
     * @param list<string> $_id the IDs of the notification requests in the database
     *
     * @see https://docs.joinmastodon.org/methods/notifications/#dismiss-multiple-requests
     */
    public function __construct(
        public array $_id = [],
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/notifications/requests/accept';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            '_id' => $this->_id,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return EmptyOrUnknownResult::class;
    }
}
