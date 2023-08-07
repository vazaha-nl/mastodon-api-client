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
         "day" : "1574553600",
         "accounts" : "31",
         "uses" : "200"
      },
      {
         "accounts" : "39",
         "uses" : "272",
         "day" : "1574467200"
      },
      {
         "uses" : "345",
         "accounts" : "40",
         "day" : "1574380800"
      },
      {
         "day" : "1574294400",
         "accounts" : "46",
         "uses" : "366"
      },
      {
         "day" : "1574208000",
         "uses" : "226",
         "accounts" : "32"
      },
      {
         "accounts" : "42",
         "uses" : "217",
         "day" : "1574121600"
      },
      {
         "day" : "1574035200",
         "uses" : "214",
         "accounts" : "34"
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
