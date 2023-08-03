<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Generated\Trends;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Trends\LinkModel;

class LinkTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
  "url": "https://www.nbcnews.com/specials/plan-your-vote-2022-elections/index.html",
  "title": "Plan Your Vote: 2022 Elections",
  "description": "Everything you need to know about the voting rules where you live, including registration, mail-in voting, changes since 2020, and more.",
  "type": "link",
  "author_name": "NBC News",
  "author_url": "",
  "provider_name": "NBC News",
  "provider_url": "",
  "html": "",
  "width": 400,
  "height": 225,
  "image": "https://files.mastodon.social/cache/preview_cards/images/045/027/478/original/0783d5e91a14fd49.jpeg",
  "embed_url": "",
  "blurhash": "UcQmF#ay~qofj[WBj[j[~qof9Fayofofayay",
  "history": [
    {
      "day": "1661817600",
      "accounts": "7",
      "uses": "7"
    },
    {
      "day": "1661731200",
      "accounts": "23",
      "uses": "23"
    },
    {
      "day": "1661644800",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1661558400",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1661472000",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1661385600",
      "accounts": "0",
      "uses": "0"
    },
    {
      "day": "1661299200",
      "accounts": "0",
      "uses": "0"
    }
  ]
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

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
