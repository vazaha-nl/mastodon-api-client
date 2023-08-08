<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Statuses;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Translate a status.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\TranslationResult>
 *
 * @see https://docs.joinmastodon.org/methods/statuses/#translate
 */
final class TranslateRequest extends \Vazaha\Mastodon\Requests\TranslationRequest implements RequestInterface
{
    /**
     * @param string  $id   the ID of the Status in the database
     * @param ?string $lang The status content will be translated into this language. Defaults to the user's current locale.
     */
    public function __construct(
        public string $id,
        public ?string $lang = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/statuses/%s/translate', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'lang' => $this->lang,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
