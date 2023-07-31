<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a rule that server users should follow.
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
