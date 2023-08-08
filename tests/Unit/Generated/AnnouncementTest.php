<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\AnnouncementModel;

class AnnouncementTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "all_day" : false,
   "content" : "<p>Looks like there was an issue processing audio attachments without embedded art since yesterday due to an experimental new feature. That issue has now been fixed, so you may see older posts with audio from other servers pop up in your feeds now as they are being finally properly processed. Sorry!</p>",
   "emojis" : [],
   "ends_at" : null,
   "id" : "8",
   "mentions" : [],
   "published_at" : "2020-07-03T01:27:38.726Z",
   "reactions" : [
      {
         "count" : 9,
         "me" : false,
         "name" : "bongoCat",
         "static_url" : "https://files.mastodon.social/custom_emojis/images/000/067/715/static/fdba57dff7576d53.png",
         "url" : "https://files.mastodon.social/custom_emojis/images/000/067/715/original/fdba57dff7576d53.png"
      },
      {
         "count" : 1,
         "me" : false,
         "name" : "thonking",
         "static_url" : "https://files.mastodon.social/custom_emojis/images/000/098/690/static/a8d36edc4a7032e8.png",
         "url" : "https://files.mastodon.social/custom_emojis/images/000/098/690/original/a8d36edc4a7032e8.png"
      },
      {
         "count" : 1,
         "me" : false,
         "name" : "AAAAAA",
         "static_url" : "https://files.mastodon.social/custom_emojis/images/000/071/387/static/AAAAAA.png",
         "url" : "https://files.mastodon.social/custom_emojis/images/000/071/387/original/AAAAAA.png"
      },
      {
         "count" : 1,
         "me" : true,
         "name" : "🤔"
      }
   ],
   "read" : true,
   "starts_at" : null,
   "statuses" : [],
   "tags" : [],
   "updated_at" : "2020-07-03T01:27:38.752Z"
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

        $model = AnnouncementModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = AnnouncementModel::sanitizePropertyName($property);

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
