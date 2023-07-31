<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
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
