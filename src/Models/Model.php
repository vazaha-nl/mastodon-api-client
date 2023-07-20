<?php

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Concerns\EncapsulatesApiClient;
use Vazaha\Mastodon\Models\Contracts\ModelContract;

abstract class Model implements ModelContract
{
	use EncapsulatesApiClient;

	protected string $baseUri;

	final function __construct()
	{
		//
	}

    /**
     * @param array<string, mixed> $array
     * @return static
     */
    public function fillFromArray(array $array): static
    {
    	foreach($array as $property => $value) {
    		// TODO FIXME? not sure about this
    		if ($value === null) {
    			continue;
    		}

    		if (!property_exists($this, $property)) {
    			continue;
    		}

    		$this->$property = $value;
    	}

    	return $this;

    }

    /** @return array<string, mixed> **/
    public function toArray(): array
    {
    	return get_object_vars($this);
    }

    public function setBaseUri(string $baseUri): static
    {
    	$this->baseUri = $baseUri;

    	return $this;
    }

    public function getBaseUri(): string
    {
    	return $this->baseUri;
    }
}
