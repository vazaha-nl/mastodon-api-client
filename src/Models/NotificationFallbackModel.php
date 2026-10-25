<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a notification of an event relevant to the user.
 *
 * @see https://docs.joinmastodon.org/entities/NotificationFallback/
 */
class NotificationFallbackModel extends Model
{
    /**
     * Localized fallback title for the notification, for instance “Alice added
     * you to a collection”.
     */
    public string $title;

    /**
     * Localized fallback summary for the notification, for instance “You're on
     * an app that does not support the most recent version of Mastodon. Sign in
     * to the Mastodon web app for full functionality.”.
     */
    public ?string $summary = null;

    /**
     * Localized details for the notifications, to be displayed when clicking the
     * notification, for instance.
     */
    public ?string $details = null;
}
