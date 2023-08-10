<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents an OAuth token used for authenticating with the API and performing actions.
 *
 * @see https://docs.joinmastodon.org/entities/Token/
 */
class TokenModel extends Model
{
    /**
     * An OAuth token to be used for authorization.
     */
    public string $access_token;

    /**
     * The OAuth token type. Mastodon uses `Bearer` tokens.
     */
    public string $token_type;

    /**
     * The OAuth scopes granted by this token, space-separated.
     */
    public string $scope;

    /**
     * When the token was generated.
     */
    public DateTimeInterface $created_at;
}
