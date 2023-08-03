<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\AccountModel;

class AccountTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
  "id": "108965278956942133",
  "username": "admin",
  "domain": null,
  "created_at": "2022-09-08T23:03:26.762Z",
  "email": "admin@mastodon.local",
  "ip": "192.168.42.1",
  "role": {
    "id": 3,
    "name": "Owner",
    "color": "",
    "position": 1000,
    "permissions": 1,
    "highlighted": true,
    "created_at": "2022-09-08T22:48:07.983Z",
    "updated_at": "2022-09-08T22:48:07.983Z"
  },
  "confirmed": true,
  "suspended": false,
  "silenced": false,
  "disabled": false,
  "approved": true,
  "locale": null,
  "invite_request": null,
  "ips": [
    {
      "ip": "192.168.42.1",
      "used_at": "2022-09-15T01:38:58.851Z"
    }
  ],
  "account": {
    "id": "108965278956942133",
    "username": "admin",
    "acct": "admin",
    "display_name": "",
    "locked": false,
    "bot": false,
    "discoverable": null,
    "group": false,
    "created_at": "2022-09-08T00:00:00.000Z",
    "note": "",
    "url": "http://mastodon.local/@admin",
    "avatar": "http://mastodon.local/avatars/original/missing.png",
    "avatar_static": "http://mastodon.local/avatars/original/missing.png",
    "header": "http://mastodon.local/headers/original/missing.png",
    "header_static": "http://mastodon.local/headers/original/missing.png",
    "followers_count": 0,
    "following_count": 0,
    "statuses_count": 0,
    "last_status_at": null,
    "emojis": [],
    "fields": []
  }
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

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
