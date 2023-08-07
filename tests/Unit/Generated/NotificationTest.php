<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\NotificationModel;

class NotificationTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "status" : {
      "account" : {
         "username" : "trwnh",
         "id" : "14715",
         "acct" : "trwnh"
      },
      "created_at" : "2019-11-23T07:28:34.210Z",
      "id" : "103186046267791694"
   },
   "type" : "favourite",
   "created_at" : "2019-11-23T07:29:18.903Z",
   "account" : {
      "acct" : "haskal@cybre.space",
      "id" : "297420",
      "username" : "haskal"
   },
   "id" : "34975535"
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

        $model = NotificationModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = NotificationModel::sanitizePropertyName($property);

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
