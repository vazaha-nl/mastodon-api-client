<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Interfaces\ModelInterface;

abstract class Model implements ModelInterface
{
    final public function __construct()
    {
    }

    /**
     * @param array<string, mixed> $array
     */
    public function fillFromArray(array $array): static
    {
        foreach ($array as $property => $value) {
            $property = str_replace(':', '_', $property);

            if (!property_exists($this, $property)) {
                continue;
            }

            $this->{$property} = $value;
        }

        return $this;
    }

    /**
     * @return array<string, mixed> *
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
