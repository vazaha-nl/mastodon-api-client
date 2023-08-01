<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents an application that interfaces with the REST API to access accounts or post statuses.
 */
class ApplicationModel extends Model
{
    /**
     * The name of your application.
     */
    public string $name;

    /**
     * The website associated with your application.
     */
    public ?string $website = null;

    /**
     * Used for Push Streaming API. Returned with [POST /api/v1/apps]({{&lt; relref
     * &quot;methods/apps#create&quot; &gt;}}). Equivalent to
     * [WebPushSubscription#server_key]({{&lt; relref
     * &quot;entities/WebPushSubscription#server_key&quot; &gt;}}).
     */
    public string $vapid_key;

    /**
     * Client ID key, to be used for obtaining OAuth tokens.
     */
    public ?string $client_id = null;

    /**
     * Client secret key, to be used for obtaining OAuth tokens.
     */
    public ?string $client_secret = null;
}
