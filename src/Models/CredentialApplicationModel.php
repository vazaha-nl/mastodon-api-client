<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents an application that interfaces with the REST API, for example to access account information or post statuses.
 *
 * @see https://docs.joinmastodon.org/entities/Application/#CredentialApplication
 */
class CredentialApplicationModel extends ApplicationModel
{
    /**
     * Client ID key, to be used for obtaining OAuth tokens.
     */
    public string $client_id;

    /**
     * Client secret key, to be used for obtaining OAuth tokens.
     */
    public string $client_secret;

    /**
     * When the client secret key will expire. Presently this always returns `0`
     * indicating that OAuth Clients do not expire.
     */
    public string $client_secret_expires_at;
}
