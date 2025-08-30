<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Instance;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\TermsOfServiceResult;

/**
 * View a specific version of the terms of service.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\TermsOfServiceResult>
 *
 * @see https://docs.joinmastodon.org/methods/instance/#terms_of_service_date
 */
final class TermsOfServiceDateRequest extends Request implements RequestInterface
{
    /**
     * @param string $date the effective date of the terms of service
     *
     * @see https://docs.joinmastodon.org/methods/instance/#terms_of_service_date
     */
    public function __construct(
        public string $date,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/instance/terms_of_service/%s', urlencode($this->date));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getResultClass(): string
    {
        return TermsOfServiceResult::class;
    }
}
