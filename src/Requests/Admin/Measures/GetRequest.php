<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Measures;

use DateTimeInterface;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Get measurable data.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\MeasureResult>
 *
 * @see https://docs.joinmastodon.org/methods/measures/#get
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\Admin\MeasureRequest implements RequestInterface
{
    public function __construct(
        /**
         * Request specific measures by their keystring. Supported measures include:.
         *
         * @var array<string> $keys
         */
        public array $keys,

        /**
         * The start date for the time period. If a time is provided, it will be
         * ignored.
         */
        public DateTimeInterface $start_at,

        /**
         * The end date for the time period. If a time is provided, it will be
         * ignored.
         */
        public DateTimeInterface $end_at,

        /**
         * tag_accounts[id]: When `tag_accounts` is one of the requested keys, you
         * must provide a tag ID to obtain the measure of how many accounts used that
         * hashtag in at least one status within the given time period.
         *
         * @var null|mixed[] $tag_accounts
         */
        public ?array $tag_accounts = null,

        /**
         * tag_uses[id]: When `tag_uses` is one of the requested keys, you must
         * provide a tag ID to obtain the measure of how many statuses used that
         * hashtag within the given time period.
         *
         * @var null|mixed[] $tag_uses
         */
        public ?array $tag_uses = null,

        /**
         * tag_servers[id]: When `tag_servers` is one of the requested keys, you must
         * provide a tag ID to obtain the measure of how many servers used that
         * hashtag in at least one status within the given time period.
         *
         * @var null|mixed[] $tag_servers
         */
        public ?array $tag_servers = null,

        /**
         * instance_accounts[domain]: When `instance_accounts` is one of the requested
         * keys, you must provide a remote domain to obtain the measure of how many
         * accounts have been discovered from that server within the given time
         * period.
         *
         * @var null|mixed[] $instance_accounts
         */
        public ?array $instance_accounts = null,

        /**
         * instance_media_attachments[domain]: When `instance_media_attachments` is
         * one of the requested keys, you must provide a remote domain to obtain the
         * measure of how much space is used by media attachments from that server
         * within the given time period.
         *
         * @var null|mixed[] $instance_media_attachments
         */
        public ?array $instance_media_attachments = null,

        /**
         * instance_reports[domain]: When `instance_reports` is one of the requested
         * keys, you must provide a remote domain to obtain the measure of how many
         * reports have been filed against accounts from that server within the given
         * time period.
         *
         * @var null|mixed[] $instance_reports
         */
        public ?array $instance_reports = null,

        /**
         * instance_statuses[domain]: When `instance_statuses` is one of the requested
         * keys, you must provide a remote domain to obtain the measure of how many
         * statuses originate from that server within the given time period.
         *
         * @var null|mixed[] $instance_statuses
         */
        public ?array $instance_statuses = null,

        /**
         * instance_follows[domain]: When `instance_follows` is one of the requested
         * keys, you must provide a remote domain to obtain the measure of how many
         * follows were performed on accounts from that server by local accounts
         * within the given time period.
         *
         * @var null|mixed[] $instance_follows
         */
        public ?array $instance_follows = null,

        /**
         * instance_followers[domain]: When `instance_followers` is one of the
         * requested keys, you must provide a remote domain to obtain the measure of
         * how many follows were performed by accounts from that server on local
         * accounts within the given time period.
         *
         * @var null|mixed[] $instance_followers
         */
        public ?array $instance_followers = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/measures';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'keys' => $this->keys,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
            'tag_accounts' => $this->tag_accounts,
            'tag_uses' => $this->tag_uses,
            'tag_servers' => $this->tag_servers,
            'instance_accounts' => $this->instance_accounts,
            'instance_media_attachments' => $this->instance_media_attachments,
            'instance_reports' => $this->instance_reports,
            'instance_statuses' => $this->instance_statuses,
            'instance_follows' => $this->instance_follows,
            'instance_followers' => $this->instance_followers,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
