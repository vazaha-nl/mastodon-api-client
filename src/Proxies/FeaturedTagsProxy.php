<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\FeaturedTags\FeatureRequest;
use Vazaha\Mastodon\Requests\FeaturedTags\GetRequest;
use Vazaha\Mastodon\Requests\FeaturedTags\SuggestionsRequest;
use Vazaha\Mastodon\Requests\FeaturedTags\UnfeatureRequest;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;
use Vazaha\Mastodon\Results\FeaturedTagResult;
use Vazaha\Mastodon\Results\TagResult;

class FeaturedTagsProxy extends Proxy
{
    /**
     * Feature a tag.
     *
     * @param string $name the hashtag to be featured, without the hash sign
     *
     * @return \Vazaha\Mastodon\Results\FeaturedTagResult<array-key,\Vazaha\Mastodon\Models\FeaturedTagModel>
     */
    public function feature(
        string $name,
    ): FeaturedTagResult {
        /** @var \Vazaha\Mastodon\Results\FeaturedTagResult<array-key,\Vazaha\Mastodon\Models\FeaturedTagModel> */
        $models = $this->apiClient
            ->send(new FeatureRequest(
                $name,
            ));

        return $models;
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
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function unfeature(
        string $id,
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new UnfeatureRequest(
                $id,
            ));

        return $models;
    }
}
