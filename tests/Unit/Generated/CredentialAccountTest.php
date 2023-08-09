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
         "value" : "<a href=\"https://trwnh.com\" target=\"_blank\" rel=\"nofollow noopener noreferrer me\"><span class=\"invisible\">https://</span><span class=\"\">trwnh.com</span><span class=\"invisible\"></span></a>",
         "verified_at" : "2019-08-29T04:14:55.571+00:00"
      },
      {
         "name" : "Portfolio",
         "value" : "<a href=\"https://abdullahtarawneh.com\" target=\"_blank\" rel=\"nofollow noopener noreferrer me\"><span class=\"invisible\">https://</span><span class=\"\">abdullahtarawneh.com</span><span class=\"invisible\"></span></a>",
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
   "note" : "<p>i have approximate knowledge of many things. perpetual student. (nb/ace/they)</p><p>xmpp/email: a@trwnh.com<br /><a href=\"https://trwnh.com\" target=\"_blank\" rel=\"nofollow noopener noreferrer\"><span class=\"invisible\">https://</span><span class=\"\">trwnh.com</span><span class=\"invisible\"></span></a><br />help me live: <a href=\"https://liberapay.com/trwnh\" target=\"_blank\" rel=\"nofollow noopener noreferrer\"><span class=\"invisible\">https://</span><span class=\"\">liberapay.com/trwnh</span><span class=\"invisible\"></span></a> or paypal</p><p>- my triggers are moths and glitter<br />- i have all notifs except mentions turned off, so please interact if you wanna be friends! i literally will not notice otherwise<br />- dm me if i did something wrong, so i can improve<br />- purest person on fedi, do not lewd in my presence</p>",
   "role" : {
      "color" : "",
      "highlighted" : false,
      "id" : "-99",
      "name" : "",
      "permissions" : "65536"
   },
   "source" : {
      "fields" : [
         {
            "name" : "Website",
            "value" : "https://trwnh.com",
            "verified_at" : "2019-08-29T04:14:55.571+00:00"
         },
         {
            "name" : "Portfolio",
            "value" : "https://abdullahtarawneh.com",
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
      "language" : "",
      "note" : "i have approximate knowledge of many things. perpetual student. (nb/ace/they)\r\n\r\nxmpp/email: a@trwnh.com\r\nhttps://trwnh.com\r\nhelp me live: https://liberapay.com/trwnh or paypal\r\n\r\n- my triggers are moths and glitter\r\n- i have all notifs except mentions turned off, so please interact if you wanna be friends! i literally will not notice otherwise\r\n- dm me if i did something wrong, so i can improve\r\n- purest person on fedi, do not lewd in my presence",
      "privacy" : "public",
      "sensitive" : false
   },
   "username" : "trwnh"
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

        $model = CredentialAccountModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

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
