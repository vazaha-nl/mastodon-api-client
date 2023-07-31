<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
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
     * The streaming server&#039;s VAPID key.
     */
    public string $server_key;

    /**
     * Which alerts should be delivered to the `endpoint`.
     *
     * @var mixed[]
     */
    public array $alerts;
}
