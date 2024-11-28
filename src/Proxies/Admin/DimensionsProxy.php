<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Requests\Admin\Dimensions\GetRequest;
use Vazaha\Mastodon\Results\Admin\DimensionResult;

class DimensionsProxy extends Proxy
{
    /**
     * Get dimensional data.
     *
     * @param list<string>        $keys               Request specific dimensions by their keystring. Supported dimensions include:
     * @param ?\DateTimeInterface $start_at           The start date for the time period. If a time is provided, it will be ignored.
     * @param ?\DateTimeInterface $end_at             The end date for the time period. If a time is provided, it will be ignored.
     * @param ?int                $limit              the maximum number of results to return for sources, servers, languages, tag or instance dimensions
     * @param null|list<mixed>    $tag_servers        tag_servers[id]: When `tag_servers` is one of the requested keys, you must provide a trending tag ID to obtain information about which servers are posting the tag
     * @param null|list<mixed>    $tag_languages      tag_languages[id]: When `tag_languages` is one of the requested keys, you must provide a trending tag ID to obtain information about which languages are posting the tag
     * @param null|list<mixed>    $instance_accounts  instance_accounts[domain]: When `instance_accounts` is one of the requested keys, you must provide a domain to obtain information about popular accounts from that server
     * @param null|list<mixed>    $instance_languages instance_languages[domain]: When `instance_accounts` is one of the requested keys, you must provide a domain to obtain information about popular languages from that server
     *
     * @return \Vazaha\Mastodon\Results\Admin\DimensionResult<array-key, \Vazaha\Mastodon\Models\Admin\DimensionModel>
     *
     * @see https://docs.joinmastodon.org/methods/admin/dimensions/#get
     */
    public function get(
        array $keys = [],
        ?\DateTimeInterface $start_at = null,
        ?\DateTimeInterface $end_at = null,
        ?int $limit = null,
        ?array $tag_servers = null,
        ?array $tag_languages = null,
        ?array $instance_accounts = null,
        ?array $instance_languages = null,
    ): DimensionResult {
        /** @var \Vazaha\Mastodon\Results\Admin\DimensionResult<array-key, \Vazaha\Mastodon\Models\Admin\DimensionModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $keys,
                $start_at,
                $end_at,
                $limit,
                $tag_servers,
                $tag_languages,
                $instance_accounts,
                $instance_languages,
            ));

        return $models;
    }
}
