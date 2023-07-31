<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
 */
class PreferencesModel extends Model
{
    /**
     * Default visibility for new posts. Equivalent to
     * [CredentialAccount#source\[privacy\]]({{&lt; relref
     * &quot;entities/Account#source-privacy&quot; &gt;}}).
     */
    public string $posting_default_visibility;

    /**
     * Default sensitivity flag for new posts. Equivalent to
     * [CredentialAccount#source\[sensitive\]]({{&lt; relref
     * &quot;entities/Account#source-sensitive&quot; &gt;}}).
     */
    public bool $posting_default_sensitive;

    /**
     * Default language for new posts. Equivalent to
     * [CredentialAccount#source\[language\]]({{&lt; relref
     * &quot;entities/Account#source-language&quot; &gt;}}).
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
