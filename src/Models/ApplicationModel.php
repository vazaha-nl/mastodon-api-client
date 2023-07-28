<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://docs.joinmastodon.org/entities/Application/
 */
final class ApplicationModel extends Model
{
    public string $name;

    public ?string $website = null;

    public string $vapid_key;

    public string $client_id;

    public string $client_secret;
}
