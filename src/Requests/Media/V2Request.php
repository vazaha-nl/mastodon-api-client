<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Media;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Upload media as an attachment (async).
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\MediaAttachmentResult>
 *
 * @see https://docs.joinmastodon.org/methods/media/#v2
 */
final class V2Request extends \Vazaha\Mastodon\Requests\MediaAttachmentRequest implements RequestInterface
{
    public function __construct(
        /**
         * The file to be attached, encoded using multipart form data. The file must
         * have a MIME type.
         *
         * @var mixed[] $file
         */
        public array $file,

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
        return '/api/v2/media';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'file' => $this->file,
            'thumbnail' => $this->thumbnail,
            'description' => $this->description,
            'focus' => $this->focus,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
