<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * @see https://link.to.docs
 */
class IdentityProofModel extends Model
{
    /**
     * The name of the identity provider.
     */
    public string $provider;

    /**
     * The account owner&#039;s username on the identity provider&#039;s service.
     */
    public string $provider_username;

    /**
     * When the identity proof was last updated.
     */
    public Carbon $updated_at;

    /**
     * A link to a statement of identity proof, hosted by the identity provider.
     */
    public string $proof_url;

    /**
     * The account owner&#039;s profile URL on the identity provider.
     */
    public string $profile_url;
}
