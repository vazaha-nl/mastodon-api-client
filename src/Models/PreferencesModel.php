<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

class PreferencesModel extends Model
{
    public string $posting_default_visibility;

    public bool $posting_default_sensitive;

    public ?string $posting_default_language = null;

    public string $reading_expand_media;

    public bool $reading_expand_spoilers;
}
