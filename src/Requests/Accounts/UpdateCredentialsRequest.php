<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Update account credentials.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\AccountResult>
 *
 * @see https://docs.joinmastodon.org/methods/accounts/#update_credentials
 */
final class UpdateCredentialsRequest extends \Vazaha\Mastodon\Requests\AccountRequest implements RequestInterface
{
    public function __construct(
        /**
         * The display name to use for the profile.
         */
        public ?string $display_name = null,

        /**
         * The account bio.
         */
        public ?string $note = null,

        /**
         * Avatar image encoded using `multipart/form-data`.
         */
        public ?string $avatar = null,

        /**
         * Header image encoded using `multipart/form-data`.
         */
        public ?string $header = null,

        /**
         * Whether manual approval of follow requests is required.
         */
        public ?bool $locked = null,

        /**
         * Whether the account has a bot flag.
         */
        public ?bool $bot = null,

        /**
         * Whether the account should be shown in the profile directory.
         */
        public ?bool $discoverable = null,

        /**
         * The profile fields to be set. Inside this hash, the key is an integer cast
         * to a string (although the exact integer does not matter), and the value is
         * another hash including `name` and `value`. By default, max 4 fields.
         *
         * @var null|mixed[] $fields_attributes
         */
        public ?array $fields_attributes = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/accounts/update_credentials';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'display_name' => $this->display_name,
            'note' => $this->note,
            'avatar' => $this->avatar,
            'header' => $this->header,
            'locked' => $this->locked,
            'bot' => $this->bot,
            'discoverable' => $this->discoverable,
            'fields_attributes' => $this->fields_attributes,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PATCH;
    }
}
