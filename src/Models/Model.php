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

    public static function fromArray(array $array): static
    {
    	$model = new static();

    	foreach($array as $property => $value) {
    		if (!property_exists($model, $property)) {
    			continue;
    		}

    		$model->$property = $value;
    	}

    	return $model;

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
