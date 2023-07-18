<?php

namespace Vazaha\Mastodon\Models;

class Account extends Model
{
    public function getId(): string
    {
        return $this->getProperty('id');
    }

    public function getUsername(): string
    {
        return $this->getProperty('username');
    }

    public function getUrl(): string
    {
        return $this->getProperty('url');
    }

    public function getDisplayName(): string
    {
        return $this->getProperty('display_name');
    }

    public function isLocked(): bool
    {
        return (bool)$this->getProperty('locked');
    }

    public function getBaseUri(): string
    {
    	return str_replace('@' . $this->getUsername(), '', $this->getUrl());
    }

    public function getDomain(): string
    {
        return parse_url($this->getUrl(), PHP_URL_HOST);
    }
}
