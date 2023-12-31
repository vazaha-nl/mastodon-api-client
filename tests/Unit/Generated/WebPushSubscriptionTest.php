<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\WebPushSubscriptionModel;

class WebPushSubscriptionTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "alerts" : {
      "favourite" : false,
      "follow" : false,
      "mention" : true,
      "poll" : false,
      "reblog" : false
   },
   "endpoint" : "https://yourdomain.example/listener",
   "id" : 328183,
   "server_key" : "BCk-QqERU0q-CfYZjcuB6lnyyOYfJ2AifKqfeGIm7Z-HiTU5T9eTG5GxVA0_OH5mMlI4UkkDTpaZwozy0TzdZ2M="
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

        $model = WebPushSubscriptionModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = WebPushSubscriptionModel::sanitizePropertyName($property);

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
