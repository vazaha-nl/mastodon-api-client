<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\StatusEditModel;

class StatusEditTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "account" : {
      "acct" : "trwnh",
      "display_name" : "infinite love ⴳ",
      "id" : "14715",
      "username" : "trwnh"
   },
   "content" : "<p>this is a status that has been edited three times. this time a poll has been added.</p>",
   "created_at" : "2022-09-05T00:03:32.480Z",
   "emojis" : [],
   "media_attachments" : [],
   "poll" : {
      "options" : [
         {
            "title" : "cool"
         },
         {
            "title" : "uncool"
         },
         {
            "title" : "spiderman (this option has been changed)"
         }
      ]
   },
   "sensitive" : false,
   "spoiler_text" : ""
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

        $model = StatusEditModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = StatusEditModel::sanitizePropertyName($property);

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
