<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\CollectionItemModel;

class CollectionItemTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "account_id" : "112658193342215767",
   "created_at" : "2026-02-25T11:35:01.394Z",
   "id" : "116141056635954112",
   "state" : "accepted"
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

        $model = CollectionItemModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = CollectionItemModel::sanitizePropertyName($property);

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
