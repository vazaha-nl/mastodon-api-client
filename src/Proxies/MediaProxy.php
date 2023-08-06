<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\MediaAttachmentModel;
use Vazaha\Mastodon\Requests\Media\GetRequest;
use Vazaha\Mastodon\Requests\Media\UpdateRequest;
use Vazaha\Mastodon\Requests\Media\V1Request;
use Vazaha\Mastodon\Requests\Media\V2Request;

class MediaProxy extends Proxy
{
    /**
     * Get media attachment.
     *
     * @param string $id the ID of the MediaAttachment in the database
     */
    public function get(
        string $id,
    ): MediaAttachmentModel {
        $result = $this->apiClient->send(new GetRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\MediaAttachmentModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Update media attachment.
     *
     * @param string       $id          the ID of the MediaAttachment in the database
     * @param null|mixed[] $thumbnail   the custom thumbnail of the media to be attached, encoded using multipart form data
     * @param ?string      $description a plain-text description of the media, for accessibility purposes
     * @param ?string      $focus       Two floating points (x,y), comma-delimited, ranging from -1.0 to 1.0. See [Focal points for cropping media thumbnails]({{< relref "api/guidelines#focal-points" >}}) for more information.
     */
    public function update(
        string $id,
        ?array $thumbnail = null,
        ?string $description = null,
        ?string $focus = null,
    ): MediaAttachmentModel {
        $result = $this->apiClient->send(new UpdateRequest(
            $id,
            $thumbnail,
            $description,
            $focus,
        ));

        /** @var null|\Vazaha\Mastodon\Models\MediaAttachmentModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * (DEPRECATED) Upload media as an attachment.
     *
     * @param mixed[]      $file        The file to be attached, encoded using multipart form data. The file must have a MIME type.
     * @param null|mixed[] $thumbnail   the custom thumbnail of the media to be attached, encoded using multipart form data
     * @param ?string      $description a plain-text description of the media, for accessibility purposes
     * @param ?string      $focus       Two floating points (x,y), comma-delimited, ranging from -1.0 to 1.0. See [Focal points for cropping media thumbnails]({{< relref "api/guidelines#focal-points" >}}) for more information.
     */
    public function v1(
        array $file,
        ?array $thumbnail = null,
        ?string $description = null,
        ?string $focus = null,
    ): MediaAttachmentModel {
        $result = $this->apiClient->send(new V1Request(
            $file,
            $thumbnail,
            $description,
            $focus,
        ));

        /** @var null|\Vazaha\Mastodon\Models\MediaAttachmentModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Upload media as an attachment (async).
     *
     * @param mixed[]      $file        The file to be attached, encoded using multipart form data. The file must have a MIME type.
     * @param null|mixed[] $thumbnail   the custom thumbnail of the media to be attached, encoded using multipart form data
     * @param ?string      $description a plain-text description of the media, for accessibility purposes
     * @param ?string      $focus       Two floating points (x,y), comma-delimited, ranging from -1.0 to 1.0. See [Focal points for cropping media thumbnails]({{< relref "api/guidelines#focal-points" >}}) for more information.
     */
    public function v2(
        array $file,
        ?array $thumbnail = null,
        ?string $description = null,
        ?string $focus = null,
    ): MediaAttachmentModel {
        $result = $this->apiClient->send(new V2Request(
            $file,
            $thumbnail,
            $description,
            $focus,
        ));

        /** @var null|\Vazaha\Mastodon\Models\MediaAttachmentModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
