<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Media;

use Vazaha\Mastodon\Abstracts\Request;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Helpers\UploadFile;
use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Results\MediaAttachmentResult;

/**
 * (DEPRECATED) Upload media as an attachment.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\MediaAttachmentResult>
 *
 * @see https://docs.joinmastodon.org/methods/media/#v1
 */
final class V1Request extends Request implements RequestInterface
{
    /**
     * @param UploadFile  $file        The file to be attached, encoded using multipart form data. The file must have a MIME type.
     * @param ?UploadFile $thumbnail   the custom thumbnail of the media to be attached, encoded using multipart form data
     * @param ?string     $description a plain-text description of the media, for accessibility purposes
     * @param ?string     $focus       Two floating points (x,y), comma-delimited, ranging from -1.0 to 1.0. See [Focal points for cropping media thumbnails]({{< relref "api/guidelines#focal-points" >}}) for more information.
     */
    public function __construct(
        public UploadFile $file,
        public ?UploadFile $thumbnail = null,
        public ?string $description = null,
        public ?string $focus = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/media';
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

    public function getResultClass(): string
    {
        return MediaAttachmentResult::class;
    }
}
