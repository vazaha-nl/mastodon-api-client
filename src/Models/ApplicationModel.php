<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents an application that interfaces with the REST API, for example to access account information or post statuses.
 *
 * @see https://docs.joinmastodon.org/entities/Application/
 */
class ApplicationModel extends Model
{
    /**
     * The numeric ID of the application.
     */
    public string $id;

    /**
     * The name of the application.
     */
    public string $name;

    /**
     * The website associated with the application.
     */
    public ?string $website = null;

    /**
     * The scopes for the application. This is the registered `scopes` string
     * split on whitespace.
     *
     * @var list<string>
     */
    public array $scopes;

    /**
     * The registered redirection URI(s) for the application.
     *
     * @var list<string>
     */
    public array $redirect_uris;

    /**
     * The registered redirection URI(s) for the application.
     */
    public string $redirect_uri;

    /**
     * Used for Push Streaming API. Returned with [POST /api/v1/apps]({{< relref
     * "methods/apps#create" >}}). Equivalent to
     * [WebPushSubscription#server_key]({{< relref
     * "entities/WebPushSubscription#server_key" >}}) and
     * [Instance#vapid_public_key]({{< relref "entities/Instance#vapid_public_key"
     * >}}).
     */
    public string $vapid_key;
}
