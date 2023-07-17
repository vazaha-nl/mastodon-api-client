<?php

namespace Vazaha\Mastodon\ValueObjects;

use Funeralzone\ValueObjects\ValueObject;

class Account implements ValueObject
{
	public string $id;

	public string $username;

	public string $url;

    public static function fromNative($data): static
    {
    	// TODO validation
    	// TODO null or not null objects?

    	$account = new self();
    	$account->id = $data['id'];
    	$account->username = $data['username'];
    	$account->url = $data['url'];

    	return $account;
    }

    public function isNull(): bool
    {
    	return false;
    }

    public function isSame(ValueObject $object): bool
    {

    	return $this->id === $object->id;
    }

    public function toNative()
    {
    }

    public function getBaseUri(): string
    {
    	return str_replace('@' . $this->username, '', $this->url);
    }
}