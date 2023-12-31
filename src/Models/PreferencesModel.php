<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a user&#039;s preferences.
 *
 * @see https://docs.joinmastodon.org/entities/Preferences/
 */
class PreferencesModel extends Model
{
    /**
     * Default visibility for new posts. Equivalent to
     * [CredentialAccount#source\[privacy\]]({{< relref
     * "entities/Account#source-privacy" >}}).
     */
    public string $posting_default_visibility;

    /**
     * Default sensitivity flag for new posts. Equivalent to
     * [CredentialAccount#source\[sensitive\]]({{< relref
     * "entities/Account#source-sensitive" >}}).
     */
    public bool $posting_default_sensitive;

    /**
     * Default language for new posts. Equivalent to
     * [CredentialAccount#source\[language\]]({{< relref
     * "entities/Account#source-language" >}}).
     */
    public ?string $posting_default_language = null;

    /**
     * Whether media attachments should be automatically displayed or
     * blurred/hidden.
     */
    public string $reading_expand_media;

    /**
     * Whether CWs should be expanded by default.
     */
    public bool $reading_expand_spoilers;
}
