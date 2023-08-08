<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a subscription to the push streaming server.
 *
 * @see https://docs.joinmastodon.org/entities/WebPushSubscription/
 */
class WebPushSubscriptionModel extends Model
{
    /**
     * The ID of the Web Push subscription in the database.
     */
    public string $id;

    /**
     * Where push alerts will be sent to.
     */
    public string $endpoint;

    /**
     * The streaming server's VAPID key.
     */
    public string $server_key;

    /**
     * Which alerts should be delivered to the `endpoint`.
     *
     * @var mixed[]
     */
    public array $alerts;
}
