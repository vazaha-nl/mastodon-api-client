<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\ReportModel;

class ReportTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "account" : {
      "account" : {
         "acct" : "admin",
         "id" : "108965218747268792",
         "username" : "admin"
      },
      "created_at" : "2022-09-08T22:48:07.985Z",
      "domain" : null,
      "email" : "admin@mastodon.local",
      "id" : "108965218747268792",
      "username" : "admin"
   },
   "action_taken" : false,
   "action_taken_at" : null,
   "action_taken_by_account" : null,
   "assigned_account" : null,
   "category" : "spam",
   "comment" : "",
   "created_at" : "2022-09-09T21:19:23.085Z",
   "forwarded" : false,
   "id" : "1",
   "rules" : [],
   "statuses" : [],
   "target_account" : {
      "account" : {
         "acct" : "goody",
         "id" : "108965430868193066",
         "username" : "goody"
      },
      "created_at" : "2022-09-08T23:42:04.731Z",
      "domain" : null,
      "email" : "goody@mastodon.local",
      "id" : "108965430868193066",
      "username" : "goody"
   },
   "updated_at" : "2022-09-09T21:19:23.085Z"
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

        $model = ReportModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

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
