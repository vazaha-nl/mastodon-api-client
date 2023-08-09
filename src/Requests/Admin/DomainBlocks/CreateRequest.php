<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\DomainBlocks;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Block a domain from federating.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\DomainBlockResult>
 *
 * @see https://docs.joinmastodon.org/methods/admin/domain_blocks/#create
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\Admin\DomainBlockRequest implements RequestInterface
{
    /**
     * @param string  $domain          the domain to block federation with
     * @param ?string $severity        Whether to apply a `silence`, `suspend`, or `noop` to the domain. Defaults to `silence`
     * @param ?bool   $reject_media    Whether media attachments should be rejected. Defaults to false
     * @param ?bool   $reject_reports  Whether reports from this domain should be rejected. Defaults to false
     * @param ?string $private_comment a private note about this domain block, visible only to admins
     * @param ?string $public_comment  a public note about this domain block, optionally shown on the about page
     * @param ?bool   $obfuscate       Whether to partially censor the domain when shown in public. Defaults to false
     */
    public function __construct(
        public string $domain,
        public ?string $severity = null,
        public ?bool $reject_media = null,
        public ?bool $reject_reports = null,
        public ?string $private_comment = null,
        public ?string $public_comment = null,
        public ?bool $obfuscate = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/domain_blocks';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'domain' => $this->domain,
            'severity' => $this->severity,
            'reject_media' => $this->reject_media,
            'reject_reports' => $this->reject_reports,
            'private_comment' => $this->private_comment,
            'public_comment' => $this->public_comment,
            'obfuscate' => $this->obfuscate,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
