<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a rule that server users should follow.
 *
 * @see https://docs.joinmastodon.org/entities/Rule/
 */
class RuleModel extends Model
{
    /**
     * An identifier for the rule.
     */
    public string $id;

    /**
     * The rule to be followed.
     */
    public string $text;
}
