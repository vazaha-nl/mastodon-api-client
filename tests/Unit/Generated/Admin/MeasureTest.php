<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\MeasureModel;

class MeasureTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "data" : [
      {
         "date" : "2022-09-14T00:00:00.000+00:00",
         "value" : "0"
      },
      {
         "date" : "2022-09-15T00:00:00.000+00:00",
         "value" : "0"
      },
      {
         "date" : "2022-09-16T00:00:00.000+00:00",
         "value" : "0"
      },
      {
         "date" : "2022-09-17T00:00:00.000+00:00",
         "value" : "0"
      },
      {
         "date" : "2022-09-18T00:00:00.000+00:00",
         "value" : "0"
      },
      {
         "date" : "2022-09-19T00:00:00.000+00:00",
         "value" : "0"
      },
      {
         "date" : "2022-09-20T00:00:00.000+00:00",
         "value" : "0"
      },
      {
         "date" : "2022-09-21T00:00:00.000+00:00",
         "value" : "0"
      },
      {
         "date" : "2022-09-22T00:00:00.000+00:00",
         "value" : "0"
      }
   ],
   "key" : "instance_followers",
   "total" : "0",
   "unit" : null
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

        $model = MeasureModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = MeasureModel::sanitizePropertyName($property);

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
