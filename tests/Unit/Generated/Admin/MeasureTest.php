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
  "key": "instance_followers",
  "unit": null,
  "total": "0",
  "data": [
    {
      "date": "2022-09-14T00:00:00.000+00:00",
      "value": "0"
    },
    {
      "date": "2022-09-15T00:00:00.000+00:00",
      "value": "0"
    },
    {
      "date": "2022-09-16T00:00:00.000+00:00",
      "value": "0"
    },
    {
      "date": "2022-09-17T00:00:00.000+00:00",
      "value": "0"
    },
    {
      "date": "2022-09-18T00:00:00.000+00:00",
      "value": "0"
    },
    {
      "date": "2022-09-19T00:00:00.000+00:00",
      "value": "0"
    },
    {
      "date": "2022-09-20T00:00:00.000+00:00",
      "value": "0"
    },
    {
      "date": "2022-09-21T00:00:00.000+00:00",
      "value": "0"
    },
    {
      "date": "2022-09-22T00:00:00.000+00:00",
      "value": "0"
    }
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

        $model = MeasureModel::fromArray($array);

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
