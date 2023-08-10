<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Helpers\UploadFile;
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
    /**
     * @param ?string      $display_name      the display name to use for the profile
     * @param ?string      $note              the account bio
     * @param ?UploadFile  $avatar            Avatar image encoded using `multipart/form-data`
     * @param ?UploadFile  $header            Header image encoded using `multipart/form-data`
     * @param ?bool        $locked            whether manual approval of follow requests is required
     * @param ?bool        $bot               whether the account has a bot flag
     * @param ?bool        $discoverable      whether the account should be shown in the profile directory
     * @param null|mixed[] $fields_attributes The profile fields to be set. Inside this hash, the key is an integer cast to a string (although the exact integer does not matter), and the value is another hash including `name` and `value`. By default, max 4 fields.
     * @param null|mixed[] $source            source[privacy]: Default post privacy for authored statuses. Can be `public`, `unlisted`, or `private`.
     */
    public function __construct(
        public ?string $display_name = null,
        public ?string $note = null,
        public ?UploadFile $avatar = null,
        public ?UploadFile $header = null,
        public ?bool $locked = null,
        public ?bool $bot = null,
        public ?bool $discoverable = null,
        public ?array $fields_attributes = null,
        public ?array $source = null,
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
            'source' => $this->source,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PATCH;
    }
}
