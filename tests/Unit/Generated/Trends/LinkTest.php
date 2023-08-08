<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\Trends;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Trends\LinkModel;

class LinkTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "author_name" : "NBC News",
   "author_url" : "",
   "blurhash" : "UcQmF#ay~qofj[WBj[j[~qof9Fayofofayay",
   "description" : "Everything you need to know about the voting rules where you live, including registration, mail-in voting, changes since 2020, and more.",
   "embed_url" : "",
   "height" : 225,
   "history" : [
      {
         "accounts" : "7",
         "day" : "1661817600",
         "uses" : "7"
      },
      {
         "accounts" : "23",
         "day" : "1661731200",
         "uses" : "23"
      },
      {
         "accounts" : "0",
         "day" : "1661644800",
         "uses" : "0"
      },
      {
         "accounts" : "0",
         "day" : "1661558400",
         "uses" : "0"
      },
      {
         "accounts" : "0",
         "day" : "1661472000",
         "uses" : "0"
      },
      {
         "accounts" : "0",
         "day" : "1661385600",
         "uses" : "0"
      },
      {
         "accounts" : "0",
         "day" : "1661299200",
         "uses" : "0"
      }
   ],
   "html" : "",
   "image" : "https://files.mastodon.social/cache/preview_cards/images/045/027/478/original/0783d5e91a14fd49.jpeg",
   "provider_name" : "NBC News",
   "provider_url" : "",
   "title" : "Plan Your Vote: 2022 Elections",
   "type" : "link",
   "url" : "https://www.nbcnews.com/specials/plan-your-vote-2022-elections/index.html",
   "width" : 400
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

        $model = LinkModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = LinkModel::sanitizePropertyName($property);

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
