<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Requests\Directory\GetRequest;
use Vazaha\Mastodon\Results\AccountResult;

class DirectoryProxy extends Proxy
{
    /**
     * View profile directory.
     *
     * @param ?int    $offset skip the first n results
     * @param ?int    $limit  How many accounts to load. Defaults to 40 accounts. Max 80 accounts.
     * @param ?string $order  use `active` to sort by most recently posted statuses (default) or `new` to sort by most recently created profiles
     * @param ?bool   $local  if true, returns only local accounts
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key, \Vazaha\Mastodon\Models\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/directory/#get
     */
    public function get(
        ?int $offset = null,
        ?int $limit = null,
        ?string $order = null,
        ?bool $local = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\AccountResult<array-key, \Vazaha\Mastodon\Models\AccountModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $offset,
                $limit,
                $order,
                $local,
            ));

        return $models;
    }
}
