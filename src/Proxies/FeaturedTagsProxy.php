<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\EmptyOrUnknownModel;
use Vazaha\Mastodon\Models\FeaturedTagModel;
use Vazaha\Mastodon\Requests\FeaturedTags\FeatureRequest;
use Vazaha\Mastodon\Requests\FeaturedTags\GetRequest;
use Vazaha\Mastodon\Requests\FeaturedTags\SuggestionsRequest;
use Vazaha\Mastodon\Requests\FeaturedTags\UnfeatureRequest;
use Vazaha\Mastodon\Results\FeaturedTagResult;
use Vazaha\Mastodon\Results\TagResult;

class FeaturedTagsProxy extends Proxy
{
    /**
     * Feature a tag.
     *
     * @param string $name the hashtag to be featured, without the hash sign
     */
    public function feature(
        string $name,
    ): FeaturedTagModel {
        $result = $this->apiClient->send(new FeatureRequest(
            $name,
        ));

        /** @var null|\Vazaha\Mastodon\Models\FeaturedTagModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View your featured tags.
     *
     * @return \Vazaha\Mastodon\Results\FeaturedTagResult<array-key,\Vazaha\Mastodon\Models\FeaturedTagModel>
     */
    public function get(
    ): FeaturedTagResult {
        /** @var \Vazaha\Mastodon\Results\FeaturedTagResult<array-key,\Vazaha\Mastodon\Models\FeaturedTagModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
            ));

        return $models;
    }

    /**
     * View suggested tags to feature.
     *
     * @return \Vazaha\Mastodon\Results\TagResult<array-key,\Vazaha\Mastodon\Models\TagModel>
     */
    public function suggestions(
    ): TagResult {
        /** @var \Vazaha\Mastodon\Results\TagResult<array-key,\Vazaha\Mastodon\Models\TagModel> */
        $models = $this->apiClient
            ->send(new SuggestionsRequest(
            ));

        return $models;
    }

    /**
     * Unfeature a tag.
     *
     * @param string $id the ID of the FeaturedTag in the database
     */
    public function unfeature(
        string $id,
    ): EmptyOrUnknownModel {
        $result = $this->apiClient->send(new UnfeatureRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\EmptyOrUnknownModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
