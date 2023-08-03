<?php

declare(strict_types=1);

namespace Tests\Generated\V1;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\V1\FilterModel;

class FilterTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
  "id": "8449",
  "phrase": "test",
  "context": [
    "home",
    "notifications",
    "public",
    "thread"
  ],
  "whole_word": false,
  "expires_at": "2019-11-26T09:08:06.254Z",
  "irreversible": true
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            // too bad...
            return;
        }

        $model = FilterModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = FilterModel::sanitizePropertyName($property);

            self::assertObjectHasProperty($property, $model);

            $modelValue = $model->{$property};

            if (!is_string($modelValue) && !is_int($modelValue)) {
                // TODO find some other way to test this
                continue;
            }

            self::assertEquals($value, $model->{$property});
        }
    }
}
