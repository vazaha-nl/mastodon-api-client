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
   "name" : "caturday",
   "url" : "https://mastodon.example/tags/caturday",
   "trendable" : true,
   "requires_review" : false,
   "history" : [
      {
         "day" : "1669507200",
         "uses" : "56",
         "accounts" : "53"
      },
      {
         "day" : "1669420800",
         "uses" : "171",
         "accounts" : "142"
      },
      {
         "day" : "1669334400",
         "uses" : "11",
         "accounts" : "11"
      },
      {
         "day" : "1669248000",
         "accounts" : "8",
         "uses" : "9"
      },
      {
         "day" : "1669161600",
         "uses" : "20",
         "accounts" : "8"
      },
      {
         "uses" : "11",
         "accounts" : "11",
         "day" : "1669075200"
      },
      {
         "accounts" : "17",
         "uses" : "22",
         "day" : "1668988800"
      }
   ],
   "id" : "802",
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
