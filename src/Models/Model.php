<?php

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Concerns\EncapsulatesApiClient;

abstract class Model
{
	use EncapsulatesApiClient;

    public static function fromArray(array $array): static
    {
    	return new static(...$array);
    }

    public function toArray(): array
    {
    	return get_object_vars($this);
    }
}
