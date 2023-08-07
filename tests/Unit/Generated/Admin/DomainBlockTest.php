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
  "id": "1",
  "domain": "example.com",
  "created_at": "2022-11-16T08:15:34.238Z",
  "severity": "noop",
  "reject_media": false,
  "reject_reports": false,
  "private_comment": null,
  "public_comment": null,
  "obfuscate": false
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

        $model = DomainBlockModel::fromArray($array);

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
