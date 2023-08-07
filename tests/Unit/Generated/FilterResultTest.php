<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\FilterResultModel;

class FilterResultTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "status_matches" : [
      "109031743575371913"
   ],
   "filter" : {
      "title" : "Hide completely",
      "filter_action" : "hide",
      "context" : [
         "home"
      ],
      "expires_at" : "2022-09-20T17:27:39.296Z",
      "id" : "3"
   },
   "keyword_matches" : [
      "bad word"
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

        $model = FilterResultModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = FilterResultModel::sanitizePropertyName($property);

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
