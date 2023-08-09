<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\SearchModel;

class SearchTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "accounts" : [
      {
         "acct" : "catstar@catgram.jp",
         "display_name" : "catstar",
         "id" : "180744",
         "username" : "catstar"
      },
      {
         "acct" : "catsareweird",
         "display_name" : "Cats Are Weird",
         "id" : "214293",
         "username" : "catsareweird"
      }
   ],
   "hashtags" : [
      {
         "history" : [
            {
               "accounts" : "9",
               "day" : "1574553600",
               "uses" : "10"
            }
         ],
         "name" : "cats",
         "url" : "https://mastodon.social/tags/cats"
      },
      {
         "history" : [
            {
               "accounts" : "5",
               "day" : "1574553600",
               "uses" : "6"
            }
         ],
         "name" : "catsofmastodon",
         "url" : "https://mastodon.social/tags/catsofmastodon"
      }
   ],
   "statuses" : [
      {
         "content" : "<p>cats<br>cats never change</p>",
         "created_at" : "2019-11-05T13:23:09.000Z",
         "id" : "103085519055545958"
      },
      {
         "content" : "<p>Cats are inherently good at self-care. </p><p><a href=\"https://mspsocial.net/tags/cats\" class=\"mention hashtag\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">#<span>cats</span}</p>",
         "created_at" : "2018-11-14T06:31:48.000Z",
         "id" : "101068121469614510",
         "spoiler_text" : "Cats"
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

        $model = SearchModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = SearchModel::sanitizePropertyName($property);

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
