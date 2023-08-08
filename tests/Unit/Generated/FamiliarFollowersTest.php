<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\FamiliarFollowersModel;

class FamiliarFollowersTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
[
   {
      "accounts" : [
         {
            "acct" : "moss@goblin.camp",
            "id" : "1087990",
            "username" : "moss"
         },
         {
            "acct" : "vivianrose",
            "id" : "1092723",
            "username" : "vivianrose"
         }
      ],
      "id" : "1"
   },
   {
      "accounts" : [],
      "id" : "2"
   }
]

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

        $model = FamiliarFollowersModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = FamiliarFollowersModel::sanitizePropertyName($property);

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
