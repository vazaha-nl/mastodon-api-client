<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://docs.joinmastodon.org/entities/Status/#Tag
 */
class StatusTagModel extends Model
{
    public string $name;

    public string $url;
}
