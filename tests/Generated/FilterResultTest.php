<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\FilterResultModel;

class FilterResultTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
  "filter": {
    "id": "3",
    "title": "Hide completely",
    "context": [
      "home"
    ],
    "expires_at": "2022-09-20T17:27:39.296Z",
    "filter_action": "hide"
  },
  "keyword_matches": [
    "bad word"
  ],
  "status_matches": [
    "109031743575371913"
  ]
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

        $model = FilterResultModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = FilterResultModel::sanitizePropertyName($property);

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
