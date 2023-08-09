<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\ReactionModel;

class ReactionTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
[
   {
      "count" : 9,
      "me" : false,
      "name" : "bongoCat",
      "static_url" : "https://files.mastodon.social/custom_emojis/images/000/067/715/static/fdba57dff7576d53.png",
      "url" : "https://files.mastodon.social/custom_emojis/images/000/067/715/original/fdba57dff7576d53.png"
   },
   {
      "count" : 1,
      "me" : true,
      "name" : "🤔"
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

        $model = ReactionModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = ReactionModel::sanitizePropertyName($property);

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
