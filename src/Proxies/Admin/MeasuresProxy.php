<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies\Admin;

use DateTimeInterface;
use Vazaha\Mastodon\Proxies\Proxy;
use Vazaha\Mastodon\Requests\Admin\Measures\GetRequest;
use Vazaha\Mastodon\Results\Admin\MeasureResult;

class MeasuresProxy extends Proxy
{
    /**
     * Get measurable data.
     *
     * @param array<string>     $keys                       Request specific measures by their keystring. Supported measures include:
     * @param DateTimeInterface $start_at                   The start date for the time period. If a time is provided, it will be ignored.
     * @param DateTimeInterface $end_at                     The end date for the time period. If a time is provided, it will be ignored.
     * @param null|mixed[]      $tag_accounts               tag_accounts[id]: When `tag_accounts` is one of the requested keys, you must provide a tag ID to obtain the measure of how many accounts used that hashtag in at least one status within the given time period
     * @param null|mixed[]      $tag_uses                   tag_uses[id]: When `tag_uses` is one of the requested keys, you must provide a tag ID to obtain the measure of how many statuses used that hashtag within the given time period
     * @param null|mixed[]      $tag_servers                tag_servers[id]: When `tag_servers` is one of the requested keys, you must provide a tag ID to obtain the measure of how many servers used that hashtag in at least one status within the given time period
     * @param null|mixed[]      $instance_accounts          instance_accounts[domain]: When `instance_accounts` is one of the requested keys, you must provide a remote domain to obtain the measure of how many accounts have been discovered from that server within the given time period
     * @param null|mixed[]      $instance_media_attachments instance_media_attachments[domain]: When `instance_media_attachments` is one of the requested keys, you must provide a remote domain to obtain the measure of how much space is used by media attachments from that server within the given time period
     * @param null|mixed[]      $instance_reports           instance_reports[domain]: When `instance_reports` is one of the requested keys, you must provide a remote domain to obtain the measure of how many reports have been filed against accounts from that server within the given time period
     * @param null|mixed[]      $instance_statuses          instance_statuses[domain]: When `instance_statuses` is one of the requested keys, you must provide a remote domain to obtain the measure of how many statuses originate from that server within the given time period
     * @param null|mixed[]      $instance_follows           instance_follows[domain]: When `instance_follows` is one of the requested keys, you must provide a remote domain to obtain the measure of how many follows were performed on accounts from that server by local accounts within the given time period
     * @param null|mixed[]      $instance_followers         instance_followers[domain]: When `instance_followers` is one of the requested keys, you must provide a remote domain to obtain the measure of how many follows were performed by accounts from that server on local accounts within the given time period
     *
     * @return \Vazaha\Mastodon\Results\Admin\MeasureResult<array-key,\Vazaha\Mastodon\Models\Admin\MeasureModel>
     *
     * @see https://docs.joinmastodon.org/methods/admin/measures/#get
     */
    public function get(
        array $keys,
        DateTimeInterface $start_at,
        DateTimeInterface $end_at,
        ?array $tag_accounts = null,
        ?array $tag_uses = null,
        ?array $tag_servers = null,
        ?array $instance_accounts = null,
        ?array $instance_media_attachments = null,
        ?array $instance_reports = null,
        ?array $instance_statuses = null,
        ?array $instance_follows = null,
        ?array $instance_followers = null,
    ): MeasureResult {
        /** @var \Vazaha\Mastodon\Results\Admin\MeasureResult<array-key,\Vazaha\Mastodon\Models\Admin\MeasureModel> */
        $models = $this->apiClient
            ->send(new GetRequest(
                $keys,
                $start_at,
                $end_at,
                $tag_accounts,
                $tag_uses,
                $tag_servers,
                $instance_accounts,
                $instance_media_attachments,
                $instance_reports,
                $instance_statuses,
                $instance_follows,
                $instance_followers,
            ));

        return $models;
    }
}
