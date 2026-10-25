<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\AnnualReportModel;

class AnnualReportTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "account_id" : "55911",
   "data" : {
      "archetype" : "oracle",
      "time_series" : [
         {
            "followers" : 48,
            "month" : 12,
            "statuses" : 7123
         }
      ],
      "top_hashtags" : [
         {
            "count" : 12,
            "name" : "Mastodon"
         }
      ],
      "top_statuses" : {
         "by_favourites" : null,
         "by_reblogs" : "114348347829110933",
         "by_replies" : null
      }
   },
   "schema_version" : 2,
   "year" : 2025
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

        $model = AnnualReportModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = AnnualReportModel::sanitizePropertyName($property);

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
