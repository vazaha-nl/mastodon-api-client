<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

class Account extends Model
{
    public string $id;

    public ?string $username = null;

    public ?string $acct = null;

    public ?string $url = null;

    public ?string $display_name = null;

    public ?string $note = null;

    public ?string $avatar = null;

    public ?string $avatar_static = null;

    public ?string $header = null;

    public ?string $header_static = null;

    public ?bool $locked = null;

    /**
     * @var array<array<string, string>> *
     */
    public array $fields = [];

    /**
     * @var mixed[] *
     */
    public array $roles = [];

    /**
     * @var mixed[] *
     */
    public array $emojis = [];

    public bool $bot = false;

    public bool $group = false;

    public bool $discoverable = false;

    public bool $noindex = false;

    public bool $moved = false;

    public bool $suspended = false;

    public bool $limited = false;

    public ?string $created_at = null;

    public ?string $last_status_at = null;

    public ?int $statuses_count = null;

    public ?int $followers_count = null;

    public ?int $following_count = null;

    public function getDomain(): ?string
    {
        if (!isset($this->url)) {
            return null;
        }

        $domain = parse_url($this->url, \PHP_URL_HOST);

        if ($domain === false) {
            return null;
        }

        return $domain;
    }
}
