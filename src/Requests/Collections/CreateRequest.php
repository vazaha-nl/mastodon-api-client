<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Collections;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\WrappedCollectionResult;

/**
 * Create a Collection.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\WrappedCollectionResult>
 *
 * @see https://docs.joinmastodon.org/methods/collections/#create
 */
final class CreateRequest extends Request implements RequestInterface
{
    /**
     * @param string            $name         A name for this Collection, max. 40 characters. String is taken "as is", which means there is currently no special handling of URLs and hashtags and no support for custom emoji.
     * @param ?string           $description  A longer description of this Collection, max. 100 characters. String is taken "as is", which means there is currently no special handling of URLs a
     * @param ?string           $language     One of Mastodon's supported language codes (two letter ISO 639-1 plus exceptions)
     * @param ?string           $tag_name     A single hashtag that describes the Collection
     * @param ?bool             $sensitive    Whether this Collection should be marked as sensitive
     * @param ?bool             $discoverable Whether this Collection should appear on the user's profile, in search results and other discovery mechanisms
     * @param null|list<string> $account_ids  IDs of the accounts to feature in this Collection
     *
     * @see https://docs.joinmastodon.org/methods/collections/#create
     */
    public function __construct(
        public string $name,
        public ?string $description = null,
        public ?string $language = null,
        public ?string $tag_name = null,
        public ?bool $sensitive = null,
        public ?bool $discoverable = null,
        public ?array $account_ids = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/collections';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getFormParams(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'language' => $this->language,
            'tag_name' => $this->tag_name,
            'sensitive' => $this->sensitive,
            'discoverable' => $this->discoverable,
            'account_ids' => $this->account_ids,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }

    public function getResultClass(): string
    {
        return WrappedCollectionResult::class;
    }
}
