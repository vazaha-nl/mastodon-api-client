<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Instance;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\PrivacyPolicyResult;

/**
 * View privacy policy.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\PrivacyPolicyResult>
 *
 * @see https://docs.joinmastodon.org/methods/instance/#privacy_policy
 */
final class PrivacyPolicyRequest extends Request implements RequestInterface
{
    /**
     * @see https://docs.joinmastodon.org/methods/instance/#privacy_policy
     */
    public function __construct(
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/instance/privacy_policy';
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
        return PrivacyPolicyResult::class;
    }
}
