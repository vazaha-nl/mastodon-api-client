<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a proof from an external identity provider.
 *
 * @see https://docs.joinmastodon.org/entities/IdentityProof/
 */
class IdentityProofModel extends Model
{
    /**
     * The name of the identity provider.
     */
    public string $provider;

    /**
     * The account owner's username on the identity provider's service.
     */
    public string $provider_username;

    /**
     * When the identity proof was last updated.
     */
    public \DateTimeInterface $updated_at;

    /**
     * A link to a statement of identity proof, hosted by the identity provider.
     */
    public string $proof_url;

    /**
     * The account owner's profile URL on the identity provider.
     */
    public string $profile_url;
}
