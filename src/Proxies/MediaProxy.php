<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Helpers\UploadFile;
use Vazaha\Mastodon\Models\MediaAttachmentModel;
use Vazaha\Mastodon\Requests\Media\DeleteRequest;
use Vazaha\Mastodon\Requests\Media\GetRequest;
use Vazaha\Mastodon\Requests\Media\UpdateRequest;
use Vazaha\Mastodon\Requests\Media\V1Request;
use Vazaha\Mastodon\Requests\Media\V2Request;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;

class MediaProxy extends Proxy
{
    /**
     * Delete media attachment.
     *
     * @param string $id the ID of the MediaAttachment in the database
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/media/#delete
     */
    public function delete(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new DeleteRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Get media attachment.
     *
     * @param string $id the ID of the MediaAttachment in the database
     *
     * @see https://docs.joinmastodon.org/methods/media/#get
     */
    public function get(
        string $id,
    ): MediaAttachmentModel {
        $result = $this->apiClient->send(new GetRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\MediaAttachmentModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Update media attachment.
     *
     * @param string      $id          the ID of the MediaAttachment in the database
     * @param ?UploadFile $thumbnail   the custom thumbnail of the media to be attached, encoded using multipart form data
     * @param ?string     $description a plain-text description of the media, for accessibility purposes
     * @param ?string     $focus       Two floating points (x,y), comma-delimited, ranging from -1.0 to 1.0. See {@link https://docs.joinmastodon.org/api/guidelines#focal-points Focal points for cropping media thumbnails} for more information.
     *
     * @see https://docs.joinmastodon.org/methods/media/#update
     */
    public function update(
        string $id,
        ?UploadFile $thumbnail = null,
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
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Upload media as an attachment (v1).
     *
     * @see https://docs.joinmastodon.org/methods/media/#v1
     *
     * @deprecated
     *
     * @param UploadFile  $file        The file to be attached, encoded using multipart form data. The file must have a MIME type.
     * @param ?UploadFile $thumbnail   the custom thumbnail of the media to be attached, encoded using multipart form data
     * @param ?string     $description a plain-text description of the media, for accessibility purposes
     * @param ?string     $focus       Two floating points (x,y), comma-delimited, ranging from -1.0 to 1.0. See {@link https://docs.joinmastodon.org/api/guidelines#focal-points Focal points for cropping media thumbnails} for more information.
     */
    public function v1(
        UploadFile $file,
        ?UploadFile $thumbnail = null,
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
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Upload media as an attachment (async).
     *
     * @param UploadFile  $file        The file to be attached, encoded using multipart form data. The file must have a MIME type.
     * @param ?UploadFile $thumbnail   the custom thumbnail of the media to be attached, encoded using multipart form data
     * @param ?string     $description a plain-text description of the media, for accessibility purposes
     * @param ?string     $focus       Two floating points (x,y), comma-delimited, ranging from -1.0 to 1.0. See {@link https://docs.joinmastodon.org/api/guidelines#focal-points Focal points for cropping media thumbnails} for more information.
     *
     * @see https://docs.joinmastodon.org/methods/media/#v2
     */
    public function v2(
        UploadFile $file,
        ?UploadFile $thumbnail = null,
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
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
