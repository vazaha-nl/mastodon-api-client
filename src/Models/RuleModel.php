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

    /**
     * Longer-form description of the rule.
     */
    public string $hint;

    /**
     * Available translations for this rule's `text` and `hint`, as a Hash where
     * keys are locale codes and values are hashes with `text` and `hint` keys.
     *
     * @var array<array-key, mixed>
     */
    public array $translations;
}
