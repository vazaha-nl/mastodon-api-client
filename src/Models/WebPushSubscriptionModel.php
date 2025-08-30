<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

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
     * If the push messages follow the standardized specifications
     * (RFC8030+RFC8291+RFC8292). Else they follow a legacy version of the
     * specifications (4th draft of RFC8291 and 1st draft of RFC8292).
     */
    public bool $standard;

    /**
     * The streaming server's VAPID key.
     */
    public string $server_key;

    /**
     * Which alerts should be delivered to the `endpoint`.
     *
     * @var array<array-key, mixed>
     */
    public array $alerts;
}
