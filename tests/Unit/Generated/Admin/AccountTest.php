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
   "locale" : null,
   "id" : "108965278956942133",
   "created_at" : "2022-09-08T23:03:26.762Z",
   "domain" : null,
   "silenced" : false,
   "role" : {
      "permissions" : 1,
      "position" : 1000,
      "color" : "",
      "id" : 3,
      "created_at" : "2022-09-08T22:48:07.983Z",
      "name" : "Owner",
      "highlighted" : true,
      "updated_at" : "2022-09-08T22:48:07.983Z"
   },
   "ips" : [
      {
         "ip" : "192.168.42.1",
         "used_at" : "2022-09-15T01:38:58.851Z"
      }
   ],
   "disabled" : false,
   "suspended" : false,
   "approved" : true,
   "ip" : "192.168.42.1",
   "confirmed" : true,
   "invite_request" : null,
   "account" : {
      "following_count" : 0,
      "fields" : [],
      "last_status_at" : null,
      "url" : "http://mastodon.local/@admin",
      "created_at" : "2022-09-08T00:00:00.000Z",
      "id" : "108965278956942133",
      "followers_count" : 0,
      "header" : "http://mastodon.local/headers/original/missing.png",
      "emojis" : [],
      "avatar_static" : "http://mastodon.local/avatars/original/missing.png",
      "note" : "",
      "username" : "admin",
      "statuses_count" : 0,
      "locked" : false,
      "display_name" : "",
      "header_static" : "http://mastodon.local/headers/original/missing.png",
      "avatar" : "http://mastodon.local/avatars/original/missing.png",
      "group" : false,
      "discoverable" : null,
      "bot" : false,
      "acct" : "admin"
   },
   "email" : "admin@mastodon.local",
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
