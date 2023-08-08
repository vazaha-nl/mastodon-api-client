<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Media;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Update media attachment.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\MediaAttachmentResult>
 *
 * @see https://docs.joinmastodon.org/methods/media/#update
 */
final class UpdateRequest extends \Vazaha\Mastodon\Requests\MediaAttachmentRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the MediaAttachment in the database.
         */
        public string $id,

        /**
         * The custom thumbnail of the media to be attached, encoded using multipart
         * form data.
         *
         * @var null|mixed[] $thumbnail
         */
        public ?array $thumbnail = null,

        /**
         * A plain-text description of the media, for accessibility purposes.
         */
        public ?string $description = null,

        /**
         * Two floating points (x,y), comma-delimited, ranging from -1.0 to 1.0. See
         * [Focal points for cropping media thumbnails]({{&lt; relref
         * &quot;api/guidelines#focal-points&quot; &gt;}}) for more information.
         */
        public ?string $focus = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/media/%s', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'thumbnail' => $this->thumbnail,
            'description' => $this->description,
            'focus' => $this->focus,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::PUT;
    }
}
