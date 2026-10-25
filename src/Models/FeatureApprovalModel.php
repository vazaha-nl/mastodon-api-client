<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Summary of an account&#039;s policy with regards to being featured in a Collection and how it applies to the requesting user.
 *
 * @see https://docs.joinmastodon.org/entities/FeatureApproval/
 */
class FeatureApprovalModel extends Model
{
    /**
     * Describes who is expected to be able to feature the account in a Collection
     * and have this authorized automatically. An empty list means that nobody is
     * expected to be able to feature this account with automatic approval. Other
     * values may be added in the future, so unknown values should be treated as
     * `unsupported_policy`.
     *
     * @var list<string>
     */
    public array $automatic;

    /**
     * Describes who is expected to have attempts of featuring this account in a
     * Collection be manually reviewed by the account owner before being accepted.
     * An empty list means that nobody is expected to be able to feature this
     * account with manual approval. Other values may be added in the future, so
     * unknown values should be treated as `unsupported_policy`.
     *
     * @var list<string>
     */
    public array $manual;

    /**
     * Describes how this account's feature approval policy applies to the current
     * user.
     */
    public string $current_user;
}
