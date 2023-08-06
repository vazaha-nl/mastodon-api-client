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
 */
final class CreateRequest extends \Vazaha\Mastodon\Requests\Admin\DomainBlockRequest implements RequestInterface
{
    public function __construct(
        /**
         * The domain to block federation with.
         */
        public string $domain,

        /**
         * Whether to apply a `silence`, `suspend`, or `noop` to the domain. Defaults
         * to `silence`.
         */
        public ?string $severity = null,

        /**
         * Whether media attachments should be rejected. Defaults to false.
         */
        public ?bool $reject_media = null,

        /**
         * Whether reports from this domain should be rejected. Defaults to false.
         */
        public ?bool $reject_reports = null,

        /**
         * A private note about this domain block, visible only to admins.
         */
        public ?string $private_comment = null,

        /**
         * A public note about this domain block, optionally shown on the about page.
         */
        public ?string $public_comment = null,

        /**
         * Whether to partially censor the domain when shown in public. Defaults to
         * false.
         */
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
