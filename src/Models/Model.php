<?php

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Concerns\EncapsulatesApiClient;

abstract class Model
{
	use EncapsulatesApiClient;

	protected string $sourceDomain;

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
