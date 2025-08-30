<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\CredentialAccountModel;

class CredentialAccountTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "acct" : "trwnh",
   "display_name" : "infinite love ⴳ",
   "fields" : [
      {
         "name" : "Website",
         "verified_at" : "2019-08-29T04:14:55.571+00:00"
      },
      {
         "name" : "Portfolio",
         "verified_at" : "2021-02-11T20:34:13.574+00:00"
      },
      {
         "name" : "Fan of:",
         "value" : "Punk-rock and post-hardcore (Circa Survive, letlive., La Dispute, THE FEVER 333)Manga (Yu-Gi-Oh!, One Piece, JoJo&#39;s Bizarre Adventure, Death Note, Shaman King)Platformers and RPGs (Banjo-Kazooie, Boktai, Final Fantasy Crystal Chronicles)",
         "verified_at" : null
      },
      {
         "name" : "What to expect:",
         "value" : "talking about various things i find interesting, and otherwise being a genuine and decent wholesome poster. i&#39;m just here to hang out and talk to cool people! and to spill my thoughts.",
         "verified_at" : null
      }
   ],
   "id" : "14715",
   "indexable" : true,
   "role" : {
      "color" : "",
      "highlighted" : false,
      "id" : "-99",
      "name" : "",
      "permissions" : "65536"
   },
   "roles" : [],
   "source" : {
      "attribution_domains" : [
         "example.com",
         "example.net"
      ],
      "discoverable" : false,
      "fields" : [
         {
            "name" : "Website",
            "verified_at" : "2019-08-29T04:14:55.571+00:00"
         },
         {
            "name" : "Portfolio",
            "verified_at" : "2021-02-11T20:34:13.574+00:00"
         },
         {
            "name" : "Fan of:",
            "value" : "Punk-rock and post-hardcore (Circa Survive, letlive., La Dispute, THE FEVER 333)Manga (Yu-Gi-Oh!, One Piece, JoJo's Bizarre Adventure, Death Note, Shaman King)Platformers and RPGs (Banjo-Kazooie, Boktai, Final Fantasy Crystal Chronicles)",
            "verified_at" : null
         },
         {
            "name" : "What to expect:",
            "value" : "talking about various things i find interesting, and otherwise being a genuine and decent wholesome poster. i'm just here to hang out and talk to cool people! and to spill my thoughts.",
            "verified_at" : null
         }
      ],
      "follow_requests_count" : 5,
      "hide_collections" : false,
      "indexable" : true,
      "language" : "",
      "privacy" : "public",
      "sensitive" : false
   },
   "username" : "trwnh"
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

        $model = CredentialAccountModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = CredentialAccountModel::sanitizePropertyName($property);

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
