<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\TagModel;

class TagTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "following" : false,
   "history" : [
      {
         "accounts" : "31",
         "day" : "1574553600",
         "uses" : "200"
      },
      {
         "accounts" : "39",
         "day" : "1574467200",
         "uses" : "272"
      },
      {
         "accounts" : "40",
         "day" : "1574380800",
         "uses" : "345"
      },
      {
         "accounts" : "46",
         "day" : "1574294400",
         "uses" : "366"
      },
      {
         "accounts" : "32",
         "day" : "1574208000",
         "uses" : "226"
      },
      {
         "accounts" : "42",
         "day" : "1574121600",
         "uses" : "217"
      },
      {
         "accounts" : "34",
         "day" : "1574035200",
         "uses" : "214"
      }
   ],
   "name" : "nowplaying",
   "url" : "https://mastodon.social/tags/nowplaying"
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

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

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
