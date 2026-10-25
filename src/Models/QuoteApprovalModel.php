<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Summary of a status&#039; quote approval policy and how it applies to the requesting user.
 *
 * @see https://docs.joinmastodon.org/entities/QuoteApproval/
 */
class QuoteApprovalModel extends Model
{
    /**
     * Describes who is expected to be able to quote that status and have the
     * quote automatically authorized. An empty list means that nobody is expected
     * to be able to quote this post. Other values may be added in the future, so
     * unknown values should be treated as `unsupported_policy`.
     *
     * @var list<string>
     */
    public array $automatic;

    /**
     * Describes who is expected to have their quotes of this status be manually
     * reviewed by the author before being accepted. An empty list means that
     * nobody is expected to be able to quote this post. Other values may be added
     * in the future, so unknown values should be treated as `unsupported_policy`.
     *
     * @var list<string>
     */
    public array $manual;

    /**
     * Describes how this status' quote policy applies to the current user.
     */
    public string $current_user;
}
