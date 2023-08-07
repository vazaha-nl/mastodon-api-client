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
   "category" : "spam",
   "rules" : [],
   "assigned_account" : null,
   "action_taken_at" : null,
   "account" : {
      "email" : "admin@mastodon.local",
      "username" : "admin",
      "account" : {
         "username" : "admin",
         "acct" : "admin",
         "id" : "108965218747268792"
      },
      "domain" : null,
      "id" : "108965218747268792",
      "created_at" : "2022-09-08T22:48:07.985Z"
   },
   "forwarded" : false,
   "created_at" : "2022-09-09T21:19:23.085Z",
   "id" : "1",
   "target_account" : {
      "id" : "108965430868193066",
      "created_at" : "2022-09-08T23:42:04.731Z",
      "domain" : null,
      "account" : {
         "username" : "goody",
         "acct" : "goody",
         "id" : "108965430868193066"
      },
      "email" : "goody@mastodon.local",
      "username" : "goody"
   },
   "updated_at" : "2022-09-09T21:19:23.085Z",
   "action_taken_by_account" : null,
   "statuses" : [],
   "action_taken" : false,
   "comment" : ""
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
