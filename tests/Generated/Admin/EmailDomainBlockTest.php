<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\EmailDomainBlockModel;

class EmailDomainBlockTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
  "id": "1",
  "domain": "foo",
  "created_at": "2022-11-16T06:09:36.176Z",
  "history": [
    {
      "day": "1668556800",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1668470400",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1668384000",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1668297600",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1668211200",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1668124800",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1668038400",
      "accounts": "0",
      "uses": "0"
    }
  ]
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

        $model = EmailDomainBlockModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = EmailDomainBlockModel::sanitizePropertyName($property);

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
