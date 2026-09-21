<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\CollectionModel;

class CollectionTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "account_id" : "113668893442515793",
   "created_at" : "2026-02-25T11:35:01.394Z",
   "description" : "Well worth following",
   "discoverable" : true,
   "id" : "116131056935959117",
   "item_count" : 2,
   "items" : [
      {
         "account_id" : "112658193342215767",
         "created_at" : "2026-02-25T11:35:01.394Z",
         "id" : "116141056635954112",
         "state" : "accepted"
      },
      {
         "account_id" : "117628196343117789",
         "created_at" : "2026-02-25T11:35:01.394Z",
         "id" : "116141051635254139",
         "state" : "pending"
      }
   ],
   "language" : "en",
   "local" : true,
   "name" : "Excellent people",
   "sensitive" : false,
   "tag" : {
      "name" : "discovery",
      "url" : "https://example.com/tags/discovery"
   },
   "updated_at" : "2026-02-25T11:37:38.182Z",
   "uri" : "https://example.com/ap/113668893442515793/collections/116131056935959117",
   "url" : "https://example.com/collections/116131056935959117"
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

        $model = CollectionModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = CollectionModel::sanitizePropertyName($property);

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
