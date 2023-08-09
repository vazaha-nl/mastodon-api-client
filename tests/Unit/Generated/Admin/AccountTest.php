<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\AccountModel;

class AccountTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "account" : {
      "acct" : "admin",
      "avatar" : "http://mastodon.local/avatars/original/missing.png",
      "avatar_static" : "http://mastodon.local/avatars/original/missing.png",
      "bot" : false,
      "created_at" : "2022-09-08T00:00:00.000Z",
      "discoverable" : null,
      "display_name" : "",
      "emojis" : [],
      "fields" : [],
      "followers_count" : 0,
      "following_count" : 0,
      "group" : false,
      "header" : "http://mastodon.local/headers/original/missing.png",
      "header_static" : "http://mastodon.local/headers/original/missing.png",
      "id" : "108965278956942133",
      "last_status_at" : null,
      "locked" : false,
      "note" : "",
      "statuses_count" : 0,
      "url" : "http://mastodon.local/@admin",
      "username" : "admin"
   },
   "approved" : true,
   "confirmed" : true,
   "created_at" : "2022-09-08T23:03:26.762Z",
   "disabled" : false,
   "domain" : null,
   "email" : "admin@mastodon.local",
   "id" : "108965278956942133",
   "invite_request" : null,
   "ip" : "192.168.42.1",
   "ips" : [
      {
         "ip" : "192.168.42.1",
         "used_at" : "2022-09-15T01:38:58.851Z"
      }
   ],
   "locale" : null,
   "role" : {
      "color" : "",
      "created_at" : "2022-09-08T22:48:07.983Z",
      "highlighted" : true,
      "id" : 3,
      "name" : "Owner",
      "permissions" : 1,
      "position" : 1000,
      "updated_at" : "2022-09-08T22:48:07.983Z"
   },
   "silenced" : false,
   "suspended" : false,
   "username" : "admin"
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

        $model = AccountModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = AccountModel::sanitizePropertyName($property);

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
