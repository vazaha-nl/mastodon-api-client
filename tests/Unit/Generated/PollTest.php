<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\PollModel;

class PollTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "emojis" : [],
   "expired" : true,
   "expires_at" : "2019-12-05T04:05:08.302Z",
   "id" : "34830",
   "multiple" : false,
   "options" : [
      {
         "title" : "accept",
         "votes_count" : 6
      },
      {
         "title" : "deny",
         "votes_count" : 4
      }
   ],
   "own_votes" : [
      1
   ],
   "voted" : true,
   "voters_count" : null,
   "votes_count" : 10
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

        $model = PollModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = PollModel::sanitizePropertyName($property);

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
