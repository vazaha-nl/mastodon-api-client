<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Appeal against a moderation action.
 *
 * @see https://docs.joinmastodon.org/entities/Appeal/
 */
class AppealModel extends Model
{
    /**
     * Text of the appeal from the moderated account to the moderators.
     */
    public string $text;

    /**
     * State of the appeal.
     */
    public string $state;
}
