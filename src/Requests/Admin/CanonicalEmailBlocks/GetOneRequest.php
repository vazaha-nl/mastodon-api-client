<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlocks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Show a single canonical email block.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\CanonicalEmailBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/canonical_email_blocks/#get-one
 */
final class GetOneRequest extends \Vazaha\Mastodon\Requests\Admin\CanonicalEmailBlockRequest implements RequestInterface
{
    /**
     * @param string $id the ID of the Admin::CanonicalEmailBlock in the database
     */
    public function __construct(
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/admin/canonical_email_blocks/%s', urlencode($this->id));
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
}
