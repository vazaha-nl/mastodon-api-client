<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Media;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Helpers\UploadFile;
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
    /**
     * @param string      $id          the ID of the MediaAttachment in the database
     * @param ?UploadFile $thumbnail   the custom thumbnail of the media to be attached, encoded using multipart form data
     * @param ?string     $description a plain-text description of the media, for accessibility purposes
     * @param ?string     $focus       Two floating points (x,y), comma-delimited, ranging from -1.0 to 1.0. See [Focal points for cropping media thumbnails]({{< relref "api/guidelines#focal-points" >}}) for more information.
     */
    public function __construct(
        public string $id,
        public ?UploadFile $thumbnail = null,
        public ?string $description = null,
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
