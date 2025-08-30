<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\ReportModel;

class ReportTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "action_taken" : false,
   "action_taken_at" : null,
   "category" : "spam",
   "comment" : "Spam account",
   "created_at" : "2022-08-25T09:56:16.763Z",
   "forwarded" : false,
   "id" : "48914",
   "rule_ids" : null,
   "status_ids" : [
      "108882889550545820"
   ],
   "target_account" : {
      "acct" : "Baluke",
      "bot" : false,
      "created_at" : "2022-05-26T00:00:00.000Z",
      "discoverable" : false,
      "display_name" : "Baluke Dental Studios",
      "emojis" : [],
      "fields" : [],
      "followers_count" : 0,
      "following_count" : 0,
      "group" : false,
      "id" : "108366849347798387",
      "last_status_at" : "2022-08-25",
      "locked" : false,
      "statuses_count" : 38,
      "username" : "Baluke"
   }
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

        $model = ReportModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = ReportModel::sanitizePropertyName($property);

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
