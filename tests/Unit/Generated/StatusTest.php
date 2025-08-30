<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\StatusModel;

class StatusTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "account" : {
      "acct" : "Gargron",
      "bot" : false,
      "created_at" : "2016-03-16T14:34:26.392Z",
      "discoverable" : true,
      "display_name" : "Eugen",
      "emojis" : [],
      "fields" : [
         {
            "name" : "Patreon",
            "verified_at" : null
         },
         {
            "name" : "Homepage",
            "verified_at" : "2019-07-15T18:29:57.191+00:00"
         }
      ],
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
   "card" : {
      "author_name" : "",
      "author_url" : "",
      "description" : "When Peter Teich’s money went to another Barclays customer, the bank offered £25 as a token gesture",
      "embed_url" : "",
      "height" : 0,
      "html" : "",
      "image" : null,
      "provider_name" : "",
      "provider_url" : "",
      "title" : "‘I lost my £193,000 inheritance – with one wrong digit on my sort code’",
      "type" : "link",
      "width" : 0
   },
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

        $model = StatusModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = StatusModel::sanitizePropertyName($property);

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
