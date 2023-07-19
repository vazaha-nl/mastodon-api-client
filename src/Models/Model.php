<?php

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Concerns\EncapsulatesApiClient;

abstract class Model
{
	use EncapsulatesApiClient;

	protected string $sourceDomain;

    public static function fromArray(array $array): static
    {
    	return new static(...$array);
    }

    public function toArray(): array
    {
    	return get_object_vars($this);
    }

    public function setSourceDomain(string $sourceDomain): static
    {
    	$this->sourceDomain = $sourceDomain;

    	return $this;
    }

    public function getSourceDomain(): string
    {
    	return $this->sourceDomain;
    }
}
