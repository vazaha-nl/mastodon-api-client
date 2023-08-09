<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\CohortModel;

class CohortTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "data" : [
      {
         "date" : "2022-09-08T00:00:00+00:00",
         "rate" : 1,
         "value" : "2"
      },
      {
         "date" : "2022-09-09T00:00:00+00:00",
         "rate" : 1,
         "value" : "2"
      },
      {
         "date" : "2022-09-10T00:00:00+00:00",
         "rate" : 0.5,
         "value" : "1"
      },
      {
         "date" : "2022-09-11T00:00:00+00:00",
         "rate" : 0.5,
         "value" : "1"
      },
      {
         "date" : "2022-09-12T00:00:00+00:00",
         "rate" : 0.5,
         "value" : "1"
      },
      {
         "date" : "2022-09-13T00:00:00+00:00",
         "rate" : 0.5,
         "value" : "1"
      },
      {
         "date" : "2022-09-14T00:00:00+00:00",
         "rate" : 0.5,
         "value" : "1"
      }
   ],
   "frequency" : "day",
   "period" : "2022-09-08T00:00:00+00:00"
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

        $model = CohortModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = CohortModel::sanitizePropertyName($property);

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
