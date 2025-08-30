<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\QuoteModel;

class QuoteTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "quoted_status" : {
      "account" : {
         "acct" : "Gargron",
         "bot" : false,
         "created_at" : "2016-03-16T14:34:26.392Z",
         "discoverable" : true,
         "display_name" : "Eugen",
         "emojis" : [],
         "fields" : [],
         "followers_count" : 322930,
         "following_count" : 459,
         "group" : false,
         "id" : "1",
         "last_status_at" : "2019-12-10T08:14:44.811Z",
         "locked" : false,
         "note" : "<p>Developer of Mastodon and administrator of mastodon.social. I post service announcements, development updates, and personal stuff.</p>",
         "statuses_count" : 61323,
         "username" : "Gargron"
      },
      "application" : {
         "name" : "Web",
         "website" : null
      },
      "bookmarked" : false,
      "card" : null,
      "created_at" : "2019-12-08T03:48:33.901Z",
      "emojis" : [],
      "favourited" : false,
      "favourites_count" : 11,
      "id" : "103270115826048975",
      "in_reply_to_account_id" : null,
      "in_reply_to_id" : null,
      "language" : "en",
      "media_attachments" : [],
      "mentions" : [],
      "muted" : false,
      "poll" : null,
      "reblog" : null,
      "reblogged" : false,
      "reblogs_count" : 6,
      "replies_count" : 5,
      "sensitive" : false,
      "spoiler_text" : "",
      "tags" : [],
      "visibility" : "public"
   },
   "state" : "accepted"
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

        $model = QuoteModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = QuoteModel::sanitizePropertyName($property);

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
