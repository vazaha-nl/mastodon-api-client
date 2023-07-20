<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Concerns\EncapsulatesApiClient;
use Vazaha\Mastodon\Concerns\HasBaseUri;
use Vazaha\Mastodon\Models\Contracts\ModelContract;

abstract class Model implements ModelContract
{
    use EncapsulatesApiClient;
    use HasBaseUri;

    protected string $baseUri;

    final public function __construct()
    {
    }

    /**
     * @param array<string, mixed> $array
     */
    public function fillFromArray(array $array): static
    {
        foreach ($array as $property => $value) {
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
