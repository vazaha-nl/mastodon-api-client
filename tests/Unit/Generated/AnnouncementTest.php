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
   "mentions" : [],
   "content" : "<p>Looks like there was an issue processing audio attachments without embedded art since yesterday due to an experimental new feature. That issue has now been fixed, so you may see older posts with audio from other servers pop up in your feeds now as they are being finally properly processed. Sorry!</p>",
   "all_day" : false,
   "read" : true,
   "statuses" : [],
   "published_at" : "2020-07-03T01:27:38.726Z",
   "ends_at" : null,
   "updated_at" : "2020-07-03T01:27:38.752Z",
   "reactions" : [
      {
         "static_url" : "https://files.mastodon.social/custom_emojis/images/000/067/715/static/fdba57dff7576d53.png",
         "me" : false,
         "url" : "https://files.mastodon.social/custom_emojis/images/000/067/715/original/fdba57dff7576d53.png",
         "name" : "bongoCat",
         "count" : 9
      },
      {
         "url" : "https://files.mastodon.social/custom_emojis/images/000/098/690/original/a8d36edc4a7032e8.png",
         "name" : "thonking",
         "static_url" : "https://files.mastodon.social/custom_emojis/images/000/098/690/static/a8d36edc4a7032e8.png",
         "me" : false,
         "count" : 1
      },
      {
         "count" : 1,
         "name" : "AAAAAA",
         "url" : "https://files.mastodon.social/custom_emojis/images/000/071/387/original/AAAAAA.png",
         "me" : false,
         "static_url" : "https://files.mastodon.social/custom_emojis/images/000/071/387/static/AAAAAA.png"
      },
      {
         "name" : "🤔",
         "me" : true,
         "count" : 1
      }
   ],
   "starts_at" : null,
   "id" : "8",
   "tags" : [],
   "emojis" : []
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
