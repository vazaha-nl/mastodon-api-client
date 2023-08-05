<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Requests\Timelines\DirectRequest;
use Vazaha\Mastodon\Requests\Timelines\HomeRequest;
use Vazaha\Mastodon\Requests\Timelines\ListRequest;
use Vazaha\Mastodon\Requests\Timelines\PublicRequest;
use Vazaha\Mastodon\Requests\Timelines\TagRequest;
use Vazaha\Mastodon\Results\StatusResult;

class TimelinesProxy extends Proxy
{
    /**
     * (DEPRECATED) View direct timeline.
     *
     * @param ?string $max_id   return results older than ID
     * @param ?string $since_id return results newer than ID
     * @param ?string $min_id   return results immediately newer than ID
     * @param ?int    $limit    Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     *
     * @return \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel>
     */
    public function direct(
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
    ): StatusResult {
        /** @var \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel> */
        $models = $this->apiClient
            ->send(new DirectRequest(
                $max_id,
                $since_id,
                $min_id,
                $limit,
            ));

        return $models;
    }

    /**
     * View list timeline.
     *
     * @param string  $list_id  local ID of the List in the database
     * @param ?string $max_id   return results older than ID
     * @param ?string $since_id return results newer than ID
     * @param ?string $min_id   return results immediately newer than ID
     * @param ?int    $limit    Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     *
     * @return \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel>
     */
    public function list(
        string $list_id,
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
    ): StatusResult {
        /** @var \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel> */
        $models = $this->apiClient
            ->send(new ListRequest(
                $list_id,
                $max_id,
                $since_id,
                $min_id,
                $limit,
            ));

        return $models;
    }

    /**
     * View public timeline.
     *
     * @param ?bool   $local      show only local statuses? Defaults to false
     * @param ?bool   $remote     show only remote statuses? Defaults to false
     * @param ?bool   $only_media show only statuses with media attached? Defaults to false
     * @param ?string $max_id     return results older than ID
     * @param ?string $since_id   return results newer than ID
     * @param ?string $min_id     return results immediately newer than ID
     * @param ?int    $limit      Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     *
     * @return \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel>
     */
    public function public(
        ?bool $local = null,
        ?bool $remote = null,
        ?bool $only_media = null,
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
    ): StatusResult {
        /** @var \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel> */
        $models = $this->apiClient
            ->send(new PublicRequest(
                $local,
                $remote,
                $only_media,
                $max_id,
                $since_id,
                $min_id,
                $limit,
            ));

        return $models;
    }

    /**
     * View home timeline.
     *
     * @param ?string $max_id   return results older than ID
     * @param ?string $since_id return results newer than ID
     * @param ?string $min_id   return results immediately newer than ID
     * @param ?int    $limit    Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     *
     * @return \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel>
     */
    public function home(
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
    ): StatusResult {
        /** @var \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel> */
        $models = $this->apiClient
            ->send(new HomeRequest(
                $max_id,
                $since_id,
                $min_id,
                $limit,
            ));

        return $models;
    }

    /**
     * View hashtag timeline.
     *
     * @param string             $hashtag    the name of the hashtag (not including the # symbol)
     * @param null|array<string> $any        return statuses that contain any of these additional tags
     * @param null|array<string> $all        return statuses that contain all of these additional tags
     * @param null|array<string> $none       return statuses that contain none of these additional tags
     * @param ?bool              $local      return only local statuses? Defaults to false
     * @param ?bool              $remote     return only remote statuses? Defaults to false
     * @param ?bool              $only_media return only statuses with media attachments? Defaults to false
     * @param ?string            $max_id     return results older than ID
     * @param ?string            $since_id   return results newer than ID
     * @param ?string            $min_id     return results immediately newer than ID
     * @param ?int               $limit      Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     *
     * @return \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel>
     */
    public function tag(
        string $hashtag,
        ?array $any = null,
        ?array $all = null,
        ?array $none = null,
        ?bool $local = null,
        ?bool $remote = null,
        ?bool $only_media = null,
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
    ): StatusResult {
        /** @var \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel> */
        $models = $this->apiClient
            ->send(new TagRequest(
                $hashtag,
                $any,
                $all,
                $none,
                $local,
                $remote,
                $only_media,
                $max_id,
                $since_id,
                $min_id,
                $limit,
            ));

        return $models;
    }
}
