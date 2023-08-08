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
   "id" : "1",
   "media_attachments" : [],
   "params" : {
      "application_id" : 3,
      "idempotency" : null,
      "in_reply_to_id" : null,
      "language" : null,
      "media_ids" : null,
      "poll" : null,
      "scheduled_at" : null,
      "sensitive" : null,
      "spoiler_text" : null,
      "text" : "test post",
      "visibility" : null,
      "with_rate_limit" : false
   },
   "scheduled_at" : "2022-09-29T00:00:00.000Z"
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
