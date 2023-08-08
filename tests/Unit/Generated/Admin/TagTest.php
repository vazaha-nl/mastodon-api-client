<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\TagModel;

class TagTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "history" : [
      {
         "accounts" : "53",
         "day" : "1669507200",
         "uses" : "56"
      },
      {
         "accounts" : "142",
         "day" : "1669420800",
         "uses" : "171"
      },
      {
         "accounts" : "11",
         "day" : "1669334400",
         "uses" : "11"
      },
      {
         "accounts" : "8",
         "day" : "1669248000",
         "uses" : "9"
      },
      {
         "accounts" : "8",
         "day" : "1669161600",
         "uses" : "20"
      },
      {
         "accounts" : "11",
         "day" : "1669075200",
         "uses" : "11"
      },
      {
         "accounts" : "17",
         "day" : "1668988800",
         "uses" : "22"
      }
   ],
   "id" : "802",
   "name" : "caturday",
   "requires_review" : false,
   "trendable" : true,
   "url" : "https://mastodon.example/tags/caturday",
   "usable" : true
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
