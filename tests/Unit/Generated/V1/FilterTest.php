<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\V1;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\V1\FilterModel;

class FilterTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "context" : [
      "home",
      "notifications",
      "public",
      "thread"
   ],
   "expires_at" : "2019-11-26T09:08:06.254Z",
   "id" : "8449",
   "irreversible" : true,
   "phrase" : "test",
   "whole_word" : false
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

        if (array_is_list($array)) {
            $array = $array[0] ?? [];
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
