<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\ScheduledStatusModel;

class ScheduledStatusTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "scheduled_at" : "2022-09-29T00:00:00.000Z",
   "params" : {
      "in_reply_to_id" : null,
      "with_rate_limit" : false,
      "language" : null,
      "spoiler_text" : null,
      "visibility" : null,
      "sensitive" : null,
      "text" : "test post",
      "idempotency" : null,
      "scheduled_at" : null,
      "media_ids" : null,
      "application_id" : 3,
      "poll" : null
   },
   "media_attachments" : [],
   "id" : "1"
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

        $model = ScheduledStatusModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = ScheduledStatusModel::sanitizePropertyName($property);

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
