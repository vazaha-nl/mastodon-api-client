<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\DomainBlockModel;

class DomainBlockTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "created_at" : "2022-11-16T08:15:34.238Z",
   "domain" : "example.com",
   "id" : "1",
   "obfuscate" : false,
   "private_comment" : null,
   "public_comment" : null,
   "reject_media" : false,
   "reject_reports" : false,
   "severity" : "noop"
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

        $model = DomainBlockModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = DomainBlockModel::sanitizePropertyName($property);

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
