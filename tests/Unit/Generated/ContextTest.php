<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\ContextModel;

class ContextTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "ancestors" : [
      {
         "in_reply_to_id" : null,
         "id" : "103188938570975982",
         "created_at" : "2019-11-23T19:44:00.124Z"
      },
      {
         "created_at" : "2019-11-23T19:52:23.398Z",
         "id" : "103188971072973252",
         "in_reply_to_id" : "103188938570975982"
      },
      {
         "in_reply_to_id" : "103188971072973252",
         "id" : "103188982235527758",
         "created_at" : "2019-11-23T19:55:08.208Z"
      }
   ],
   "descendants" : [
      {
         "in_reply_to_id" : "103189005915505698",
         "created_at" : "2019-11-23T20:06:36.011Z",
         "id" : "103189026958574542"
      }
   ]
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

        $model = ContextModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = ContextModel::sanitizePropertyName($property);

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
