<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Collections;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Helpers\UploadFile;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\WrappedCollectionRequest;
use Vazaha\Mastodon\Results\WrappedCollectionResult;

/**
 * Update a Collection
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\WrappedCollectionResult>
 *
 * @see https://docs.joinmastodon.org/methods/collections/#update_collection
 */
final class UpdateCollectionRequest extends Request implements RequestInterface
{

    /**
         * @param string $id The ID of the Collection.
         * @param ?string $name A name for this Collection, max. 40 characters.
         * @param ?string $description A longer description of this Collection, max. 100 characters. String is taken "as is", which means there is currently no special handling of URLs and hashtags and no support for custom emoji.
         * @param ?string $language One of Mastodon's supported language codes (two letter ISO 639-1 plus exceptions).
         * @param ?string $tag_name A single hashtag that describes the Collection.
         * @param ?bool $sensitive Whether this Collection should be marked as sensitive.
         * @param ?bool $discoverable Whether this Collection should appear on the profile of the user, in search results and other discovery mechanisms.
             * @link https://docs.joinmastodon.org/methods/collections/#update_collection
        
     */
    public function __construct(
    public string $id,

    public ?string $name = null,

    public ?string $description = null,

    public ?string $language = null,

    public ?string $tag_name = null,

    public ?bool $sensitive = null,

    public ?bool $discoverable = null,

    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/collections/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
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
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PATCH;
    }

    public function getResultClass(): string
    {
        return WrappedCollectionResult::class;
    }
}
