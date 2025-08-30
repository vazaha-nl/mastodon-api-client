<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\NotificationRequestModel;

class NotificationRequestTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "account" : {
      "acct" : "zsc",
      "id" : "971724",
      "username" : "zsc"
   },
   "created_at" : "2024-05-17T14:45:41.171Z",
   "id" : "112456967201894256",
   "last_status" : {
      "account" : {
         "acct" : "zsc",
         "id" : "971724",
         "username" : "zsc"
      },
      "created_at" : "2019-11-23T07:49:01.940Z",
      "id" : "103186126728896492",
      "in_reply_to_account_id" : "14715",
      "in_reply_to_id" : "103186038209478945",
      "mentions" : [
         {
            "acct" : "trwnh",
            "id" : "14715",
            "username" : "trwnh"
         }
      ]
   },
   "notifications_count" : "1",
   "updated_at" : "2024-05-17T14:45:41.171Z"
}

JSON;
    }

    public function testModelInstantation(): void
    {
        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            return;
        }

        if (array_is_list($array)) {
            $array = $array[0] ?? [];
        }

        $model = NotificationRequestModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = NotificationRequestModel::sanitizePropertyName($property);

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
