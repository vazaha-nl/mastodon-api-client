<?php

namespace Vazaha\Mastodon\Models;

class Account extends Model
{
	public function __construct(
		public string $id,
		public ?string $username = null,
		public ?string $acct = null,
		public ?string $url = null,
		public ?string $display_name = null,
		public ?string $note = null,

		// TODO url type?
		public ?string $avatar = null,
		public ?string $avatar_static = null,
		public ?string $header = null,
		public ?string $header_static = null,

		public ?bool $locked = null,

		// TODO AccountFields type?
		public array $fields = [],

		public array $roles = [],

		// TODO Emojis type?
		public array $emojis = [],

		public ?bool $bot = null,
		public ?bool $group = null,
		public ?bool $discoverable = null,
		public ?bool $noindex = null,
		public ?bool $moved = null,
		public ?bool $suspended = null,
		public ?bool $limited = null,

		// TODO datetime type?
		public ?string $created_at = null,
		public ?string $last_status_at = null,

		public ?int $statuses_count = null,
		public ?int $followers_count = null,
		public ?int $following_count = null,
	) {
		//
	}

    public function getBaseUri(): ?string
    {
    	if (!isset($this->username, $this->url)) {
    		return null;
    	}

    	return str_replace('@' . $this->username, '', $this->url);
    }

    public function getDomain(): ?string
    {
    	if (!isset($this->url)) {
    		return null;
    	}

        return parse_url($this->url, PHP_URL_HOST);
    }
}
