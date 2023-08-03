<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\TagModel;

class TagTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
  "name": "caturday",
  "url": "https://mastodon.example/tags/caturday",
  "history": [
    {
      "day": "1669507200",
      "accounts": "53",
      "uses": "56"
    },
    {
      "day": "1669420800",
      "accounts": "142",
      "uses": "171"
    },
    {
      "day": "1669334400",
      "accounts": "11",
      "uses": "11"
    },
    {
      "day": "1669248000",
      "accounts": "8",
      "uses": "9"
    },
    {
      "day": "1669161600",
      "accounts": "8",
      "uses": "20"
    },
    {
      "day": "1669075200",
      "accounts": "11",
      "uses": "11"
    },
    {
      "day": "1668988800",
      "accounts": "17",
      "uses": "22"
    }
  ],
  "id": "802",
  "trendable": true,
  "usable": true,
  "requires_review": false
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            return;
        }

        $model = TagModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = TagModel::sanitizePropertyName($property);

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
